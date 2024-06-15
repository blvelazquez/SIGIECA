<?php

    class loginModel{

        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function login($usuario, $password){
            $stament = $this->PDO->prepare("SELECT loginUsuario, passwordUsuario  FROM sig_usuarios 
                                            where loginUsuario = :usuario and passwordUsuario =:pass");
            $stament->bindParam(":usuario", $usuario);
            $stament->bindParam(":pass", $password);
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>