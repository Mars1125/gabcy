<?php
session_start();

require_once("conexion.php");
$mensaje = $_POST["mensaje"];
$id_mensaje = uniqid();
$usuario_envia = $_SESSION["id_usuario"];
$id_proyecto = $_SESSION["id_proyecto"];
$id_conversacion = $_SESSION["id_conversacion"];
$consEnviarMensaje = "INSERT INTO mensaje (id_mensaje,texto_mensaje,fecha_mensaje,id_usuario_envia,id_conversacion) VALUES ('$id_mensaje', '$mensaje',NOW(),'$usuario_envia','$id_conversacion')";
$resultadoEnviarMensaje = mysqli_query($conexion, $consEnviarMensaje);
if ($resultadoEnviarMensaje) {
    header("Location: ../procesoProyecto.php");
} else {
    echo "Error al enviar mensaje";
}