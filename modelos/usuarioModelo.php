<?php

    include_once "mainModel.php";

    class usuarioModelo extends mainModel{
        /* Modelo para agregar usuario */

        protected static function agregarUsuarioModelo($datos){

            $sentencia = mainModel::conexionBD()->prepare("INSERT INTO `usuario` (`usuario_ident`, `usuario_nombre`, `usuario_apellido`, `usuario_telefono`, `usuario_direccion`, `usuario_email`, `usuario_usuario`, `usuario_clave`, `usuario_estado`, `usuario_privilegio`) VALUES(:docident, :nombre, :apellido, :telefono, :direccion, :correo, :usuario, :clave, :estado, :privilegio )");

            $sentencia->bindParam(":docident",$datos['ident']);
            $sentencia->bindParam(":nombre",$datos['nombre']);
            $sentencia->bindParam(":apellido",$datos['apellido']);
            $sentencia->bindParam(":telefono",$datos['telefono']);
            $sentencia->bindParam(":direccion",$datos['direccion']);
            $sentencia->bindParam(":correo",$datos['correo']);
            $sentencia->bindParam(":usuario",$datos['usuario']);
            $sentencia->bindParam(":clave",$datos['clave']);
            $sentencia->bindParam(":estado",$datos['estado']);
            $sentencia->bindParam(":privilegio",$datos['privilegio']);
            $sentencia->execute();

            return $sentencia;
        }
    }