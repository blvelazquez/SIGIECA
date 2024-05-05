<?php
        
    class usuariosModel{
        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function insert($login, $password) {
            $stament = $this->PDO->prepare("INSERT INTO sig_usuarios (loginUsuario, passwordUsuario) 
            VALUES (:login, :password)");
            $stament->bindParam(":login", $login, PDO::PARAM_STR);
            $stament->bindParam(":password", $password, PDO::PARAM_STR);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function list(){
            $stament = $this->PDO->prepare("SELECT * FROM sig_usuarios");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update(){

        }
      
        public function delete(){

        }
    }
?>