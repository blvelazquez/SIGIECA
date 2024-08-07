<?php
    require_once(__DIR__ . "/../models/procesosModel.php");

    class procesosController{
        private $model;

        public function __construct(){
            $this->model = new procesosModel();
        }

        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }
    }

?>