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

        public function save($fname, $lname, $name, $user, $pass, $email, $rol){
            $dateRegister = date("y-m-d");
            $lastAcces = date("y-m-d");
            $pass = password_hash($pass, PASSWORD_BCRYPT);
            $id = $this->model->insert($fname, $lname, $name, $user, $pass, $email, $rol, $dateRegister, $lastAcces);

            return ($id!= false) ? header($this->location) : false;
        }

        public function delete($idUsuario){
            $id = $this->model->delete($idUsuario);
            return($id!=false) ? header($this->location) : false;
        }

        public function show($idUsuario){
            return($this->model->show($idUsuario)!= false) ? $this->model->show($idUsuario) : false;
        }

        public function update($idUsuario, $fname, $lname, $name, $user, $pass, $email, $rol, $fechaReg, $fechaAcces){
            $id = $this->model->update($idUsuario, $fname, $lname, $name, $user, $pass, $email, $rol, $fechaReg, $fechaAcces);
            return($id != false) ? header($this->location) : false;
        }

    }
?>