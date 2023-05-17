<?php
$host = 'localhost'; 
$usuario = 'root';
$contrasena = ''; 
$base_datos = 'gabcy'; 

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_errno) {
    die('Error al conectar a la base de datos: ' . $conexion->connect_error);
}
?>
