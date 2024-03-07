<?php
    require_once("../modelos/Conexion.php");
    require_once("../modelos/ClientesModel.php");

    $opc = $_GET['opc']; //get viene por url
    switch($opc){

        case 1: //Registrar comentarios de clientes

            $nombre = $_POST['txtNombre'];
            $correo = $_POST['txtCorreo'];
            $telefono = $_POST['txtTelefono'];
            $comentarios = $_POST['txtComentarios'];

            $clientes = new ClientesModel();
            $res = $clientes->INSERT($nombre, $correo, $telefono, $comentarios);
            echo $res;
            //Registrar los valores en la base de datos

            break;

        case 2:

            $idComentario = $_POST['hddIdComentario'];
            $nombre = $_POST['txtNombre'];
            $correo = $_POST['txtCorreo'];
            $telefono = $_POST['txtTelefono'];
            $comentarios = $_POST['txtComentarios'];

            $clientes = new ClientesModel();
            $res = $clientes->UPDATE($idComentario, $nombre, $correo, $telefono, $comentarios);
            echo $res;

            break;

        case 3:
            $idComentario = $_POST['idComentario'];
            $clientes = new ClientesModel();
            $res = $clientes->DELETE($idComentario);
            echo $res;
            break;

        case 4: //consultar los datos de la tabla
            $clientes = new ClientesModel();
            $getComments = $clientes->SELECT();
            //$getComments = $mysqli->query("select * from tblComentarios");
            if($getComments){
                while ($fila = $getComments->fetch_assoc()) {
                    echo "<tr>";

                       echo "<th scope = 'row'>1</th>";
                       echo "<th>".$fila["nombre"].'</td>';
                       echo "<th>".$fila["email"].'</td>';
                       echo "<th>".$fila["telefono"].'</td>';
                       echo "<th>".$fila["comentario"].'</td>';
                       echo "<td>
                       <button type='button' class='btn btn-success' onClick ='actualizar(".$fila['idComentario'].",\"".$fila['nombre']."\",\"".$fila['email']."\",\"".$fila['telefono']."\",\"".$fila['comentario']."\")'>Actualizar</button>
                       <button type='button' class='btn btn-danger' onClick='eliminar(".$fila['idComentario'].")'>Eliminar</button>
                       </td>";

                    echo "</tr>";
                 }
                //print_r($getComments);
            }
            //http:localhost:8080/curso/controlador/clientesController.php?opc=2
            //https/192.168.100.232:8080/curso/

            echo $mysqli->host_info . "\n";


    }
?>