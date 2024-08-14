<?php
     class solicitudesModel{
        private $PDO;
        
        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function list(){
            $stament = $this->PDO->prepare("SELECT * FROM sig_solicitudes");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function insert($idSolicitud, $idUsuario, $idPartida, $idProceso, $fecha_solicitud, $tipo, $descripcion, $idEspacio) {


            $stament = $this->PDO->prepare("INSERT INTO sig_solicitudes (idSolicitud, idUsuarios, idPartida, idProceso, 
                                            fecha_solicitud, tipo, descripcion, idEspacio) 
            VALUES (:idSolicitud, :idUsuario, :idPartida, :idProceso, :fecha_solicitud, :tipo, :descripcion, :idEspacio)");
            $stament->bindParam(":idSolicitud", $idSolicitud, PDO::PARAM_STR);
            $stament->bindParam(":idUsuario", $idUsuario, PDO::PARAM_STR);
            $stament->bindParam(":idPartida", $idPartida, PDO::PARAM_STR);
            $stament->bindParam(":idProceso", $idProceso, PDO::PARAM_STR);
            $stament->bindParam(":fecha_solicitud", $fecha_solicitud, PDO::PARAM_STR);
            $stament->bindParam(":tipo", $tipo, PDO::PARAM_STR);
            $stament->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $stament->bindParam(":idEspacio", $idEspacio, PDO::PARAM_STR);

            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }        
     }
?>