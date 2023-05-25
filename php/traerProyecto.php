<?php
require_once("conexion.php");
$rolUsuario=$_SESSION['rol_usuario'];
$idUsuario=$_SESSION["id_usuario"];

//Si es un usuario normal con rol 0
if($rolUsuario=='0'){
    $consTraerProyectos="SELECT id_proyecto,nombre_proyecto,fecha_inicio_proyecto,url_proyecto 
    FROM proyecto 
    WHERE id_usuario='$idUsuario'";
    $resTraerProyectos=mysqli_query($conexion,$consTraerProyectos);
}else if($rolUsuario=='1'){
    $consTraerProyectos="SELECT id_proyecto,nombre_proyecto,fecha_inicio_proyecto,url_proyecto 
    FROM proyecto";
    $resTraerProyectos=mysqli_query($conexion,$consTraerProyectos);
}


?>