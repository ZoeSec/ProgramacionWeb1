<?php include('header.php'); ?>

<?php
session_start();
$nombre_usuario = $_SESSION['nombre_usuario']; //413112576

if(!isset($nombre_usuario)){
    header("location: ./index.php");
} else {
    echo "<h1> Bienvenido, $nombre_usuario </h1> ";

    // Obtener mensaje y tipo de la URL
    $mensaje = $_GET['mensaje'] ?? 'Sin mensaje';
    $tipo = $_GET['tipo'] ?? 'info';

    // Asignar clase CSS según el tipo
    $clase = 'blue lighten-4'; // Por defecto
    if ($tipo == 'success') {
        $clase = 'green lighten-4';
    } elseif ($tipo == 'error') {
        $clase = 'red lighten-4';
    } elseif ($tipo == 'warning') {
        $clase = 'yellow lighten-4';
    }

    // Mostrar el mensaje dentro de la caja
    echo "
    <div class='container center-align' style='margin-top: 50px;'>
        <div class='card-panel $clase'>
            <h5>" . htmlspecialchars($mensaje) . "</h5>
        </div>
        <br><br>
        <!-- Opciones -->
        <a href='Registro.php' class='btn-large waves-effect waves-light green'>Nuevo registro <i class='material-icons right'>add</i></a>
        <a href='Principal.php' class='btn-large waves-effect waves-light purple'>Inicio <i class='material-icons right'>arrow_back</i></a>
        <a href='EliminarUsuario.php' class='btn-large waves-effect waves-light orange'>Eliminar usuario <i class='material-icons right'>remove</i></a>
        <a href='logica/salir.php' class='btn-large waves-effect waves-light red'>Cerrar sesión <i class='material-icons right'>logout</i></a>
    </div>";
}
?>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<?php include('footer.php'); ?>
