<?php

require_once(__DIR__ . "/../models/equipoDTAModel.php");

    class equipoDTAController{
        private $model;

        public function __construct(){
            $this->model = new equipoDTAModel();
        }


        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
            //echo('estoy en la función list en el controller');
            //print_r($this->model ->list());

            
        }
    }




?>