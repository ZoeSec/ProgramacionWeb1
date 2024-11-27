<?php include('header.php'); ?>

<?php
session_start();
$nombre_usuario= $_SESSION['nombre_usuario'];//413112576


if(!isset($nombre_usuario)){

        header("location: ./index.php");
}else{
    
    echo "<h1> Bienvenido, $nombre_usuario </h1> ";
  

echo "
<div class='row'>
  <div class='col s12 m6 offset-m3'>
    <h4 class='center-align'>Eliminar Usuario</h4>
    <form method='POST' action='logica/deleteUsuario.php'>
      
      <!-- Campo para el nombre de usuario -->
      <div class='input-field'>
        <input id='nombre_usuario' type='text' name='nombre_usuario' required>
        <label for='nombre_usuario'>Nombre de usuario</label>
      </div>

      <!-- Campo para la contraseña -->
      <div class='input-field'>
        <input id='password' type='password' name='password' required>
        <label for='password'>Contraseña</label>
      </div>

      <!-- Botón para eliminar usuario -->
      <div class='row center-align'>
        <button type='submit' class='btn waves-effect waves-light red'>Eliminar <i class='material-icons right'>content_cut</i></button>
      </div>
      
    </form>
    <a href='Principal.php' class='btn-large waves-effect waves-light purple'>Inicio <i class='material-icons right'>arrow_back</i></a>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
</div>";
}
?>
<?php include('footer.php'); ?>

