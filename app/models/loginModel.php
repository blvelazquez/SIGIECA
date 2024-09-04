<?php

    class loginModel{

        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function login($usuario, $password){
            $stament = $this->PDO->prepare("SELECT idUsuarios, loginUsuario, passwordUsuario, rolUsuario  FROM sig_usuarios 
                                            where loginUsuario = :usuario");
            $stament->bindParam(":usuario", $usuario);
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>