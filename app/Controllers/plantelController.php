<?php
    require_once(__DIR__ . "/../models/plantelModel.php");

    class plantelController{
        private $model;
        
        public function __construct(){
            $this->model = new plantelModel();
        }
       
        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }
    }
?>