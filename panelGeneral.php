<?php
session_start();
require("php/traerProyecto.php");
require("php/traerProyectoHistorico.php");
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

<body class="body-panel">
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
                        <a class="nav-link click-scroll" href="index.php">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container container-panel mb-5 pb-5">
        <div class="row container justify-content-center mt-4">
            <h6 class="title-panel">Proyectos Actuales</h6>
            <!-- Card de proyectos -->
            <?php
                if(mysqli_num_rows($resTraerProyectosHistorico)>0){                    
                    while($fetchTraerProyectosHistorico=mysqli_fetch_assoc($resTraerProyectosHistorico)){
                        $idProyecto=$fetchTraerProyectosHistorico["id_proyecto"];
                        $nombreProyecto=$fetchTraerProyectosHistorico["nombre_proyecto"];
                        $urlProyecto=$fetchTraerProyectosHistorico["url_proyecto"];
            ?>
            <div class="card text-center mb-3 me-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nombreProyecto; ?></h5>
                    <p><a target="_blank" href="<?php echo $urlProyecto; ?>"><?php echo $urlProyecto; ?></a></p>
                    <a href="procesoProyecto.php?id=<?php echo $idProyecto; ?>" class="btn px-5 border border-dark-subtle rounded-pill ">Chat</a>
                </div>
            </div>
            <?php   
                    }
                }else{
                    ?>
                    <p class="text-center">No hay proyectos para mostrar</p>
                    <?php
                }
            ?>
        </div>
        <div class="row container mt-3">
            <h6>Historial</h6>
            <table class="table shadow p-3 mb-5 bg-body-tertiary rounded mt-3">
                <thead>
                    <tr class="p-3">
                        <th scope="col">Nombre del Proyecto</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">URL</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Card de proyectos -->
                    <?php
                        if(mysqli_num_rows($resTraerProyectos)>0){              
                            while($fetchTraerProyectosHistorico=mysqli_fetch_assoc($resTraerProyectos)){   
                                $idProyecto=$fetchTraerProyectosHistorico["id_proyecto"];
                                $nombreProyecto=$fetchTraerProyectosHistorico["nombre_proyecto"];
                                $fechaProyecto=$fetchTraerProyectosHistorico["fecha_inicio_proyecto"];
                                $urlProyecto=$fetchTraerProyectosHistorico["url_proyecto"];
                    ?>
                    <tr>
                        <th scope="row"><?php echo $nombreProyecto; ?></th>
                        <td><?php echo $fechaProyecto; ?></td>
                        <td><a target="_blank" href="<?php echo $urlProyecto; ?>"><?php echo $urlProyecto; ?></a></td>
                    </tr>
                    <?php   
                            }
                        }else{
                            ?>
                                <p class="text-center">No hay proyectos para mostrar</p>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
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

</body>

</html>