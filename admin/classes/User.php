<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class User{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
        
        public function insertMember($member_name, $member_email, $member_role){
            
            $query  = "INSERT INTO members (member_name, member_email, member_password, member_role, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)";

            $current_date = date("Y-m-d h:i:sa");
            $member_password = $member_name;
            
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ssssss", $member_name, $member_email, $member_password, $member_role, $current_date, $current_date);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING STUDENT");
            }
        }

        public function register($member_name, $member_email, $member_password){
            $options = [
                'cost' => 12,
            ];
            $hashedPassword = password_hash( $member_password , PASSWORD_BCRYPT, $options);
            
            $query  = "INSERT INTO members (member_name, member_email, member_password, created_at, updated_at) VALUES (?, ?, ?, ?, ?)";

            $current_date = date("Y-m-d h:i:sa");
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("sssss", $member_name, $member_email, $hashedPassword, $current_date, $current_date);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING STUDENT");
            }
        }
        
        public function getTotalMemberCount(){
            $sql = "SELECT count(*) AS total_count from members";
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching total count of students");
            }
        }
        
        public function getAllDetailsOfAMember($mid){
            $sql = "SELECT * FROM members WHERE id=$mid";
            $result_set = $this->connection->query($sql);
            if($this->connection->error)
                echo $this->connection->error;
            return ($result_set);
        }

        public function readAllMembers(){
            $result_set = $this->connection->query("SELECT * FROM members");
            return $result_set;
        }
        
        public function updateMember($mid, $member_name, $member_email, $member_role){
            $query  = "UPDATE members SET member_name = ?, member_email = ?, member_role = ?, updated_at = ? WHERE id = ?";

            $current_date = date("Y-m-d h:i:sa");
            
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ssssi", $member_name, $member_email, $member_role, $current_date, $mid);
            if($preparedStatement->execute()){
                return true;
            } else{
                die("ERROR WHILE UPDATING Member");
            }
        }

        public function deleteMember($mid){
            $query = "DELETE FROM Members WHERE id='$mid'";
            $this->connection->query($query);
        }
        
        public function processLogin($email, $password){
            $query  = "SELECT * FROM members WHERE member_email = ?";
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("s", $email);
            $preparedStatement->execute();
            
            $preparedStatement->store_result(); #PHP 7 method
            
            $count = $preparedStatement->num_rows;
            if($count == 1) {
                $preparedStatement->bind_result($id, $member_name, $member_email, $member_password, $member_role, $created_at, $updated_at);
                $preparedStatement->fetch();
                if($password === $member_password){
                    $_SESSION['login'] = true;
                    $_SESSION['member_id'] = $id;
                    $_SESSION['member_name'] = $member_name;
                    $_SESSION['member_email'] = $member_email;
                    $_SESSION['member_password'] = $member_password;
                    $_SESSION['member_role'] = $member_role;
                    return true;
                } else{
                    return false;
                }
            }
        }
        
        public function user_logout() {
            $_SESSION['login'] = false;
            $_SESSION['member_id'] = null;
            $_SESSION['member_name'] = null;
            $_SESSION['member_email'] = null;
            $_SESSION['member_password'] = null;
            $_SESSION['member_role'] = null;
            session_destroy();
            Functions::redirect("login.php");
        }
                
        public function get_session(){
            return $_SESSION['login'];
        }
        
        public static function checkActiveSession(){
            if(!Session::isSessionStart())
                Functions::redirect("login.php");
        }
        
        public function checkUser(){
            if(!isset($_SESSION['member_email'])) {
                    die ("<h3 style = 'color: red'> You have not logged in please Login from <a href = '../admin/login.php'>here</h3>");
            }else{
                $email = $_SESSION["member_email"];
                return $email;
            }
        }
    }
?>