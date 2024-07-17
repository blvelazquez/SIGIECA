<?php

    require_once(__DIR__ . "/../models/tiposMttoModel.php");
    
    class tiposMttoController{
        private $model;

        public function __construct(){
            $this->model = new tiposMttoModel();
        }

        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }
    }

?>