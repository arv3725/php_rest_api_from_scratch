<?php
    class Database{
        private $host = 'localhost';
        private $port = 8890;
        private $db_name = 'myblog';
        private $username = 'fred';
        private $password = 'zap';
        private $conn;

        //DB Connect
        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host='. $this->host . ';port='. $this->port.';dbname='. $this->db_name, 
                $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo 'Connection Error: '. $e->getMessage();
            }

            return $this->conn;
        }
 
  }