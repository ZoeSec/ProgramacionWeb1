<?php

// $host_db = "localhost";
// $user_db = "id20310581_aaronico";
// $pass_db = "Hw\&J=21JXiLsZ~<";
// $db_name = "id20310581_test_php";

 $host_db = "localhost:3306";
$user_db = "root";
$pass_db = "";
$db_name = "KURTA";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>cONEXION REALIZADA</h1>";
}

?> 