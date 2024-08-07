<?php
    class partidasModel{
        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function list(){
            $stament = $this->PDO->prepare("select * from sig_partidas");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>