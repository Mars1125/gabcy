<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/LogIn-Registro.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>
<?php
require "./php/conexion.php";
?>

<body>
   <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="./php/registro.php" method="POST" role="form">
                            <h3 class="mb-4">Registrarse</h3>
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <h5 class="mb-3">Tus datos</h5>
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="John" required="">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" name="apellidos" id="apellidos"  class="form-control" placeholder="Doe" required="">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="my-3">Contacto</h5>
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="email">Correo</label>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required="">
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="+52 5555 5555" required="">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="my-3">Empresa</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="empresa">Empresa</label>
                                    <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Mi empresa" required="">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="cargo">Cargo</label>
                                    <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Director" required="">
                                </div>
                                <div class="col-lg-12 col-12">
                                    <h5 class="my-3">Contraseña</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="contrasena1">Crea contraseña</label>
                                    <input type="password" name="contrasena1" id="contrasena1" class="form-control" placeholder="" required="">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <label for="contrasena2">Repite contrasena</label>
                                    <input type="password" name="contrasena2" id="contrasena2" class="form-control" placeholder="" required="">
                                </div>


                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">Aceptar terminos y condiciones</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <a href="./src/Aviso_de_Privacidad_GABCY.pdf" target="_blank">Terminos y condiciones</a>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault9">
                                        <label class="form-check-label" for="flexRadioDefault9">
                                            <i class="bi bi-file-earmark-medical-fill custom-icon ms-1"></i>
                                            He leido y acepto los terminos y condiciones.
                                        </label>
                                    </div>

                                    <button type="submit" class="form-control my-4">Registrarse</button>
                                    <a href="index.php"><button class="form-control my-4">Cancelar</button></a>
                                </div>
                                <br>
                                <hr>
                                <div class="col-lg-12 col-12">
                                    <h6 class="my-3">Si ya tienes cuenta, <a href="iniciarSesion.php">inicia sesion aqui</a></h6>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                </div>
    </div>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>