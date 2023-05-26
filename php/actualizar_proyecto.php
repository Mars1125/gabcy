<?php
session_start();
require "conexion.php";
$id_proyecto = $_POST['id_proyecto'];
$nombre_proyecto = $_POST['nombre_proyecto1'];
$cliente = $_POST['id_cliente1'];
$id_etapa = $_POST['id_etapa1'];
$url=$_POST['url1'];
$actualizar="UPDATE proyecto SET nombre_proyecto='$nombre_proyecto',id_usuario='$cliente',url_proyecto='$url' where id_proyecto='$id_proyecto'";
$resultado = mysqli_query($conexion, $actualizar);
$actualizatablas="UPDATE etapa_proyecto SET fecha_fin=NOW(),estado='finalizado' where id_proyecto='$id_proyecto' and estado='En proceso'";
$resultado2 = mysqli_query($conexion, $actualizatablas);
$registrar="INSERT INTO etapa_proyecto (id_etapa,id_proyecto,fecha_inicio,estado) values ('$id_etapa','$id_proyecto',NOW(),'En proceso')";
$resultado3 = mysqli_query($conexion, $registrar);
if ($resultado && $resultado2 && $resultado3) {
    header("Location: ../administrador.php");
} else {
    echo "Error al registrar";
}

?>