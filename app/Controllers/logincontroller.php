<?php
    require_once(__DIR__ . "/../models/loginModel.php");

    class loginController {
        private $model;

        public function __construct(){
            $this->model = new loginModel();
        }

        public function login($usuario, $password){
            $this->model->login($usuario, $password);

            return($this->model->login($usuario, $password)!= false) ? $this->model->login($usuario, $password) : false;
        }
    }
?>