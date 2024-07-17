<?php
    class espaciosModel{
        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function list(){
            $stament = $this->PDO->prepare("select * from sig_espacios");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>