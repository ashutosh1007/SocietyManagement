<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class Notice{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
        
        public function insertNotice($notice_title, $notice_description){
            $query  = "INSERT INTO notice(notice_title, notice_description, created_at, updated_at) VALUES (?, ?, ?, ?)";

            $current_date = date("Y-m-d h:i:sa");
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ssss", $notice_title, $notice_description, $current_date, $current_date);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING NOTICE");
            }
        }
        
        public function getTotalNoticeCount(){
            $sql = "SELECT count(*) AS total_count from notice";
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching total count of Notice");
            }
        }
        
        public function getAllDetailsOfANotice($notice_id){
            $sql = "SELECT * FROM notice WHERE id=$notice_id";
            $result_set = $this->connection->query($sql);
            if($this->connection->error)
                echo $this->connection->error;
            return ($result_set);
        }

        public function readAllNotice(){
            $result_set = $this->connection->query("SELECT * FROM notice");
            return $result_set;
        }
        
        public function getDetails(){
            $result_set = $this->connection->query("SELECT flat.member_name, flat.id, building.flat_no FROM flat JOIN building 
            ON flat.flat_id = building.id");
            return $result_set;
        }

        public function updateNotice($notice_id, $notice_title, $notice_description){
            $query  = "UPDATE notice SET notice_title = ?, notice_description = ?, updated_at = ? WHERE id = ?";

            $current_date = date("Y-m-d h:i:sa");
            
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("sssi", $notice_title, $notice_description, $current_date, $notice_id);
            if($preparedStatement->execute()){
                return true;
            } else{
                die("ERROR WHILE UPDATING Notice");
            }
        }

        public function deleteNotice($nid){
            $query = "DELETE FROM notice WHERE id='$nid'";
            $this->connection->query($query);
        }
    }
?>