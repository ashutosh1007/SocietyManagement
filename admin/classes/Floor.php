<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class Floor{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
        
        public function insertFloorDetails($floor_no, $flat_no){
            
            $query  = "INSERT INTO building (floor_no, flat_no, created_at, updated_at) VALUES (?, ?, ?, ?)";

            $current_date = date("Y-m-d h:i:sa");
            
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ssss", $floor_no, $flat_no, $current_date, $current_date);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING FLAT");
            }
        }
        
        public function getTotalFlatCount(){
            $sql = "SELECT count(*) AS total_count from building";
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching total count of FLAT");
            }
        }
        
        public function getAllDetailsOfAFloor($fid){
            $sql = "SELECT * FROM building WHERE id=$fid";
            $result_set = $this->connection->query($sql);
            if($this->connection->error)
                echo $this->connection->error;
            return ($result_set);
        }

        public function readAllFloor(){
            $result_set = $this->connection->query("SELECT * FROM building");
            return $result_set;
        }
        
        public function updateFloor($fid, $floor_no, $flat_no){
            $query  = "UPDATE building SET floor_no = ?, flat_no = ?, updated_at = ? WHERE id = ?";

            $current_date = date("Y-m-d h:i:sa");
            
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("sssi", $floor_no, $flat_no, $current_date, $fid);
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