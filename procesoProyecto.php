<?php
session_start();
require "php/traerProyecto.php";
while ($row = mysqli_fetch_array($resTraerProyectos)) {
    $id_proyecto = $row['id_proyecto'];
    $_SESSION["id_proyecto"] = $id_proyecto;
    $nombre_proyecto = $row['nombre_proyecto'];
    $fecha_inicio_proyecto = $row['fecha_inicio_proyecto'];
    $url_proyecto = $row['url_proyecto'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GABCY</title>
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/procesoProyecto.css">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Cuautitlan
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">nancy_fonseca1@hotmail.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/causes/brand.jpeg" class=" img-fluid" alt="Kind Heart Charity" width="250px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="panelGeneral.php">Panel General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container container-general pb-5 pt-5">
        <div class="row container-title py-1 rounded-3 border border-dark-subtle ">
            <div class="col-lg-3 col-md-3 d-sm-block col-sm-12 mt-2">
                <p>Proyecto</p>
            </div>
            <div class="col-lg-9 col-md-9 d-sm-block col-sm-12 mt-2">
                <p class="px-5">Chat</p>
            </div>
        </div>
        <div class="row border border-top-0 border-dark-subtle" max-height="750px">
            <div class="col-lg-3 col-md-3 d-sm-block col-sm-12">
                <h6 class="mt-3">
                    <?php if (empty($nombre_proyecto)) {
                        echo "Aún no tienes proyectos activos.";
                    } else {

                        echo $nombre_proyecto;
                    } ?>
                </h6>
            </div>
            <div class="col-lg-9 col-md-9 d-sm-block col-sm-12"  max-height="750px">
                <?php
                require "php/conexion.php";
                $sql1 = "SELECT * FROM conversacion WHERE id_proyecto = '$id_proyecto'";
                $result1 = mysqli_query($conexion, $sql1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                        $id_conversacion = $row1['id_conversacion'];
                        $sql = "SELECT * FROM mensaje WHERE id_conversacion = '$id_conversacion'";
                        $result = mysqli_query($conexion, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            $_SESSION['id_conversacion'] = $row['id_conversacion'];
                            $id_mensaje = $row['id_mensaje'];
                            $id_usuario_envia = $row['id_usuario_envia'];
                            $mensaje = $row['texto_mensaje'];
                            $fecha = $row['fecha_mensaje'];
                            $sql2 = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario_envia'";

                            $result2 = mysqli_query($conexion, $sql2);
                            while ($row2 = mysqli_fetch_array($result2)) {
                                $nombre_usuario = $row2['nombres_usuario'];
                                $apellido_usuario = $row2['apellidos_usuario'];
                                $empresa_usuario = $row2['empresa_usuario'];
                                $rol_usuario = $row2['rol_usuario'];
                                $nombre_completo = $nombre_usuario . " " . $apellido_usuario . " - " . $empresa_usuario;
                                ?>
                                <p class="text-center message-date mt-4 fw-semibold">
                                    <?php echo $fecha; ?>
                                </p>
                                <p class="fw-semibold message-date">
                                    <?php echo $nombre_completo ?>
                                </p>
                                <p class="px-5 py-2 mt-3 message-client rounded-5 rounded-end-circle 
                            <?php if ($rol_usuario == 1)
                                echo "bg-primary text-white"; ?>
                            ">
                                    <?php echo $mensaje; ?>
                                </p>
                                <?php
                            }
                        }
                    }
                ?>
                <div>
                    <form action="php/enviarMensaje.php" method="POST">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 d-sm-block col-sm-12">
                                <input type="text" name="mensaje" class="form-control" placeholder="Escribe tu mensaje">
                            </div>
                            <div class="col-lg-3 col-md-3 d-sm-block col-sm-12">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <footer class="site-footer mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contacto</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 305-240-9671" class="site-footer-link">
                            5559976844
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            vegainfo.11.03@gmail.com
                        </a>
                    </p>



                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">
                            Copyright GABCY© 2023


                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script>
        const stepButtons = document.querySelectorAll('.step-button');
        const progress = document.querySelector('#progress');

        Array.from(stepButtons).forEach((button, index) => {
            button.addEventListener('click', () => {
                progress.setAttribute('value', index * 100 / (stepButtons.length - 1));//there are 3 buttons. 2 spaces.

                stepButtons.forEach((item, secindex) => {
                    if (index > secindex) {
                        item.classList.add('done');
                    }
                    if (index < secindex) {
                        item.classList.remove('done');
                    }
                })
            })
        })
    </script>
</body>

</html>