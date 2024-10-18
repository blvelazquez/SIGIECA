<?php

    require_once(__DIR__ . "/../models/solicitudesModel.php");

    class solicitudesController{
        private $model;
        private $location;
        private $fileErrors;
        private $dir;

        public function __construct(){
            $this->model = new solicitudesModel();
            $this->fileErrors = "errors.log";
            $this->dir = "uploads";
            $this->location = "Location:../../../index.php#views/solicitudes/listaSolicitudes";
        }

        public function saveFile($id, $typeMessage){
            if($id != false){
                
                $messageError = ($typeMessage == 'SAVE') ? "Registro Guardado con Éxito" : "Registro Actualizado con éxito";
                file_put_contents($this->fileErrors, 'INFO '.$messageError.PHP_EOL , FILE_APPEND);
                
                if($_FILES['upfile']['error'] == UPLOAD_ERR_OK){
                    // Cambiar el formato permitido a PDF
                    $allowedFormat = array("application/pdf");
                    
                    // Verificar si el archivo subido es un PDF
                    if(in_array($_FILES['upfile']['type'], $allowedFormat)){
                        
                        $info_file = pathinfo($_FILES['upfile']['name']);
                        // Crear la ruta con la extensión PDF
                        $file = $this->dir.'/'.$id.".pdf";
        
                        // Verificar si la carpeta de destino existe, si no, crearla
                        if(!file_exists($this->dir)){
                            mkdir($this->dir, 0777);
                            chmod($this->dir, 0755);
                        }
        
                        // Mover el archivo subido a la carpeta de destino
                        if(!move_uploaded_file($_FILES['upfile']['tmp_name'], $file)){
                            unlink($this->fileErrors);
                            $messageError = ($typeMessage == 'SAVE') ? "Error al Guardar el Archivo" : "Error al Actualizar el Archivo";
                            file_put_contents($this->fileErrors, 'ERROR '.$messageError.PHP_EOL , FILE_APPEND);
                        }
        
                    }else{
                        unlink($this->fileErrors);
                        $messageError = "Formato de Archivo no Permitido (Solo PDF)";
                        file_put_contents($this->fileErrors, 'ERROR '.$messageError.PHP_EOL , FILE_APPEND);
                    }
                }
            }else{
                $messageError = ($typeMessage == 'SAVE') ? "Error al Guardar el Registro" : "Error al Actualizar el Registro";                        
                file_put_contents($this->fileErrors, 'ERROR '.$messageError.PHP_EOL , FILE_APPEND);
            }
        }
        
        public function list(){
            return ($this->model->list()) ? $this->model->list() : false;
        }

        public function save($idUsuario, $idEspacio, $idPartida, $idProceso, $descripcion, $tipo){
            // metodo para obtener el id de la solicitud
            $tipos = [
                '1' => 'SCO',
                '2' => 'SMI',
                '3' => 'SME'
            ];
            
            
            // Asignación con un valor por defecto
            $tipoSolicitud = $tipos[$tipo] ?? 'S';
            
            //traer iniciales
            $ini = $this->model->iniciales($idUsuario);

            $row = $this->model->last($tipo);
            
            // if (!empty($row) && isset($row[0]['total'])) {
            //     $cons = $row[0]['total'];
            //     echo "<br> Este es el último: " . $cons;
            // } else {
            //     $cons='001';
            //     echo("<br> No se encontró ningún registro.".$cons);
            // }
            $cons = str_pad($row[0]['total'] + 1, 3, '0', STR_PAD_LEFT); // Asegura que tenga 3 dígitos, con ceros a la izquierda


            $añoActual = date('y'); // Obtiene los últimos dos dígitos del año actual
            
            $fecha_solicitud = date("y-m-d");

            $idSolicitud = $tipoSolicitud.'-'.$ini[0]['iniciales'].'-'.$cons.'-'.$añoActual;

            $id = $this->model->insert($idSolicitud, $idUsuario, $idPartida, $idProceso, $fecha_solicitud, $tipo, $descripcion, $idEspacio);
            $this->saveFile($id, 'SAVE');
            return ($id!= false) ? header($this->location) : false;
        }        
    }
?>
