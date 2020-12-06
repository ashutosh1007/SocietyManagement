<?php 
    include_once("Database.php");
    include_once("Session.php");
    require_once("Functions.php");

    class Forum{
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }
    }
?>