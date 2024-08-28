<?php

    class plantelModel{

        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function list(){
            $stament = $this->PDO->prepare("select idCCT, plantel from sig_plantel order by plantel");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>