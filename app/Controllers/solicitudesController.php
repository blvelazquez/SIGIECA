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
            $fecha_solicitud = date("y-m-d");
            $id = $this->model->insert('S-ACA-003-24', $idUsuario, $idPartida, $idProceso, $fecha_solicitud, $tipo, $descripcion, $idEspacio);
            return ($id!= false) ? header($this->location) : false;
        }        
    }
?>
