<?php
session_start();
require_once("conexion.php");
$mensaje = $_POST["mensaje"];
$fecha = date("Y-m-d");
$usuario_envia = $_SESSION["id_usuario"];
$id_proyecto = $_SESSION["id_proyecto"];
$id_conversacion = $_SESSION["id_conversacion"];
$consEnviarMensaje = "INSERT INTO mensaje (mensaje,fecha,usuario_envia,id_proyecto,id_conversacion) VALUES ('$mensaje','$fecha','$usuario_envia','$id_proyecto','$id_conversacion')";