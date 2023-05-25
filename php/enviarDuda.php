<?php
require_once("conexion.php");
//Variables para las alertas de información
$info=array();
$errores = array();
if(!empty($_SESSION["correo_usuario"])){
    $correoUsuario=$_SESSION['correo_usuario'];
    $idUsuario=$_SESSION["id_usuario"];
    if(isset($_POST["enviarCita"])){
        $idContacto=uniqid();
        $comentarioContacto=mysqli_real_escape_string($conexion,$_POST["message"]);
        $consContacto="INSERT INTO contacto (id_contacto, id_usuario, fecha_contacto, motivo_contacto)
        VALUES
        ('$idContacto','$idUsuario',NOW(),'$comentarioContacto')";
        $resContacto=mysqli_query($conexion,$consContacto);
    
        if($resContacto){
            $info['REGISTRO-CONTACTO-EXITOSO'] ="Se ha enviado su duda, en breve se pondran en contacto contigo.";
        }else{
            $errores['REGISTRO-CONTACTO-ERROR'] ="No se ha podido enviar tu comentario.";
        }
    }
}


?>