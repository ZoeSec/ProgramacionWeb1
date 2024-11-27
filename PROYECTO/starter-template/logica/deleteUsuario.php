<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Obtener los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

// Verificar si el usuario existe con el nombre de usuario y contraseña
$consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND password = '$password'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    // Si el usuario existe, eliminamos el registro
    $eliminarConsulta = "DELETE FROM usuarios WHERE nombre_usuario = '$nombre_usuario'";
    if (mysqli_query($conexion, $eliminarConsulta)) {
        echo "<script>alert('Usuario eliminado exitosamente.'); window.location.href='../eliminarUsuario.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar el usuario.'); window.location.href='../eliminarUsuario.php';</script>";
    }
} else {
    echo "<script>alert('Usuario o contraseña incorrectos.'); window.location.href='../eliminarUsuario.php';</script>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
