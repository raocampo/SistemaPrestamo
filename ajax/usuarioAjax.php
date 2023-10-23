<?php

    $peticionAjax = true;

    require_once "./config/app.php";

    if(isset($_POST['usuarioIdentReg'])){
        
        /* Instancia al controlador */

        require_once "../controladores/usuarioControlador.php";

        $instUsuario = new usuarioControlador();

        /* Registrar/Agregar un usuario */

        if(isset($_POST['usuarioIdentReg']) && isset($_POST['usuarioNombreReg'])){

            echo $instUsuario -> agregarUsuarioControlador();

        }

    }else{
       session_start(['name' => 'SP']);
       session_unset();
       session_destroy();
       header("location: ".servidor."login/");
       exit(); 
    }