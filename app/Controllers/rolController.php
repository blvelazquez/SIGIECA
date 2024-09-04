<?php
    require_once(__DIR__ . "/../models/rolModel.php");

    class rolController{
        private $model;
        
        public function __construct(){
            $this->model = new rolModel();
        }
       
        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }

        public function listId($idRol){
            return ($this->model->listId($idRol)!= false) ? $this->model->listId($idRol) : false;
        }
    }
?>