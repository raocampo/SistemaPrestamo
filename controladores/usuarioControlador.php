<?php

    if($peticionAjax){
        require_once "../modelos/usuarioModelo.php";
    }else{
        require_once "./modelos/usuarioModelo.php";
    }

    class usuarioControlador extends usuarioModelo{
        
        /* Conrolador para agregar usuario */

        public function agregarUsuarioControlador(){
            
            $ident = mainModel::limpiarCadena($_POST['usuarioIdentReg']);
            $nombre = mainModel::limpiarCadena($_POST['usuarioNombreReg']);
            $apellido = mainModel::limpiarCadena($_POST['usuarioApellidoReg']);
            $telefono = mainModel::limpiarCadena($_POST['usuarioTelefonoReg']);
            $direccion = mainModel::limpiarCadena($_POST['usuarioDireccionReg']);
            $usuario = mainModel::limpiarCadena($_POST['usuarioUsuarioReg']);
            $correo = mainModel::limpiarCadena($_POST['usuarioCorreoReg']);
            $clave1 = mainModel::limpiarCadena($_POST['usuarioClave1Reg']);
            $clave2 = mainModel::limpiarCadena($_POST['usuarioClave2Reg']);
            $privilegio = mainModel::limpiarCadena($_POST['usuarioPrivilegioReg']);

            /* Comprobar los campos vacios */

            if($ident == "" || $nombre == "" || $apellido == "" || $usuario == "" || $clave1 == "" || $clave2 == ""){

                $avisoAlert = [
                    "Aviso" => "simple",
                    "Titulo" => "Ocurrio un error inesperado",
                    "Texto" => "No has llenado todos los campos requeridos",
                    "Tipo" => "error"
                ];
                echo json_encode($avisoAlert);

                exit();
            }

            /* Verificar la integridad de los datos */

            if(mainModel::verificaDato("[0-9]{10,20}",$ident)){
                $avisoAlert = [
                    "Aviso" => "simple",
                    "Titulo" => "Ocurrio un error inesperado",
                    "Texto" => "La Cedula o RUC no coincide con el formato",
                    "Tipo" => "error"
                ];
                echo json_encode($avisoAlert);

                exit();
            }

        }

    }