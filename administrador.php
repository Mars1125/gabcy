<?php
session_start();
$rol_usuario = $_SESSION['rol_usuario'];
if ($rol_usuario == 0) {
    header("Location: index.php");
    exit;
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">

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
                <h5 class="title-panel mt-4">Administracion de Proyectos</h5>
                <div class="row shadow p-3 mb-5 bg-body-tertiary rounded mt-4 p-5">
                    <table class="table table-striped table-hover ">

                        <thead>
                            <tr class="table-head ">
                                <th scope="col">Proyecto</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Etapa</th>
                                <th scope="col">Chat</th>
                                <th scope="col">URL</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "php/conexion.php";
                            $proyectos = "SELECT * FROM proyecto";
                            $resultado = mysqli_query($conexion, $proyectos);
                            while ($row = mysqli_fetch_array($resultado)) {
                                $id_proyecto = $row['id_proyecto'];
                                $nombre_proyecto = $row['nombre_proyecto'];
                                $id_cliente = $row['id_usuario'];
                                $url = $row['url_proyecto'];
                                $sql2 = "SELECT * FROM etapa_proyecto WHERE id_proyecto='$id_proyecto' AND estado='En proceso'";
                                $resultado2 = mysqli_query($conexion, $sql2);
                                $row2 = mysqli_fetch_array($resultado2);
                                $id_etapa = $row2['id_etapa'];
                                $sql3 = "SELECT * FROM etapa WHERE id_etapa='$id_etapa'";
                                $resultado3 = mysqli_query($conexion, $sql3);
                                $row3 = mysqli_fetch_array($resultado3);
                                $nombre_etapa = $row3['nombre_etapa'];
                                $datos = $id_proyecto . "||" . $nombre_proyecto . "||" . $id_cliente . "||" . $id_etapa . "||" . $url;

                                ?>
                                <tr>
                                    <td>
                                        <?php echo $nombre_proyecto; ?>
                                    </td>
                                    <td>
                                        <?php echo $id_cliente; ?>
                                    </td>
                                    <td>
                                        <?php echo $nombre_etapa; ?>
                                    </td>
                                    <td> <a href="procesoProyecto.php?id_proyecto=<?php echo $id_proyecto; ?>"
                                            class="btn px-5 custom-btn-message custom-border-btn">Chat</a>
                                    </td>
                                    <td>
                                        <?php echo $url; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn px-5 custom-btn-message custom-border-btn"
                                            data-bs-toggle="modal" onclick="agregaform('<?php echo $datos ?>')"
                                            data-bs-target="#staticBackdrop2">
                                            Actualizar
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="button" class="btn px-5 custom-btn-message custom-border-btn" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Crear
                    </button>
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
        <script type="text/javascript">
            function agregaform(datos) {
                d = datos.split('||');
                $('#id_proyecto1').val(d[0]);
                $('#nombre_proyecto1').val(d[1]);
                $('#id_cliente1').val(d[2]);
                $('#id_etapa1').val(d[3]);
                $('#url1').val(d[4]);
            }

            function actualizadatos() {
                id_proyecto = $('#id_proyecto1').val();
                nombre_proyecto = $('#nombre_proyecto1').val();
                id_cliente = $('#id_cliente1').val();
                id_etapa = $('#id_etapa1').val();
                url = $('#url1').val();

                cadena = "id_proyecto1=" + id_proyecto + "&nombre_proyecto1=" + nombre_proyecto + "&id_cliente1=" + id_cliente + "&id_etapa1=" + id_etapa + "&url1=" + url;

                $.ajax({
                    type: "POST",
                    url: "php/actualizar_proyecto.php",
                    data: cadena,
                    success: function (response) {
                        // Manejar la respuesta del servidor si es necesario
                        console.log(response);
                    }
                });
            }
        </script>


    </body>

    </html>

    <!-- modal actualizar proyecto -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Proyecto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="php/actualizar_proyecto.php" method="POST">
                    <div class="modal-body">
                        <input class="form-control my-2 py-3" type="text" name="id_proyecto1" id="id_proyecto1"
                            placeholder="ID Proyecto" aria-label="default input example" readonly>
                        <input class="form-control my-2 py-3" type="text" name="nombre_proyecto1"
                            placeholder="Nombre del Proyecto" aria-label="default input example" id="nombre_proyecto1">
                        <select class="form-select my-2" aria-label="Default select example" name="id_cliente1"
                            id="id_cliente1">
                            <option selected>Seleccionar Cliente</option>
                            <?php
                            require "php/conexion.php";
                            $sql = "SELECT * FROM usuario WHERE rol_usuario=0";
                            $result = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                $id_usuario = $mostrar['id_usuario'];
                                $nombre_usuario = $mostrar['nombres_usuario'];
                                ?>
                                <option value="<?php echo $id_usuario; ?>"><?php echo $nombre_usuario ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <select class="form-select my-2" aria-label="Default select example" name="id_etapa1"
                            id="id_etapa1">
                            <option selected>Seleccionar Etapa</option>
                            <?php
                            $sql = "SELECT * FROM etapa";
                            $result = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                $id_etapa = $mostrar['id_etapa'];
                                $nombre_etapa = $mostrar['nombre_etapa'];
                                ?>
                                <option value="<?php echo $id_etapa; ?>"><?php echo $nombre_etapa; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <input class="form-control my-2 py-3" type="text" name="url1" placeholder="URL del Proyecto"
                            aria-label="default input example" id="url1">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Crear Nuevo-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear nuevo Proyecto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="php/crear_proyecto.php" method="POST">
                    <div class="modal-body">
                        <input class="form-control my-2 py-3" type="text" name="nombre_proyecto"
                            placeholder="Nombre del Proyecto" aria-label="default input example" id="nombre_proyecto">
                        <select class="form-select my-2" aria-label="Default select example" name="id_cliente"
                            id="id_cliente">
                            <option selected>Seleccionar Cliente</option>
                            <?php
                            require "php/conexion.php";
                            $sql = "SELECT * FROM usuario WHERE rol_usuario=0";
                            $result = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                $id_usuario = $mostrar['id_usuario'];
                                $nombre_usuario = $mostrar['nombres_usuario'];
                                ?>
                                <option value="<?php echo $id_usuario; ?>"><?php echo $nombre_usuario ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <select class="form-select my-2" aria-label="Default select example" name="id_categoria"
                            id="id_categoria">
                            <option selected>Seleccionar Categoria</option>
                            <?php
                            require "php/conexion.php";
                            $sql = "SELECT * FROM categoria";
                            $result = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                $id_categoria = $mostrar['id_categoria'];
                                $nombre_categoria = $mostrar['nombre_categoria'];
                                ?>
                                <option value="<?php echo $id_categoria; ?>"><?php echo $nombre_categoria ?></option>
                                <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>