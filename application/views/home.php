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
        <script type="text/javascript">
            $(document).ready(function () {
                $('.carousel').carousel({
                    pause: "none"
                });
            });
        </script>
        <div id="wrapper">
            <div id="header">
                <!------------------CABECERA EN MODO PANTALLA GRANDE----------->
                <div class="row" id="header-large">
                    <div class="col-md-4">	<!--LOGO-->
                        <a href="#"><img id="logo" src="assest/img/logo.png"></a>
                    </div>
                    <div class="col-md-8" style="padding-right: 0px;">
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
                    <div class="row" style="margin-right: 0px">
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

                    <div class="row" style="margin-right: 0px">
                        <div class="col-sm-12" style="padding-right: 0px;">
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
                    <div class="row" style="margin-right: 0px">
                        <div class="col-sm-12" style="text-align: center">
                            <a href="#"><img id="logo" src="assest/img/logo.png"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------CARRUSEL DE IMAGENES----------->
            <div id="carruselImagen">
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
                            <img src="assest/img/carrousel/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="assest/img/carrousel/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="assest/img/carrousel/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="assest/img/carrousel/img4.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    </div>

                    <!--                     Controls               -->
                    <!--                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>-->
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

                <!----------------FOOTER PANTALLA GRANDES------------------->

                <div id="footerLarge">
                    <div class="row" style="margin-right: 0px;">
                        <div class="col-sm-4" style="padding-right: 0px;">
                            <p id="textFooter" style="line-height: 37px; text-align: center;margin-bottom: 0px;">Copyright &copy; 2014 Inversiones consolidados 2011 C.A</p>
                        </div>

                        <div class="col-sm-5" style="padding-right: 0px;">
                            <ol id="linksFooter" class="breadcrumb">

                                <li><a id="aFooter" href="#">Nosotros</a></li>
                                <li><a id="aFooter" href="#">Mobiliario</a></li>
                                <li><a id="aFooter" href="#">Papeler&iacute;a</a></li>
                                <li><a id="aFooter" href="#">Computaci&oacute;n</a></li>
                                <li><a id="aFooter" href="#">Contacto</a></li>
                            </ol>
                        </div>

                        <div class="col-sm-3" style="padding-right: 0px">
                            <ul id="menuRedesSocialesFooter">
                                <li><a href="#"><img src="assest/img/icon/mercadolibre_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/facebook_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/twitter_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/instagram_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/youtube_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/bbm_footer.png"></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>

                <!----------------FOOTER PANTALLA MEDIANAS------------------->

                <div id="footerMedium">
                    <div class="row" style="margin-right: 0px;">
                        <div class="col-sm-7">
                            <ol id="linksFooter" class="breadcrumb">

                                <li><a id="aFooter" href="#">Nosotros</a></li>
                                <li><a id="aFooter" href="#">Mobiliario</a></li>
                                <li><a id="aFooter" href="#">Papeler&iacute;a</a></li>
                                <li><a id="aFooter" href="#">Computaci&oacute;n</a></li>
                                <li><a id="aFooter" href="#">Contacto</a></li>
                            </ol>
                        </div>

                        <div class="col-sm-5" style="padding-right: 0px">
                            <ul id="menuRedesSocialesFooter">
                                <li><a href="#"><img src="assest/img/icon/mercadolibre_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/facebook_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/twitter_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/instagram_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/youtube_footer.png"></a></li>
                                <li><a href="#"><img src="assest/img/icon/bbm_footer.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row" style="margin-right: 0px;">
                        <div class="col-sm-12" style="padding-right: 0px;">
                            <p id="textFooter" style="line-height: 34px;text-align: center;margin-bottom: 0px;font-size: x-small;margin-left: 22px;">Copyright &copy; 2014 Inversiones consolidados 2011 C.A</p>
                        </div>
                    </div>
                    
                    

                </div>

                <!----------------FOOTER PANTALLA PEQUENAS------------------->
                <div id="footerSmall">
                    <div class="row" style="margin-right: 0px;">
                        <div class="col-sm-12"></div>

                    </div>
                </div>
                <?= $pie ?>
            </div>
        </div>
    </body>
</html>
