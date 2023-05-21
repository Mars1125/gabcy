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

    <?php
    
    require "php/inicioSesion.php";

    ?>
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>

<body>
   <div class="container login">
                <div class="row">
                    <div class="col-lg-4 col-12 mx-auto">
                        <?php
                            if(count($errores) == 1){
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach($errores as $showerror){
                                        echo $showerror;
                                    }
                                    ?>
                                </div>
                                <?php
                            }elseif(count($errores) > 1){
                                ?>
                                <div class="alert alert-danger">
                                    <?php
                                    foreach($errores as $showerror){
                                        ?>
                                        <li><?php echo $showerror; ?></li>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                        <form class="custom-form donate-form" action="#" method="POST" role="form">
                            <h3 class="mb-4">Iniciar Sesión</h3>

                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <h5 class="mb-3">Correo</h5>
                                </div>
                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required="">
                                </div>
                                <div class="col-lg-12 col-12">
                                    <h5 class="my-3">Contraseña</h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="" required="">
                                </div>

                                <div class="col-lg-12 col-12 mt-2">                                   

                                    <button id="inicioSesion" name='inicioSesion' type="submit" class="form-control mt-4">Iniciar Sesión</button>
                                    <button class="form-control my-4">Cancelar</button>
                                </div>
                                <br>
                                <hr>
                                <div class="col-lg-12 col-12">
                                    <h6 class="my-3">¿Aún no tienes cuenta? <a href="registro.php">Registrate aqui</a> </h6>
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