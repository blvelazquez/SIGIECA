<?php

    class rolModel{

        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function list(){
            $stament = $this->PDO->prepare("SELECT * FROM sig_rol");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function listId($idRol){
            $stament = $this->PDO->prepare("SELECT cve_Rol FROM sig_rol where idRol = :id");
            $stament->bindParam(":id", $idRol);
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>