<html>

<header>
    <link rel="stylesheet" type="text/css" href="css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" href="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>UNIFORMES</title>
</header>

<body>
    <div>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Ejecutivos</a></li>
            <li><a href="#!">Industriales</a></li>
            <!--li class="divider"></li-->
            <li><a href="#!">Calzado</a></li>
            <li><a href="#!">Telas</a></li>
            <li><a href="#!">Principales clientes</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper black">
                <a href="index.html" class="brand-logo">Logo
                    <!--img id="logo" src="img/Logo.jpg"-->
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

    <body class="BodyContac">


        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="img/carousel.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="img/carousel2.Jpg"></a>
            <a class="carousel-item" href="#three!"><img src="img/carousel3.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="img/carousel4.jpg"></a>
            <a class="carousel-item" href="#five!"><img src="img/carousel5.jpg"></a>
        </div>

        <div class="Mar">
            <h1>
                Contáctanos
            </h1>
        </div>

        <div class="section container">
            <div class="row">
                <form class="col s12">
                    <div class="row card panel">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nombre" type="text" class="validate" required>
                            <label for="Nombre">Nombre(s)</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <input id="apellido" type="text" class="validate" required>
                            <label for="Apellido">Empresa</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="tel" type="number" class="validate" required>
                            <label for="Telefono">Teléfono</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail</i>
                            <input id="mail" type="tel" class="validate" required>
                            <label for="Mail">Correo Eléctronico</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Escribe un comentario</label>
                        </div>


                        <button class="btn" id="BtnSend" type="submit">Enviar</button><br><br>


                    </div>
                </form>
            </div>
        </div>


    </body>
    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="AvisoPriv.html">Aviso de Privacidad</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="#!">Terminos y condiciones</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Copyright by Squad
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

</body>

<script type="text/javascript">
    $(document).ready(function() {

        $(".dropdown-button ").dropdown({
            hover: true
        });


        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 200
        });

    });
</script>

</html>