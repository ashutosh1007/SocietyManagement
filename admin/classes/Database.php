<?php
    class Database{
        private $host;
        private $username;
        private $password;
        private $database;
        private $connection;
        
        public function __construct(){
            $this->host = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->database = "societymanagement";
            $this->connectDB();
        }    
        
        public function connectDB(){
            $this->connection = new mysqli($this->host, $this->username, $this->password);
            
            if(mysqli_connect_error()){
                die("<h2 class='text-center'>Connection Failed : " . mysqli_error() . "</h2>");
            }
            
            $db_selected = $this->connection->select_db($this->database);

            if(!$db_selected){
                
            }
            else{
//                echo "Database Selected";
            }
        }

        public function query($sql){
            $result = $this->connection->query($sql);
            if(!$result){
                die("Query Failed! " .$sql );
            }
            return $result;
        }
        
        public function escape_string(){
            $escaped_string = $this->connection->real_escape_string($string);
            return $escaped_string;
        }
        
        public function getConnection(){
            return $this->connection;
        }
        
        function __destruct(){
            //this is destructor
        }
    }
    $database = new Database();
?>