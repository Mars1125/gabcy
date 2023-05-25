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