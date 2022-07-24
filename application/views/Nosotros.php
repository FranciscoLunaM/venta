<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/nosotros.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>UNIFORMES</title>
</head>

<body>
    <div>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Ejecutivos</a></li>
            <li><a href="Catalogo/CatgEjecutivo.html">Industriales</a></li>
            <!--li class="divider"></li-->
            <li><a href="#!">Calzado</a></li>
            <li><a href="#!">Telas</a></li>
            <li><a href="#!">Principales clientes</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper black">
                <a href="#" class="brand-logo">
                    <img id="logo" src="<?= base_url() ?>Plantilla/img/Logo_2.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="marcas.html">Marcas</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Uniformes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="login.html">Acceder</a></li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="carrusel">

    <div class="carousel carousel-slider">

        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.jpeg"></a>
        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.jpeg"></a>
        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.jpeg"></a>

    </div>

    </div>
    <div class="bodyContent">


        <ul id="tabs-swipe-demo" class="tabs">

            <li class="tab col s3"><a class="active" href="#test-swipe-1">Quienes Somos</a></li>
            <li class="tab col s3"><a href="#test-swipe-2">Objetivo Comercial</a></li>
            <li class="tab col s3"><a href="#test-swipe-3">Misión</a></li>
            <li class="tab col s3"><a href="#test-swipe-4">Visión</a></li>

        </ul>


        <div id="test-swipe-1" class="col s12 ">
            <div class="row">

                <div class="col s6"><br><br>
                
                    <div></div>
                    <div >
                        <p class="QN"> Grupo Empresarial Squat es una empresa mexicana especializada en la comercialización de uniformes y diseño de imagen corporativa. Con casi dos décadas en el mercado, desde 2006 nos hemos encargado de distribuir productos con los estándares
                            de la más alta calidad. </p>
                    </div>
                    <div></div>

                </div>

                <div class="col s6">

                <div></div>
                    <div >
                         <img class="QNI" src="<?= base_url() ?>Plantilla/img/QuienesSomos.jpg">
                    </div>
                    <div></div>

                   
                </div>
            </div>
        </div>

        <div id="test-swipe-2" class="col s12 ">
            <div class="row">

                <div class="col s6">
                    <img class="QNI" src="<?= base_url() ?>Plantilla/img/ExtensoCatalogo.jpg">
                </div>
                <div class="col s6">
                    <p class="OC"> Compra-venta; distribución, importación y exportación de todo tipo de ropa relacionado a boutique y uniformes ejecutivos e industriales así como sus accesorios.</p>
                </div>

            </div>
        </div>

        <div id="test-swipe-3" class="col s12 ">
            <div class="row">

                <div class="col s6">
                    <p class="Mision">Ser empresa líder reconocida por su innovación, calidad y servicio a nivel nacional, promoviéndose siempre como una oportunidad para asociarse con cualquier industria</p>
                </div>
                <div class="col s6">
                    <img class="QNI" src="<?= base_url() ?>Plantilla/img/Misión.jpg">
                </div>
            </div>
        </div>

        <div id="test-swipe-4" class="col s12 ">
            <div class="row">

                <div class="col s6">
                    <img class="QNI" src="<?= base_url() ?>Plantilla/img/Visión.jpg">
                </div>
                <div class="col s6">
                    <p class="Vision">Comercializar prendas que ofrezcan a nuestros clientes una experiencia única de comodidad, confianza y satisfacción; con las mejores materias textiles y con la tecnología adecuada.</p>
                </div>

            </div>

        </div>

    </div>


    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Renée Collection</h5>
                    © 2022 Copyright Text

                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Aviso de Privacidad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">

            </div>
        </div>
    </footer>

</body>

<script type="text/javascript">
    //$(document).ready(dropdown());

    $(".dropdown-button").dropdown({
        hover: false
    });


    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
</script>

</html>