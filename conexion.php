<?php

$server = "localhost";
$user = "root";
$pass = "mauro123";
$db = "inventario basico";


$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("conexion fallida" . $conexion->connect_errno);

} else {
    echo"conectado";
}
    


?>