<?php
require_once("conexion.php");
$rolUsuario=$_SESSION['rol_usuario'];
$idUsuario=$_SESSION["id_usuario"];

//Si es un usuario normal con rol 0
if($rolUsuario=='0'){
    $consTraerProyectosHistorico="SELECT id_proyecto,nombre_proyecto,fecha_inicio_proyecto,url_proyecto 
    FROM proyecto 
    WHERE id_usuario='$idUsuario'";
    $resTraerProyectosHistorico=mysqli_query($conexion,$consTraerProyectosHistorico);
}else if($rolUsuario=='1'){
    $consTraerProyectosHistorico="SELECT id_proyecto,nombre_proyecto,fecha_inicio_proyecto,url_proyecto 
    FROM proyecto";
    $resTraerProyectosHistorico=mysqli_query($conexion,$consTraerProyectosHistorico);
}


?>