<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html" charset="utf-8">
        <!--CSS-->
        <link href="assest/css/bootstrap.min.css" rel="stylesheet">
        <link href="assest/css/consolidados.css" rel="stylesheet">

        <!--JS-->
        <script src="assest/js/jquery-2.1.3.js"></script>
        <script src="assest/js/bootstrap.min.js"></script>

        <title><?= $titulo ?></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header" style="position: absolute;z-index: 1;">
                <!------------------CABECERA EN MODO PANTALLA GRANDE----------->
                <div class="row" id="header-large">
                    <div class="col-md-4">	<!--LOGO-->
                        <a href="#"><img id="logo" src="assest/img/logo.png"></a>
                    </div>
                    <div class="col-md-8">
                        <ul id="menuRedesSociales">
                            <li><a href="#"><img src="assest/img/icon/mercadolibre.png"></a></li>
                            <li><a href="#"><img src="assest/img/icon/facebook.png"></a></li>
                            <li><a href="#"><img src="assest/img/icon/twitter.png"></a></li>
                            <li><a href="#"><img src="assest/img/icon/instagram.png"></a></li>
                            <li><a href="#"><img src="assest/img/icon/youtube.png"></a></li>
                            <li><a href="#"><img src="assest/img/icon/bbm.png"></a></li>
                        </ul>
                        <ul id="menuLugares">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Mobiliario</a></li>
                            <li><a href="#">Papeler&iacute;a</a></li>
                            <li><a href="#">Prod. Limpieza</a></li>
                            <li><a href="#">Computaci&oacute;n</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>

                <!------------------CABECERA EN MODO PANTALLA MEDIANAS----------->
                <div id="header-medium">
                    <div class="row">
                        <div class="col-sm-4">	<!--LOGO-->
                            <a href="#"><img id="logo" src="assest/img/logo.png"></a>
                        </div>
                        <div class="col-sm-8">
                            <ul id="menuRedesSociales">
                                <li><a href="#"><img src="assest/img/icon/mercadolibre.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/facebook.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/twitter.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/instagram.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/youtube.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/bbm.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <ul id="menuLugares">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Mobiliario</a></li>
                                <li><a href="#">Papeler&iacute;a</a></li>
                                <li><a href="#">Prod. Limpieza</a></li>
                                <li><a href="#">Computaci&oacute;n</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!------------------CABECERA EN MODO PANTALLA PEQUEÑAS----------->
                <div id="header-small">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="#"><img id="logo" src="assest/img/logo.png"></a>
                        </div>
                    </div>
                </div>





            </div>

            <!------------------CARRUSEL DE IMAGENES----------->
            <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
<!--                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assest/img/carrousel/img.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="assest/img/carrousel/img1HD.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="assest/img/carrousel/img3HD.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="assest/img/carrousel/img4HD.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="main">
                <div id="content">
                    <h2><?= $titulo ?></h2>
                    <div class="post">
                        <?= $cuerpo ?>
                    </div>
                </div>
            </div>
            <div id="footer">
                <?= $pie ?>
            </div>
        </div>
    </body>
</html>
