<?php
    require_once(__DIR__ . "/../models/espaciosModel.php");

    class espaciosController{
        private $model;

        public function __construct(){
            $this->model = new espaciosModel();
        }

        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }
    }

?>