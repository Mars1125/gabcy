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
  <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <?php
  session_start();
  /*
  session_start();
  session_unset();
  session_destroy();
  */
  ?>
</head>

<body id="section_1">
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

            <a href="nancy_fonseca1@hotmail.com">nancy_fonseca1@hotmail.com</a>
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
      <a class="navbar-brand" href="index.html">
        <img src="images/causes/brand.jpeg" class=" img-fluid" alt="Kind Heart Charity" width="250px" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link click-scroll" href="#top">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_2">Acerca De</a>
          </li>
          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_3">Soluciones</a>
          </li>

          <?php
          if (empty($_SESSION['correo_usuario'])) {
            ?>
            <li class="nav-item ms-3">
              <a class="nav-link custom-btn custom-border-btn btn" href="registro.php">Registrarse</a>
            </li>
            <?php
          } else {
            ?>
            <li class="nav-item">
              <a class="nav-link click-scroll" href="procesoProyecto.php">Ver mi proyecto</a>
            </li>
            <li class="nav-item ms-3">
              <a class="nav-link custom-btn custom-border-btn btn" href="php/cerrarSesion.php">Cerrar Sesión</a>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
    </div>
  </nav>

  <main>
    <section class="hero-section hero-section-full-height">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12 p-0">
            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/causes/cursos.jpg" class="carousel-image img-fluid" alt="..." />

                  <div class="carousel-caption d-flex flex-column justify-content-end">
                    <h1>Soluciones</h1>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="custom-text-box">
              <h2 class="mb-2">¿Quienes Somos?</h2>
              <p class="mb-0">
                Somos una consultoría con bases
                organizacionales y con un equipo de trabajo
                capacitado que ofrece servicios de tecnología
                de información a los pequeños, medianos y
                grandes negocios con el objetivo de brindar
                soluciones de calidad adaptadas a las
                necesidades de cada uno
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="custom-text-box">
              <h5 class="mb-3">Objetivo</h5>
              <p class="mb-0">
                Satisfacer las necesidades de nuestros clientes
                ofreciendo servicios de alta calidad que se
                ajusten a las diferentes organizaciones
                identificándonos con cada uno a través de un
                análisis previo y dando solución por medio de
                herramientas de tecnología de información
                adaptables a sus requerimientos.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-text-box mb-lg-0">
              <h5 class="mb-3">Visión</h5>
              <p>
                Estar siempre a la vanguardia de las tecnologías
                de información, capacitándonos e innovando
                en las diferentes estrategias informáticas para
                dar solución eficaz y eficiente a nuestros
                clientes
              </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-text-box mb-lg-0">
              <h5 class="mb-3">Misión</h5>
              <p>
                Satisfacer las necesidades de tecnologías de
                información a las que están expuestos los
                pequeños, medianos y grandes negocios
                ofreciendo servicios de calidad que partan de
                un análisis previo que nos permita dar una
                solución adaptable a los requerimientos de
                cada uno
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    </section>

    <section class="about-section section-padding" id="section_2">
      <div class="container">
        <div class="row">
          <h2 class="text-center">Sobre Nosotros</h2>
          <div class="row d-flex">
            <div class="col-lg-6 col-md-5 col-12">
              <img src="images/about1.jpeg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="" />
            </div>
            <div class="col-lg-5 col-md-7 col-12">
              <div class="custom-text-block">
                <h2 class="mb-0">Nancy Rosas Fonseca</h2>
                <p class="text-muted mb-lg-4 mb-md-4">Fundadora</p>
                <p>

                </p>
                <p>

                </p>

                <ul class="social-icon mt-4">
                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-twitter"></a>
                  </li>
                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-facebook"></a>
                  </li>
                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-instagram"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row d-flex mt-4">
            <div class="col-lg-6 col-md-5 col-12">
              <img src="images/" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="" />
            </div>

            <div class="col-lg-5 col-md-7 col-12">
              <div class="custom-text-block">
                <h2 class="mb-0">Gabriela Esquivel Gomez</h2>
                <p class="text-muted mb-lg-4 mb-md-4">Fundadora</p>
                <p>

                </p>

                <p>

                </p>

                <ul class="social-icon mt-4">
                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-twitter"></a>
                  </li>
                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-facebook"></a>
                  </li>
                  <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-instagram"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-12 ms-auto">
            <h2 class="mb-0">
              Innovación a tu alcance<br />
            </h2>
          </div>
          <div class="col-lg-5 col-12">
            <h5 class="me-4">Las tecnologias de la informacion son parte de tu vida</h5>
          </div>
        </div>
      </div>
    </section>

    <!--section soluciones
-->
    <section class="section-padding" id="section_3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 text-center mb-4">
            <h2 class="text-center">Soluciones</h2>
          </div>

          <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="custom-block-wrap">
              <img src="images/causes/software.jpg" class="custom-block-image img-fluid" alt="" />
              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Software</h5>
                  <ul class="p-0">
                    <li>Programación web</li>
                    <li>Sitios Web</li>
                    <li>Aplicaciones Móviles</li>
                    <li>Tiendas Online</li>
                    <li>Intranets</li>
                    <li>Plataformas Educativas</li>
                    <li>RM y ERPs</li>
                    <li>Aplicaciones Web</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="custom-block-wrap">
              <img src="images/causes/hardware.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Hardware</h5>

                  <ul class="p-0">
                    <li>Consumibles</li>
                    <li>Instalación de cibers</li>
                    <li>Instalación de red</li>
                    <li>Soporte Tecnico</li>
                    <li>Venta de dispositivos</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="custom-block-wrap">
              <img src="images/causes/diseño.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Diseño</h5>

                  <ul class="p-0">
                    <li>Diseño Web</li>
                    <li>Diseño de Marca</li>
                    <li>Material Publicitario</li>
                  </ul>


                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="custom-block-wrap">
              <img src="images/causes/hosting.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Hosting</h5>
                  <ul class="p-0">
                    <li>Básico</li>
                    <li>Premium</li>
                    <li>Correo</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="custom-block-wrap">
              <img src="images/causes/marketing.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Marketing</h5>

                  <ul class="p-0">
                    <li>Publicidad</li>
                    <li>Content marketing</li>
                    <li>E- mail marketing</li>
                  </ul>


                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="custom-block-wrap">
              <img src="images/causes/cursos.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Cursos</h5>
                  <ul class="p-0">
                    <li>Computación básico</li>
                    <li>Computación intermedio</li>
                    <li>Redes básico</li>
                    <li>Seguridad básico</li>
                    <li>Desarrollo web</li>
                  </ul>


                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <div class="custom-block-wrap">
              <img src="images/causes/empresas.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Capacitacion de Empresas</h5>
                  <ul class="p-0">
                    <li>Tecnologías de información</li>
                    <li>Soporte técnico</li>
                    <li>Gestión de Proyectos</li>
                    <li>Programas básicos de diseño</li>
                    <li>Mantenimiento de equipos</li>
                  </ul>


                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="custom-block-wrap">
              <img src="images/causes/impuestos.jpg" class="custom-block-image img-fluid" alt="" />

              <div class="custom-block">
                <div class="custom-block-body">
                  <h5 class="mb-3">Declaraciones Personales</h5>
                  <ul class="p-0">
                    <li>Personas físicas</li>
                    <li>Anual</li>

                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section " id="section_6">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
            <div class="contact-info-wrap">
              <h2>Contactanos</h2>

              <div class="contact-image-wrap d-flex flex-wrap">
                <img src="images/about1.jpeg" class="img-fluid avatar-image" alt="" />

                <div class="d-flex flex-column justify-content-center ms-3">
                  <p class="mb-0">Nancy Rosas Fonseca</p>
                  <p class="mb-0"><strong></strong></p>
                </div>
              </div>

              <div class="contact-info">
                <h5 class="mb-3">Informacion de Contacto</h5>

                <p class="d-flex mb-2">
                  <i class="bi-geo-alt me-2"></i>
                  A Teoloyucan Manzana 001, San Sebastian Xhala, 54840 Cuautitlán Izcalli, Méx.
                </p>

                <p class="d-flex mb-2">
                  <i class="bi-telephone me-2"></i>
                  <a href="tel: 305-240-9671"> 5559976844 </a>
                </p>
                <p class="d-flex mb-2">
                  <i class="bi-telephone me-2"></i>
                  <a href="tel: 305-240-9671"> 5561780026 </a>
                </p>
                <p class="d-flex mb-2">
                  <i class="bi-telephone me-2"></i>
                  <a href="tel: 305-240-9671"> 5513049411 </a>
                </p>

                <p class="d-flex">
                  <i class="bi-envelope me-2"></i>

                  <a href="nancy_fonseca1@hotmail.com">nancy_fonseca1@hotmail.com</a>
                </p>


              </div>
            </div>
          </div>

          <div class="col-lg-5 col-12 mx-auto">
            <form class="custom-form contact-form" action="#" method="post" role="form">
              <h3>Formulario de Contacto</h3>
              <p class="mb-4">
                Tambien puedes enviar un correo electronico a esta direccion:
                <a href="#">nancy_fonseca1@hotmail.com</a>
              </p>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Nombre"
                    required />
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                  <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Apellido"
                    required />
                </div>
              </div>

              <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                placeholder="Correo electronico" required />

              <textarea name="message" rows="5" class="form-control" id="message"
                placeholder="Como puedo ayudarte?"></textarea>

              <button type="submit" class="form-control">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer class="site-footer site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-12">
          <h5 class="site-footer-title">Sobre Nosotros</h5>
          <p class="text-white d-flex">
            <a href="src/Aviso de privacidad.pdf" class="site-footer-link">Aviso de Privacidad
            </a>
          </p>
          <p class="text-white d-flex">
            <a href="src/Términos y condiciones.pdf" class="site-footer-link">Terminos y Condiciones
            </a>
          </p>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <div class="container">
    <div class="row padded_row">
      <!-- right side content -->
      <div class="col-md-7">
        <div class="chat_window">
          <div class="top_menu">
            <div class="title">GABCY</div>
            <button id="toggle_button" class="toggle_button"><i class="fas fa-chevron-up"></i></button>
          </div>
          <!-- dynamically rendered -->
          <ul class="messages"></ul>
          <!-- input -->
          <div class="bottom_wrapper">
            <input id="msg_input" placeholder="Haz una pregunta..." />
            <div id="send_button" class="app_button_1">Enviar</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JAVASCRIPT FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/click-scroll.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/chatbot.js"></script>
</body>

</html>