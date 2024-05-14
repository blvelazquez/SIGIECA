<?php
        
    class usuariosModel{
        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function insert($fname, $lname, $name, $user, $pass, $email, $rol, $dateRegister, $lastAcces) {
            
            $stament = $this->PDO->prepare("INSERT INTO sig_usuarios (loginUsuario, passwordUsuario, email, nombreusuario,
            apellidoPaternoUsuario, apellidoMaternoUsuario, fechaRegistroUsuario, ultimoAccesoUsuario, rolUsuario) 
            VALUES (:user, :pass, :email, :name, :fname, :lname, :dateRegister, :lastAcces, :rol)");
            $stament->bindParam(":user", $user, PDO::PARAM_STR);
            $stament->bindParam(":pass", $pass, PDO::PARAM_STR);
            $stament->bindParam(":email", $email, PDO::PARAM_STR);
            $stament->bindParam(":name", $name, PDO::PARAM_STR);
            $stament->bindParam(":fname", $fname, PDO::PARAM_STR);
            $stament->bindParam(":lname", $lname, PDO::PARAM_STR);
            $stament->bindParam(":dateRegister", $dateRegister, PDO::PARAM_STR);
            $stament->bindParam(":lastAcces", $lastAcces, PDO::PARAM_STR);
            $stament->bindParam(":rol", $rol, PDO::PARAM_STR);

            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function list(){
            $stament = $this->PDO->prepare("SELECT * FROM sig_usuarios");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function delete($idUsuario){
            $stament = $this->PDO->prepare("DELETE FROM sig_usuarios where idUsuarios = :id");
            $stament->bindParam(":id", $idUsuario, PDO::PARAM_STR);
            return($stament->execute()) ? $idUsuario : false ;
        }

       
    }
?>