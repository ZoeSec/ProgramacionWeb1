<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Capturar el nombre del usuario enviado por POST
$nombreUser = $_POST['nombre_usuario'];

// Buscar si el usuario ya existe
$buscarusuario = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombreUser'";
$resultado = $conexion->query($buscarusuario);

// Contar los resultados
$count = mysqli_num_rows($resultado);

// Inicializar mensaje y tipo
$mensaje = "";
$tipo = ""; // Puede ser "success", "error", "warning"

if ($count == 1) {
    // Usuario ya registrado
    $mensaje = "El usuario ya está registrado.";
    $tipo = "warning";
} else {
    // Consulta SQL para insertar el nuevo registro
    $sql = "INSERT INTO usuarios (
        nombre_usuario, `password`, clan, dinero, kills, horas_jugadas, fecha_ingreso, trabajo, rango
    ) VALUES (
        '$_POST[nombre_usuario]', 
        '$_POST[password]', 
        '$_POST[clan]', 
        '$_POST[dinero]', 
        '$_POST[kills]', 
        '$_POST[horas_jugadas]', 
        '$_POST[fecha_ingreso]', 
        '$_POST[trabajo]', 
        '$_POST[rango]'
    )";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Usuario agregado con éxito.";
        $tipo = "success";
    } else {
        $mensaje = "Error al insertar el usuario: " . mysqli_error($conexion);
        $tipo = "error";
    }
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir a ResultadoRegistro.php con mensaje y tipo
header("Location: ../ResultadoRegistro.php?mensaje=" . urlencode($mensaje) . "&tipo=" . urlencode($tipo));
exit();
?>
