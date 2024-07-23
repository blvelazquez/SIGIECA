<?php

require_once(__DIR__ . "/../models/equipoServModel.php");

    class equipoServicioController{
        private $model;

        public function __construct(){
            $this->model = new equipoServModel();
        }


        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
            //echo('estoy en la función list en el controller');
            //print_r($this->model ->list());

            
        }
    }

?>