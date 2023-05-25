<?php
require "conexion.php";

if (!empty($_SESSION['id_usuario'])) {
    $sql = "SELECT * FROM proyecto WHERE id_usuario = ".$_SESSION['id_usuario'].";";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_array($resultado);
        $nombreProyecto = $row['nombre_proyecto'];

    } else {
        echo "No hay proyectos por ver.";
    }
} else {
    echo "No hay proyectos por ver.";
}
?>

