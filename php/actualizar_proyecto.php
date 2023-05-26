<?php
require "conexion.php";

$nombre_proyecto = $_POST['nombre_proyecto'];
$cliente = $_POST['cliente'];
$categoria = $_POST['categoria'];
$id = uniqid();
$id_conversacion = uniqid();
$registrar = "INSERT into proyecto (id_proyecto,nombre_proyecto,fecha_inicio_proyecto,id_usuario,id_categoria)
 values ('$id','$nombre_proyecto',NOW(),'$cliente','$categoria')";
$resultado = mysqli_query($conexion, $registrar);
$conversacion = "INSERT into conversacion (id_conversacion,id_proyecto) values ('$id_conversacion','$id')";
$resultado2 = mysqli_query($conexion, $conversacion);
$mensaje="Bienvenida/o a GABCY, tu proyecto ha sido creado con éxito";
$sql3="INSERT into mensaje (id_conversacion,id_usuario,texto_mensaje,fecha_mensaje) 
values ('$id_conversacion','$cliente','$mensaje',NOW())";
$resultado3 = mysqli_query($conexion, $sql3);
if ($resultado && $resultado2 && $resultado3) {
    header("Location: ../administrador.php");
} else {
    echo "Error al registrar";
}

?>