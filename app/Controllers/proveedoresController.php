<?php
    require_once(__DIR__ . "/../models/proveedoresModel.php");

    class proveedoresController{
        private $model;
        private $location;
        
        public function __construct(){
            $this->model = new proveedoresModel();
            $this->location = "Location:../../../index.php#views/proveedores/listaProveedores";
        }
       
        
        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }

        public function save($numpro, $provname, $replegal){
            $id= $this->model->insert($numpro, $provname, $replegal);
            return ($id!= false) ? header($this->location) : false;

        }
        // public function save($fname, $lname, $name, $user,$pass, $email, $rol){
        //     $dateRegister = date("y-m-d");
        //     $lastAcces = date("y-m-d");
        //     $id = $this->model->insert($fname, $lname, $name, $user,$pass, $email, $rol, $dateRegister, $lastAcces);

        //     return ($id!= false) ? header($this->location) : false;
        // }

       
    }
?>