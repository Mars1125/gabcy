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
    $traerEtapa="SELECT id_etapa,estado FROM etapa_proyecto 
    WHERE id_proyecto='$id_proyecto' ORDER BY id_etapa DESC LIMIT 1";
    $resTraerEtapa=mysqli_query($conexion,$traerEtapa);
    $rowTraerEtapa=mysqli_fetch_array($resTraerEtapa);
    $idEtapa=$rowTraerEtapa['id_etapa'];
    $estadoEtapa=$rowTraerEtapa['estado'];
    $traerNombreEtapa="SELECT nombre_etapa FROM etapa WHERE id_etapa='$idEtapa'";
    $resTraerNombreEtapa=mysqli_query($conexion,$traerNombreEtapa);
    $rowTraerNombreEtapa=mysqli_fetch_array($resTraerNombreEtapa);
    $nombreEtapa=$rowTraerNombreEtapa['nombre_etapa'];
}else if($rolUsuario=='1'){
    $consTraerProyectos="SELECT id_proyecto,nombre_proyecto,fecha_inicio_proyecto,url_proyecto 
    FROM proyecto";
    $resTraerProyectos=mysqli_query($conexion,$consTraerProyectos);
}


?>