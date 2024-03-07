<?php
    class ClientesModel{
        function __construct(){}

        function INSERT($nombre, $correo, $telefono, $comentarios){
            $conexion = new Conexion();
            $mysqli = $conexion->crearConexion();
            $sql = "INSERT INTO tblComentarios(nombre,email,telefono,comentario) 
            values ('".$nombre."','".$correo."','".$telefono."','".$comentarios."')";
            if($mysqli->query($sql) == TRUE ){
                return "Registro insertado";

            } else {
                return "Ocurrio un error al insertar";
            }
            $conexion->close();
        }
        function UPDATE($idComentarios, $nombre, $correo, $telefono, $comentarios){
            $conexion = new Conexion();
            $mysqli = $conexion->crearConexion();
            $sql = "UPDATE tblComentarios SET nombre = '".$nombre."', email = '".$correo."', telefono = '".$telefono."', comentario = '".$comentarios."' 
            WHERE idComentario = ".$idComentarios;

            if ( $mysqli->query($sql) == TRUE ){
                return "Se actualizo correctamente el registro";
            } else {
                return "Ocurrio un error al actualizar";
            }
            $mysqli->close();
        }

        function DELETE($idComentario){
            $conexion = new conexion();
            $mysqli = $conexion->crearConexion();
            $sql = "DELETE FROM tblComentarios WHERE idComentario = ".$idComentario;

            if ( $mysqli->query($sql) == TRUE ){
                return "Borrado correctamente";
            } else {
                return "Ocurrio un error al borrar el registro";
            }
            $mysqli->close();
        }

        function SELECT(){
            $conexion = new Conexion();
            $mysqli = $conexion->crearConexion();
            if ( $mysqli != null){
                $getComments = $mysqli->query("select * from tblComentarios");
            }
            return $getComments;

        }
    }
?>
