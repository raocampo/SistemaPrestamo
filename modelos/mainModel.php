<?php

    if($peticionAjax){
        require_once "../config/server.php";
    }else{
        require_once "./config/server.php";
    }

    class mainModel{

        /* Modelo/función para conectar a la BD */

        protected static function conexionBD(){
            
            $conexion = new PDO (nmbd, usuario, clave);
            $conexion -> exec("SET CHARACTER SET utf8");
            return $conexion;
        }

        /* Función para ejecutar consultas simples */

        protected static function consultaSimple($consultar){

            $sentencia = self::conexionBD()->prepare($consultar);
            $sentencia->execute();
            return $sentencia;

        }


        /* Script de "Carlos Alfaro" para encriptar cadenas */

        public function encryption($string){
            
            $output = FAlSE;
            $key = hash('sha256', secret_KEY);
            $iv = substr(hash('sha256', secret_IV), 0, 16);
            $output = openssl_encrypt($string, method, $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
        }

        /* Script de "Carlos Alfaro" para desencriptar cadenas */
        protected static function decryption($string){

            $key = hash('shs256', secret_KEY);
            $iv = substr(hash('sha256', secret_IV), 0, 16);
            $output = openssl_decrypt(base64_decode($string), method, $key, 0, $iv);
            return $output; 
            
        }


        /* Función para generar códigos-prestamos aleatorios */

        protected static function generaCodigo($letra, $longitud, $numero){
            for($i = 1; $i <= $longitud; $i++){
                
                $aleatorio = rand(0,9);
                $letra.=$aleatorio;
                
            }

            return $letra."-".$numero;
        }

        /* Función para limpiar cadenas */

        protected static function limpiarCadena($cadena){
            
            $cadena = trim($cadena);
            $cadena = stripslashes($cadena);
            $cadena = str_ireplace("<script>", "", $cadena);
            $cadena = str_ireplace("</script>", "", $cadena);
            $cadena = str_ireplace("<script src>", "", $cadena);
            $cadena = str_ireplace("<script type=>", "", $cadena);
            $cadena = str_ireplace("SELECT * FROM", "", $cadena);
            $cadena = str_ireplace("DELETE FROM", "", $cadena);
            $cadena = str_ireplace("INSERT TO", "", $cadena);
            $cadena = str_ireplace("DROP TABLE", "", $cadena);
            $cadena = str_ireplace("DROP DATABASE", "", $cadena);
            $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
            $cadena = str_ireplace("SHOW TABLES", "", $cadena);
            $cadena = str_ireplace("SHOW DATABASES", "", $cadena);
            $cadena = str_ireplace("<?php", "", $cadena);
            $cadena = str_ireplace("?>", "", $cadena);
            $cadena = str_ireplace("--", "", $cadena);
            $cadena = str_ireplace(">", "", $cadena);
            $cadena = str_ireplace("<", "", $cadena);
            $cadena = str_ireplace("[", "", $cadena);
            $cadena = str_ireplace("]", "", $cadena);
            $cadena = str_ireplace("^", "", $cadena);
            $cadena = str_ireplace("==", "", $cadena);
            $cadena = str_ireplace(";", "", $cadena);
            $cadena = str_ireplace("::", "", $cadena);
            $cadena = stripslashes($cadena);
            $cadena = trim($cadena);

            return $cadena;
        }

        /* Función para verificar los datos */

        protected static function verificaDato($filtro, $cadena){
            if(preg_match("/^".$filtro."$/", $cadena)){
                return false;
            }else{
                return true;
            }
        }

        /* Función para validar/verificar fechas */

        protected static function verificaFecha($fecha){
            $valores = explode('-', $fecha);
            if(count($valores) && checkdate($valores[1],$valores[2],$valores[0])){
                    return false;
            }else{
                return true;
            }
        }

        /* Función para manejar el paginador de las tablas */

        protected static function paginadorTablas($pagina, $numPag, $url, $botones){

            $tabla = '<nav aria-label="PAge navigation example"><ul class="pagination justify-content-center">';

            if($pagina == 1){
                $tabla.= '<li class = "page-item disabled"><a class="page-link"><i class="fa-solid fa-angles-left"></i></a></li>';
            }else{
                $tabla.= '<li class = "page-item"><a class="page-link" href="'.$url.'1/"><i class="fa-solid fa-angles-left"></i></a></li>
                <li class = "page-item"><a class="page-link" href="'.$url.($pagina-1).'/">Anterior</a></li>';
            }

            $contador = 0;
            for($i = $pagina; $i<=$numPag; $i++){
                if($contador >= $botones){
                    break;
                }

                if($pagina == $i){
                    $tabla.='<li class = "page-item"><a class="page-link active" href="'.$url.$i.'/">'.$i.'</a></li>';
                }else{

                }

                $contador++;
            }

            if($pagina == $numPag){
                $tabla.= '<li class = "page-item disabled"><a class="page-link"><i class="fa-solid fa-angles-right"></i></a></li>';
            }else{
                $tabla.= 
                '<li class = "page-item"><a class="page-link" href="'.$url.($pagina+1).'/">Siguiente</a></li>
                <li class = "page-item"><a class="page-link" href="'.$url.$numPag.'/"><i class="fa-solid fa-angles-right"></i></a></li>';
            }

            $tabla.='</ul></nav>';

            return $tabla;

        }
    }

