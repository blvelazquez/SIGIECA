<?php
    require_once(__DIR__ . "/../models/partidasModel.php");

    class partidasController{
        private $model;

        public function __construct(){
            $this->model = new partidasModel();
        }

        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }
    }

?>