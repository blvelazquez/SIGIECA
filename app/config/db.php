<?php
    class DBException extends Exception {}

    class db_local {
        private $host = "localhost";
        private $dbname = 'sigiecadb';
        private $user = 'sigiadmin';
        private $password = 'sigiadmin1+';
        private $PDO;
    
        public function conexion() {
            try {
                $this->PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
                return $this->PDO;
            } catch (PDOException $e) {
                throw new DBException("Error en la conexión a la base de datos: " . $e->getMessage());
            }
        }
    }

    class db_server {
        private $host = "localhost";
        private $dbname = '';
        private $user = '';
        private $password = '';
        private $PDO;
    
        public function conexion() {
            try {
                $this->PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
                return $this->PDO;
            } catch (PDOException $e) {
                throw new DBException("Error en la conexión a la base de datos: " . $e->getMessage());
            }
        }
    }

?>