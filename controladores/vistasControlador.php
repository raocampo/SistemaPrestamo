<?php

    require_once "./modelos/vistasModelo.php";

    class vistasControlador extends vistasModelo{
        /* Controlador para obtener la plantilla */

        public function obtenerPlantillaControlador(){

            return require_once "./vistas/plantilla.php";

        }

        /*Controlador para obtener las vistas */

        public function obtenerVistasControlador(){
            
            if(isset($_GET['views'])){

                $direccion = explode("/", $_GET['views']);
                
                $respuesta = vistasModelo::obtenerVistasModelo($direccion[0]);

            }else{
                
                $respuesta = "login";

            }

            return $respuesta;
        }
    }