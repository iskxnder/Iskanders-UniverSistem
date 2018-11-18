<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Portal Web Universitario</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('portal/css/font-awesome.min.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('portal/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('portal/css/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        /* Necessary for full page carousel*/

        html,
        body,
        .view {
            height: 100%;
        }

        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

        footer.page-footer {
            background-color: #1C2331;
            margin-top: 0;
        }

        @media only screen and (max-width: 767px) {
            .navbar {
                background-color: #1C2331;
            }
            .display-3 {
                font-size: 2rem;
                margin-top: 6rem;
            }
            h3 {
                font-size: 1rem;
            }
        }

        @media only screen and (max-width: 667px) {
            .display-3 {
                font-size: 3rem;
            }
        }

        /* Carousel*/
        .carousel,
        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        /*Caption*/

        .flex-center {
            color: #fff;
        }

        @media (min-width: 776px) {
            .carousel .view ul li {
                display: inline;
            }
            .carousel .view .full-bg-img ul li .flex-item {
                margin-bottom: 1.5rem;
            }
        }

        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>Navbar</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Caracteristicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informacion</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Trayecto I</a>
                            <a class="dropdown-item" href="#">Trayecto II</a>
                            <a class="dropdown-item" href="#">Trayecto III</a>
                            <a class="dropdown-item" href="#">Trayecto VI</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('{{ asset('portal/images/77.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="display-3 flex-item font-bold">Bienvenido al portal Universitario</h1>
                            <li>
                                <h3 class="flex-item">Portal informativo sobre el registro de estudiantes</h3>
                            </li>
                            <li>
                                
                                <a class="btn btn-primary btn-lg flex-item" href="{{ url('/register') }}">Registar</a>
                                <a class="btn btn-outline-white btn-lg flex-item" href="{{ url('/login') }}">Ingresar</a>
                            </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('{{ asset('portal/images/47.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="display-4 font-bold">Registro de estudiantes</h1>
                        </li>
                        <li>
                            <h3 class="my-4">Guarda todos los datos de un estudiante incluido su carrera</h3>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('{{ asset('portal/images/79.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="display-4 font-bold">Con soporte constante</h1>
                        </li>
                        <li>
                            <h3 class="my-4">el sistema al ser de codigo abierto esta en constante evoluvión</h3>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Third slide -->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    <div class="container">
        <!--Section: Blog v.1-->
        <section class="section pb-3 text-center text-lg-left">

            <!--Section heading-->
            <h1 class="section-heading h1 dark-grey-text text-center mt-5 pt-lg-3">Actualizaciones</h1>
            <hr>
            <!--Section description-->
            <p class="section-description mb-5 mt-lg-5 mx-lg-5 text-center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <!--Grid row-->
            <div class="row pt-lg-5">

                <!--Grid column-->
                <div class="col-lg-5 col-xl-5 mb-5">
                    <!--Featured image-->
                    <div class="">
                        <a>
                            <img src="{{ asset('portal/images/43.jpg') }}" alt="Second image in the first version of blog listing"
                                class="img-fluid  z-depth-1-half rounded">
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 col-xl-7">
                    <!--Excerpt-->
                    <a href="" class="cyan-text">
                        <h6 class="font-bold pb-1">
                            <i class="fa fa-cutlery"></i> Experiencia</h6>
                    </a>
                    <h4 class="mb-4 font-bold dark-grey-text">
                        <strong>Novedades.</strong>
                    </h4>
                    <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                        aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                    <p>por
                        <a>
                            <strong>Iskander Urdaneta</strong>
                        </a>, 19/08/2018</p>
                    <a class="btn btn-info btn-md mb-3">Seguir Leyendo</a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class="hr-width mb-5 mt-5 pb-3">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-7 col-xl-7 pb-3">
                    <!--Excerpt-->
                    <a href="" class="cyan-text">
                        <h6 class="font-bold pb-1">
                            <i class="fa fa-image"></i>Estudios</h6>
                    </a>
                    <h4 class="mb-4 font-bold dark-grey-text">
                        <strong>Novedades.</strong>
                    </h4>
                    <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                        aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                    <p>por
                        <a>
                            <strong>Iskander Urdaneta</strong>
                        </a>, 14/08/2018</p>
                    <a class="btn btn-info btn-md mb-3">Seguir Leyendo</a>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-xl-5 mb-5">
              
                    <!--Featured image-->
                    <div class="">
                        <a>
                            <img src="{{ asset('portal/images/54.jpg') }}" alt="Second image in the first version of blog listing"
                                class="img-fluid  z-depth-1-half rounded">
                        </a>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class="hr-width mb-5 mt-4 pb-3">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 ml-auto col-xl-5 pb-3">

                    <!--Featured image-->
                    <div class="">
                        <a>
                            <img src="{{ asset('portal/images/65.jpg') }}" alt="Second image in the first version of blog listing"
                                class="img-fluid  z-depth-1-half rounded">
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 mr-auto col-xl-7">
                    <!--Excerpt-->
                    <a href="" class="cyan-text">
                        <h6 class="font-bold pb-1">
                            <i class="fa fa-suitcase"></i> Porfesores</h6>
                    </a>
                    <h4 class="mb-4 font-bold dark-grey-text">
                        <strong>Novedades.</strong>
                    </h4>
                    <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                        aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                    <p>por
                        <a>
                            <strong>Iskander Urdaneta</strong>
                        </a>, 11/08/2018</p>
                    <a class="btn btn-info btn-md mb-3">Seguir Leyendo</a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class="hr-width mb-5 mt-5 pb-3">

            <!--Grid row-->
            <div class="row pb-5 mb-5">

                <!--Grid column-->
                <div class="col-lg-7 col-xl-7 pb-3">
                    <!--Excerpt-->
                    <a href="" class="cyan-text">
                        <h6 class="font-bold pb-1">
                            <i class="fa fa-image"></i> Aulas</h6>
                    </a>
                    <h4 class="mb-4 font-bold dark-grey-text">
                        <strong>Novedades.</strong>
                    </h4>
                    <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis
                        aut rerum. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                    <p>por
                        <a>
                            <strong>Iskander Urdaneta</strong>
                        </a>, 14/08/2018</p>
                    <a class="btn btn-info btn-md mb-3">Seguir Leyendo</a>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-5 col-xl-5 mb-5">
                    <!--Featured image-->
                    <div class="">
                        <a>
                            <img src="{{ asset('portal/images/55.jpg') }}" alt="Second image in the first version of blog listing"
                                class="img-fluid  z-depth-1-half rounded">
                        </a>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Blog v.1-->

    </div>

    <!--/.Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only unique-color-dark">


        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                    <h6 class="title font-bold">
                        <strong>Software Universitario de Registro (SUR)</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 class="title font-bold">
                        <strong>Componentes</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Estudiantes</a>
                    </p>
                    <p>
                        <a href="#!">Profesores</a>
                    </p>
                    <p>
                        <a href="#!">Carreras</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 class="title font-bold">
                        <strong>Usuario</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Cuenta</a>
                    </p>
                    <p>
                        <a href="#!">Como registrarte</a>
                    </p>
                    <p>
                        <a href="#!">Ayuda</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="title font-bold">
                        <strong>Contacto</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> Aragua, AR 2121, VE</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2018 Copyright:
                <a href="#">
                    <strong> MDBootstrap.com </strong>
                </a>
                WebMaster: 
                <a href="#">
                    <strong>Iskander Urdaneta</strong>
                </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('portal/js/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="{{ asset('portal/js/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('portal/js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('portal/js/mdb.min.js') }}"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>