<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class Flat{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
        
        public function insertFlatDetails($floor_no, $member_name){
            $query  = "INSERT INTO flat(flat_id, member_name, created_at, updated_at) VALUES (?, ?, ?, ?)";

            $current_date = date("Y-m-d h:i:sa");
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ssss", $floor_no, $member_name, $current_date, $current_date);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING FLAT");
            }
        }
        
        public function getTotalFlatCount(){
            $sql = "SELECT count(*) AS total_count from flat";
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching total count of FLAT");
            }
        }
        
        public function getAllDetailsOfAFlat($flat_id){
            $sql = "SELECT * FROM flat WHERE id=$flat_id";
            $result_set = $this->connection->query($sql);
            if($this->connection->error)
                echo $this->connection->error;
            return ($result_set);
        }

        public function readAllFlat(){
            $result_set = $this->connection->query("SELECT * FROM flat");
            return $result_set;
        }
        
        public function getDetails(){
            $result_set = $this->connection->query("SELECT flat.member_name, flat.id, building.flat_no FROM flat JOIN building 
            ON flat.flat_id = building.id");
            return $result_set;
        }
        
        public function updateFlat($flat_id, $flat_no, $member_name){
            $query  = "UPDATE flat SET flat_id = ?, member_name = ?, updated_at = ? WHERE id = ?";

            $current_date = date("Y-m-d h:i:sa");
            
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("issi", $flat_no, $member_name, $current_date, $flat_id);
            if($preparedStatement->execute()){
                return true;
            } else{
                die("ERROR WHILE UPDATING Flat");
            }
        }

        public function deleteFloor($fid){
            $query = "DELETE FROM building WHERE id='$fid'";
            $this->connection->query($query);
        }
    }
?>