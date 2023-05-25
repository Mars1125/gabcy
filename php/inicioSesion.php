<?php
require_once('conexion.php');
//Comenzar la sesion
session_start();
//Variables para las alertas de información
$info=array();
$errores = array();

if(isset($_POST["inicioSesion"])){
    
    $correo_usuario=$_POST['email'];
    $contrasena_usuario=$_POST['password'];

    $consInicioSesion="SELECT id_usuario,correo_usuario,contrasena_usuario,rol_usuario FROM usuario 
    WHERE correo_usuario='$correo_usuario' AND contrasena_usuario='$contrasena_usuario'";
    $resInicioSesion=mysqli_query($conexion,$consInicioSesion);
    if (mysqli_num_rows($resInicioSesion)>0) {
        $fetchInicioSesion=mysqli_fetch_assoc($resInicioSesion);
        $fetchIdUsuario=$fetchInicioSesion['id_usuario'];
        $fetchCorreoUsuario=$fetchInicioSesion['correo_usuario'];
        $fetchRolUsuario=$fetchInicioSesion['rol_usuario'];
        //Guarda los datos importantes en la sesión actual.
        $_SESSION['id_usuario'] = $fetchIdUsuario;
        $_SESSION['correo_usuario'] = $fetchCorreoUsuario;
        $_SESSION['rol_usuario'] = $fetchRolUsuario;
        header('location: index.php');
    }else{
        $errores['USUARIO-NO-ENCONTRADO'] ="El correo o la contraseña son incorrectas, ¿Estás seguro de tener una cuenta?";
    } 
  }

?>