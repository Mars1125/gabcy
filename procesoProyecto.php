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
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="registro.html">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <section class="mt-4">
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <div class="steps">
                        <progress id="progress" value=0 max=100></progress>
                        <div class="step-item">
                            <button class="step-button text-center" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1
                            </button>
                            <div class="step-title">
                                First Step
                            </div>
                        </div>
                        <div class="step-item">
                            <button class="step-button text-center collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2
                            </button>
                            <div class="step-title">
                                Second Step
                            </div>
                        </div>
                        <div class="step-item">
                            <button class="step-button text-center collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3
                            </button>
                            <div class="step-title">
                                Third Step
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row ">
            <div class="col-lg-3 col-md-3 d-sm-block col-sm-12">Proyecto</div>
            <div class="col-lg-9 col-md-9 d-sm-block col-sm-12">Chat</div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-3 d-sm-block col-sm-12">
                
            </div>
            <div class="col-lg-9 col-md-9 d-sm-block col-sm-12">
            </div>
        </div>
    </div>

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