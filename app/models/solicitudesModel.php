<?php
     class solicitudesModel{
        private $PDO;
        
        public function __construct() {
            require_once(__DIR__ . "/../config/db.php");
            $con = new db_local();
            $this->PDO = $con->conexion();
        }

        public function list(){
            $stament = $this->PDO->prepare("SELECT s.idSolicitud, u.nombreUsuario, u.apellidoPaternoUsuario, 
                                            u.apellidoMaternoUsuario, s.idPartida, p.nombre_partida,
                                            s.idProceso, pr.nombre_proceso, s.fecha_solicitud, s.tipo, 
                                            s.descripcion, s.idEspacio, es.Descripcion as Descripcion_esp
                                            FROM sig_solicitudes AS s
                                            JOIN sig_usuarios AS u ON s.idUsuarios = u.idUsuarios
                                            JOIN sig_partidas AS p ON s.idPartida = p.idPartida
                                            JOIN sig_proceso AS pr ON s.idProceso = pr.idProceso
                                            JOIN sig_espacios AS es ON s.idEspacio = es.idEspacio;");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function last($tipo){

            $stament = $this->PDO->prepare("SELECT COUNT(*) as total FROM sig_solicitudes WHERE tipo = :tipo");
            $stament->bindParam(":tipo", $tipo, PDO::PARAM_STR);
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

            return ($stament->execute()) ? $idSolicitud : false ;
        }        
     }
?>