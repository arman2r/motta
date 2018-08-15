<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>SEOGRAPHICS - @yield('title')</title>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N9R874L');
    </script>
    <!-- End Google Tag Manager -->
    <style>
    @charset "UTF-8";html{font-family:"Montserrat",sans-serif;-ms-text-size-adjust:100%;- webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}img{border:0}hr{box-sizing:content-box;height:0}input{line-height:normal}textarea{overflow:auto}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}a{color:# 337ab7;text-decoration:none}img{vertical-align:middle}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}h2,h3,h6,.h1,.h2{font- familia:heredar;font-weight:500;line-height:1.1;color:inherit}.h1,h2,.h2,h3{margin-top:20px;margen inferior:10px}h6{margen superior:10px;margen-inferior:10px}.h1{font-size:36px}h2,.h2{font-size:30px}h3{font-size:24px}h6{font-size:12px}p{margin:0 0 10px}ul{margin-top:0;margin-bottom:10px}ul ul{margin-bottom:0}textarea.form-control{height:auto}
    </style>
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <meta name="dc.Language" scheme="RFC1766" content="Spanish">
    <meta content=Spanish name=language/>
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta charset="utf-8">
    <meta name="author" content="Crapas Mott">
    <meta name="REPLY-TO" content="contactanos@seographics.com.co">
    <meta name="Resource-type" content="Index">
    <meta name="Revisit-after" content="582 days">
    <meta name="robots" content="ALL">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    
    <meta property=og:type content=website>
    
    <meta property="fb:admins" content="834441610022571">
    <meta property="fb:app_id" content="470450446638168">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://twitter.com/seographics">
    <meta name="twitter:creator" content="@mottastudy">
    <link rel="alternate" href="https://www.seographics.com.co/es-co" hreflang="es-co" />
    
    <link rel="alternate" hreflang="en" href="https://www.seographics.com.co" />
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="114x114" href=""> 

    @yield('head')

    @section('css')
    
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/> 
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    @show
</head>

<body>
    @section('header')
    <div class="header-wrapper">
        <nav id="navbar-main" class="navbar main-menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo agencia" class="img-responsive"/></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="index.html#" data-toggle="dropdown" class="dropdown-toggle">Servicios</a>
                            <ul class="dropdown-menu">
                                <li><a href="artesgraficas.html"><span class=" icon icon-pencil"></span>Artes gráficas</a></li>
                                <li><a href="disenoweb.html" class="b-clor"><span class="icon-laptop-phone"></span>Diseño Web</a></li>
                                <li><a href="optimiza.html"><span class="icon-puzzle"></span>Optimización Web</a></li>
                                <li><a href="seo.html"><span class="icon-magnifier"></span>Posicionaminto SEO</a></li>
                                <li><a href="pagoxclic.html"><span class="icon-select2"></span>Pago por clic</a></li>
                                <li><a href="socialmedia.html"><span class="icon-share"></span>Marketing de medios sociales</a></li>
                            </ul>
                        </li>
                        <li><a href="">Portafolio</a></li>
                        <li><a href="">Casos de Éxitos</a></li>
                        <li><a href="">SEOGraphics</a></li>
                        <li class="dropdown"><a href="" data-toggle="dropdown">Blog</a></li>
                        <li class="btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal"><a href="contacto.html">Contáctenos<span class="icon-chevron-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @show
    <div class="row">
        @yield('content')
    </div>
    @section('footer')
        <footer id="footer">
            <a class="top-btn page-scroll" href="index.html#top"><span class="icon-chevron-up b-clor regular-text text-center"></span></a>
            <div class="grey-dark-bg text-center">
                <div class="container">
                    <h2>¡Suscríbete a nuestro boletín para mantenerte al día con las novedades tecnológicas!</h2>
                    <div class="customise-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                        <input class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                        <input class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div>
                                        <input class="btn btn-fill full-width" type="submit" value="REGISTRATE GRATIS!" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="light-gray-font-color">Confía en nosotros y sea uno de los primeros en conocer nuestras noticias, ideas, actualizaciones y<br> últimas características.</p>
                    </div>
                </div>
            </div>
            <div class="light-ash-bg">
                <div class="container">
                    <ul>
                        <li>
                            <ul>
                                <li>
                                    <a href="index.html"><img src="images/small-logo.png" alt="SEO Graphics" class="img-responsive logo"></a>
                                </li>
                                <li>
                                    <p class="extra-small-text">&copy; 2018</p>
                                </li>
                                <li>
                                    <p class="extra-small-text">SEOGraphics.<br> Todos los derechos reservados.</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a class="regular-text text-color-light">Servicios</a></li>
                                <li><a href="artesgraficas.html" class="extra-small-text">Artes Gráficas</a></li>
                                <li><a href="disenoweb.html" class="extra-small-text">Diseño web</a></li>
                                <li><a href="optimiza.html" class="extra-small-text">Optimización web</a></li>
                                <li><a href="seo.html" class="extra-small-text">Posicionaminto SEO </a></li>
                                <li><a href="pagoxclic.html" class="extra-small-text">Pago por Clic</a></li>
                                <li><a href="socialmedia.html" class="extra-small-text">Marketing de medios sociales</a></li>
                            </ul>
                        </li>
                        <li>
                             <ul>
                                <li><a class="regular-text text-color-light">Recursos</a></li>
                                <li><a href="" class="extra-small-text">Portafolio</a></li>
                                <li><a href="" class="extra-small-text">Casos de exito</a></li>
                                <li><a href="" class="extra-small-text">Noticias</a></li>
                            </ul>
                      </li>
                        <li>
                           
                            <ul>
                                <li><a class="regular-text text-color-light">Soporte</a></li>
                                <li><a href="contacto.html" class="extra-small-text">Contáctenos</a></li>
                                <li><a href="politica.html" class="extra-small-text">Política de privacidad</a></li>
                                <li><a href="terminosycondiciones.html" class="extra-small-text">Términos & condiciones</a></li>
                            </ul>
                     </li>
                        <li class="big-width">
                           <ul class="list-inline">
                                <li>
                                    <p class="regular-text text-color-light">Estar en contacto</p>
                                    <ul class="social-links">
                                        <li><a href=""><span class="icon-facebook"></span></a></li>
                                        <li><a href=""><span class="icon-twitter"></span></a></li>
                                        <li><a href=""><span class="icon-google-plus"></span></a></li>
                                        <li><a href=""><span class="icon-instagram"></span></a></li>
                                        <li><a href=""><span class="icon-pinterest"></span></a></li>
                                        <li><a href=""><span class="icon-linkedin"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- modal -->
        <div class="modal fade verticl-center-modal" id="getAQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getAQuoteModal">
        <div class="modal-dialog getguoteModal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="customise-form">
                                <form class="email_form" action="email.php" method="post">
                                    <h3>¿Quieres una cotización?</h3>
                                    <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre">
                                    </div>
                                    <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group customised-formgroup"> <span class="icon-telephone"></span>
                                        <input type="text" id="txtPhone" name="txtPhone" class="form-control" placeholder="Móvil">
                                    </div>
                                    <div class="form-group customised-formgroup"> <span class="icon-laptop"></span>
                                        <input type="text" id="txtSitio" name="txtSitio" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                                        <textarea id="txtMensaje" name="txtMensaje" class="form-control" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-fill full-width">Si la Quiero<span class="icon-chevron-right"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>¿Que sigue?</h3>
                            <ul class="list-with-arrow">
                                <li>Te enviaremos un correo de confirmación de día y hora que  te contactara uno de nuestros expertos.</li>
                                <li>En un tiempo estimado cotizamos el servicio requerido.</li>
                                <li>Por último podríamos concretar una cita o reunión, ya sea personal o video llamada.</li>
                            </ul>
                            <div class="contact-info-box-wrapper">
                                <div class="contact-info-box"> <span class="icon-telephone"></span>
                                    <div>
                                        <h6>Llamanos</h6>
                                        <p>+57 3192948824</p>
                                    </div>
                                </div>
                                <div class="contact-info-box"> <span class="icon-envelope"></span>
                                    <div>
                                        <h6>Enviar un correo electrónico</h6>
                                        <p>contactanos@seographics.com.co</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    @show

    @section('scripts')
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/isotope.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    @show
</body>

</html>