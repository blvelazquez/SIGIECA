<?php

    require_once(__DIR__ . "/../models/solicitudesModel.php");

    class solicitudesController{
        private $model;
        private $location;

        public function __construct(){
            $this->model = new solicitudesModel();
            $this->location = "Location:../../../index.php#views/solicitudes/listaSolicitudes";
        }

        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }

        public function save($idUsuario, $idEspacio, $idPartida, $idProceso, $descripcion, $tipo){
            // metodo para obtener el id de la solicitud
            $tipos = [
                '1' => 'SCO',
                '2' => 'SMI',
                '3' => 'SME'
            ];
            
            // Asignación con un valor por defecto
            $tipoSolicitud = $tipos[$tipo] ?? 'S';
            echo("<br>".$tipoSolicitud);

            $row = $this->model->last($tipo);
            
            // if (!empty($row) && isset($row[0]['total'])) {
            //     $cons = $row[0]['total'];
            //     echo "<br> Este es el último: " . $cons;
            // } else {
            //     $cons='001';
            //     echo("<br> No se encontró ningún registro.".$cons);
            // }
            
            $cons = str_pad($row[0]['total'] + 1, 3, '0', STR_PAD_LEFT); // Asegura que tenga 3 dígitos, con ceros a la izquierda

            // echo("<br>".$cons);
            $añoActual = date('y'); // Obtiene los últimos dos dígitos del año actual
            
            $fecha_solicitud = date("y-m-d");
            // $id = $this->model->insert('SCO-ACA-002-24', $idUsuario, $idPartida, $idProceso, $fecha_solicitud, $tipo, $descripcion, $idEspacio);
            // return ($id!= false) ? header($this->location) : false;
        }        
    }
?>
