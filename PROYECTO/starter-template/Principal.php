<?php include('header.php'); ?>


<?php
session_start();
$nombre_usuario= $_SESSION['nombre_usuario'];//413112576


if(!isset($nombre_usuario)){

        header("location: ./index.php");
}else{
    
    echo "<h1> Bienvenido, $nombre_usuario </h1> ";


    

    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM usuarios";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 



echo "<table border='2' >
    <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Clan</th>
        <th>Dinero</th>
        <th>Kills</th>
        <th>Horas Jugadas</th>
        <th>Fecha de Ingreso</th>
        <th>Trabajo</th>
        <th>Rango</th>
    </tr>";


if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['password'] ."</td>";
     echo"<td>". $row['clan'] ."</td>";
     echo"<td>". $row['dinero'] ."</td>";
     echo"<td>". $row['kills'] ."</td>";
     echo"<td>". $row['horas_jugadas'] ."</td>";
     echo"<td>". $row['fecha_ingreso'] ."</td>";
     echo"<td>". $row['trabajo'] ."</td>";
     echo"<td>". $row['rango'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";
    echo "<br><br><br><br>";

}else{
    
    
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  
    

    
    echo "<a href='logica/salir.php' class='btn-large waves-effect waves-light red'>CERRAR SESION <i class='material-icons right'>logout</i></a>";
    
    echo "<a href='Registro.php' class='btn-large waves-effect waves-light green'>Nuevo registro <i class='material-icons right'>add</i></a>";

    echo "<a href='EliminarUsuario.php' class='btn-large waves-effect waves-light orange'>Eliminar usuario <i class='material-icons right'>remove</i></a>";

    echo "<br>";

}


?>

<?php include('footer.php'); ?>