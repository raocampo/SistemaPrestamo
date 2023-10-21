<?php

    class vistasModelo{
        /* Modelo para obtener las vistas */
        protected static function obtenerVistasModelo($vistas){
            $listaBlanca = ["home", "clienteList", "clienteNuevo", "clienteBuscar", "clienteAct", "empresa", "itemList", "itemNuevo", "itemBuscar", "itemAct", "prestamosList", "prestamosNuevo", "prestamosPend", "prestamosRes", "prestamosBuscar", "prestamosAct", "usuariosList", "usuariosNuevo", "usuariosBuscar", "usuariosAct"];
            if(in_array($vistas, $listaBlanca)){

                if(is_file("./vistas/contenidos/".$vistas."Vista.php")){

                    $contenido = "./vistas/contenidos/".$vistas."Vista.php";

                }else{

                    $contenido = "404";

                }

            }elseif($vistas == "login" || $vistas == "index"){
                
                $contenido = "login";

            }else{
                
                $contenido = "404";

            }

            return $contenido;
        }
    }