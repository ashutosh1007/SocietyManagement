<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class Water{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
        
        public function getDetails(){
            $result_set = $this->connection->query("SELECT * FROM sensordata ORDER BY ID DESC LIMIT 1");
            return $result_set;
        }
    }
?>