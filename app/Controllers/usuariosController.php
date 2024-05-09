<?php
    require_once(__DIR__ . "/../models/usuariosModel.php");

    class usuariosController{
        private $model;
        private $location;


        public function __construct(){
            $this->model = new usuariosModel();
            $this->location = "Location:../../../index.php#views/usuarios/listaUsuarios";
        }
       
        
        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }

       
    }
?>