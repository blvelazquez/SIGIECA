<?php
    require_once(__DIR__ . "/../models/usuariosModel.php");

    class usuariosController{
        private $model;

        public function __construct(){
            $this->model = new usuariosModel();
        }
       
        public function guardar($login, $password){
            if($login != '' && $password != ''){
                print($login);
                print($password);
                $id = $this->model->insert($login, $password);
                return ($id!=false) ? '' : false;        
            }


        }
    }
?>