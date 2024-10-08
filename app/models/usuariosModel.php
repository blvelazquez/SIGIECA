<?php
        
    class usuariosModel{
        private $PDO;

        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function insert($fname, $lname, $name, $user, $pass, $email, $rol, $dateRegister, $lastAcces, $idPlantel) {
            
            $stament = $this->PDO->prepare("INSERT INTO sig_usuarios (loginUsuario, passwordUsuario, email, nombreusuario,
            apellidoPaternoUsuario, apellidoMaternoUsuario, fechaRegistroUsuario, ultimoAccesoUsuario, rolUsuario, idCCT) 
            VALUES (:user, :pass, :email, :name, :fname, :lname, :dateRegister, :lastAcces, :rol, :idPlantel)");
            $stament->bindParam(":user", $user, PDO::PARAM_STR);
            $stament->bindParam(":pass", $pass, PDO::PARAM_STR);
            $stament->bindParam(":email", $email, PDO::PARAM_STR);
            $stament->bindParam(":name", $name, PDO::PARAM_STR);
            $stament->bindParam(":fname", $fname, PDO::PARAM_STR);
            $stament->bindParam(":lname", $lname, PDO::PARAM_STR);
            $stament->bindParam(":dateRegister", $dateRegister, PDO::PARAM_STR);
            $stament->bindParam(":lastAcces", $lastAcces, PDO::PARAM_STR);
            $stament->bindParam(":rol", $rol, PDO::PARAM_STR);
            $stament->bindParam(":idPlantel", $idPlantel, PDO::PARAM_STR);

            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function list(){
            $stament = $this->PDO->prepare("SELECT usu.idUsuarios, usu.loginUsuario, usu.passwordUsuario,
                                            usu.email, usu.nombreusuario, usu.apellidoPaternoUsuario, 
                                            usu.apellidoMaternoUsuario, usu.fechaRegistroUsuario, usu.ultimoAccesoUsuario, 
                                            usu.rolUsuario, rol.nombre_Rol, pla.plantel 
                                            FROM sig_usuarios as usu inner join sig_rol as rol on rol.idRol = usu.rolUsuario
                                            LEFT  join sig_plantel as pla on usu.idCCT = pla.idCCT");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function delete($idUsuario){
            $stament = $this->PDO->prepare("DELETE FROM sig_usuarios where idUsuarios = :id");
            $stament->bindParam(":id", $idUsuario, PDO::PARAM_STR);
            return($stament->execute()) ? $idUsuario : false ;
        }

        public function show($idUsuario){
            $stament = $this->PDO->prepare("SELECT * FROM sig_usuarios where idUsuarios = :id");
            $stament->bindParam(":id", $idUsuario);
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($idUsuario, $fname, $lname, $name, $user, $pass, $email, $rol, $fechaReg, $fechaAcces, $idPlantel){
            $stament = $this->PDO->prepare("UPDATE sig_usuarios
            SET loginUsuario = :user, passwordUsuario = :pass, email = :email, nombreusuario = :name,
            apellidoPaternoUsuario = :fname, apellidoMaternoUsuario = :lname, fechaRegistroUsuario = :fechaReg, 
            ultimoAccesoUsuario = :fechaAcces, rolUsuario = :rol, idCCT = :idPlantel WHERE idUsuarios = :idUsuario");
            $stament->bindParam(":user", $user, PDO::PARAM_STR);
            $stament->bindParam(":pass", $pass, PDO::PARAM_STR);
            $stament->bindParam(":email", $email, PDO::PARAM_STR);
            $stament->bindParam(":name", $name, PDO::PARAM_STR);
            $stament->bindParam(":fname", $fname, PDO::PARAM_STR);
            $stament->bindParam(":lname", $lname, PDO::PARAM_STR);
            $stament->bindParam(":fechaReg", $fechaReg, PDO::PARAM_STR);
            $stament->bindParam(":fechaAcces", $fechaAcces, PDO::PARAM_STR);
            $stament->bindParam(":rol", $rol, PDO::PARAM_STR);
            $stament->bindParam(":idPlantel", $idPlantel, PDO::PARAM_STR);
            $stament->bindParam(":idUsuario", $idUsuario, PDO::PARAM_STR);
            
            return($stament->execute()) ? $idUsuario : false;
        }

       
    }
?>