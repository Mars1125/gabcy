<?php
require "conexion.php";
  $nombres = $_POST['nombres'];
  $correo = $_POST['email'];
  $telefono = $_POST['telefono'];
  $apellidos = $_POST['apellidos'];
  $empresa = $_POST['empresa'];
  $cargo = $_POST['cargo'];
  $contrasena1 = $_POST['contrasena1'];
  $contrasena2 = $_POST['contrasena2'];
  
  function generarID($nombres, $apellidos, $empresa) {

    $nombre = trim(strtolower($nombres));
    $apellidos = trim(strtolower($apellidos));
    $empresa = trim(strtolower($empresa));
    
    $iniciales = substr($nombre, 0, 1) . substr($apellidos, 0, 1) . substr($apellidos, strpos($apellidos, " ") + 1, 1);
    
    $id_usuario = $iniciales . $empresa;
    return $id_usuario;
}
$id_usuario= generarID($nombres, $apellidos, $empresa);
  
  $sql = "INSERT INTO usuario (id_usuario, nombres_usuario, apellidos_usuario, correo_usuario, contrasena_usuario, telefono_usuario) 
  VALUES ('$id_usuario','$nombres', '$apellidos', '$correo', '$contrasena1', '$telefono')";
  $resultado=mysqli_query($conexion,$sql);
  $sql = "INSERT INTO cliente (id_usuario, empresa_cliente, cargo_cliente) 
  VALUES ('$id_usuario','$empresa','$cargo')" ;
  $resultado1=mysqli_query($conexion,$sql);
?>
<html>
<div class="container">
        <div class="row">
            <div class="row" style="text-align:center">
                <?php if($resultado1) { ?>
                    <h3>Registro guardado</h3>
                    <?php } else { ?>
                    <h3>Error al guardar</h3>
                <?php } ?>
                
                <a href="../iniciarSesion.php" class="btn btn-primary">Regresar</a>
                
            </div>
        </div>
    </div>
</html>
