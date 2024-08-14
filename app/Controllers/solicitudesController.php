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
    }
?>
