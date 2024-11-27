<?php
require 'conexion.php';
session_start();

$_SESSION['nombre_usuario'] = $nombre_usuario;

$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from usuarios where nombre_usuario= '$nombre_usuario' and password = '$password'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['nombre_usuario'] = $nombre_usuario;

    header("location: ../Principal.php");
    //header("location: ../inicio.php");
    
} else {

    header("location: ../LoginError.php");
}
?>