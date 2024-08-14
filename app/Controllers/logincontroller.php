<?php
    require_once(__DIR__ . "/../models/loginModel.php");

    class loginController {
        private $model;
        private $fileErrors;

        public function __construct(){
            $this->model = new loginModel();
            $this->fileMessage = "mensajes.log";
        }

        public function saveMessage($id, $typeMessage){
            if($id == false){
                $messageError = ($typeMessage == 'LOGIN')? "Usuario o contraseña incorrecto ": "Datos Erroneos";                        
                file_put_contents($this->fileMessage, 'ERROR'.$messageError.PHP_EOL , FILE_APPEND);
            }

        }

        public function login($usuario, $password){
            $id = $this->model->login($usuario, $password);
            $pass_encrypt = $id[0]['passwordUsuario'];
            if(password_verify($password, $pass_encrypt)){
                $this->saveMessage($id,'LOGIN');
                session_start();
                $_SESSION['idUsuario'] = $id[0]['idUsuarios'];
            }else{
                $this->saveMessage(false,'LOGIN');
                $id= false;
            }
            
            return($id != false) ? $this->model->login($usuario, $password) : false;
        }
    }
?>