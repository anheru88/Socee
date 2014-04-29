{{ Asset::add('css/bootstrap.min.css') }}
{{ Asset::add('css/style.css') }}
{{ Asset::add('css/responsive.css') }}
{{ Asset::add('css/linecons.css') }}

{{ Asset::add('js/jquery.min.js') }}
{{ Asset::add('bootstrap.min.js') }}
{{ Asset::add('smoothscroll.js') }}


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--  <link rel="shortcut icon" href="../../ico/favicon.ico"> -->

    <title>Socee - Sistema óptimo de consumo de energía eléctrica </title>

    {{ Asset::css() }}

    <!-- Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
</head>
<!-- NAVBAR
================================================== -->
<body>

<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><licon class="li_data"></licon> <b>SOCEE</b></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav cl-effect-13">
                <li class="active"><a href="#home" class="smoothScroll">Inicio</a></li>
                <li><a href="#features" class="smoothScroll">Caracteristicas</a></li>
                <li><a href="#pricing" class="smoothScroll">Precios</a></li>
                <li><a href="#contact" class="smoothScroll">Contactos</a></li>
            </ul>

            <!-- Sign In / Sign Up -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#signin" data-toggle="modal" data-target=".bs-modal-sm"><i class="fa fa-lock"></i> Iniciar Sesion </a></li>
                <div class="navbar-form pull-left">
                    <a href="#signup" type="button" class="btn btn-sm btn-theme" data-toggle="modal" data-target=".bs-modal-sm">Demostración</a>
                </div>
            </ul>
        </div><!--/nav-collapse -->
    </div><!-- /container -->
</div>

<!-- Header Wrap -->
<div id="headerwrap">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1>Welcome To <b>SOCEE</b></h1>
                <h3>Show your product with confidence.</h3>
                <br>
            </div>

            <div class="col-lg-2 hidden-xs hidden-sm hidden-md">
                <h5>Automate business processes</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <img src="img/arrow-left.png" alt="">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="img/app-bg.png" alt="">
                <!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                <a href="#features" type="submit" class="btn btn-lg btn-theme smoothScroll">LEARN MORE</a>-->
            </div>
            <div class="col-lg-2 hidden-xs hidden-sm hidden-md">
                <br>
                <img class="pad-top" src="img/arrow-right.png" alt="">
                <h5>Collaborate in the cloud</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div> <!-- /container -->
</div> <!-- End Header Wrap -->

<!-- Intro Wrap -->
<div id="intro">
    <div class="container">
        <div class="row text-center">
            <h2>Caracteristicas</h2>
            <hr>
            <br>
            <br>
            <div class="col-lg-3">
                <licon class="li_user"></licon>
                <h3>Professional Services</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_banknote"></licon>
                <h3>Cost Effective</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_data"></licon>
                <h3>Scalable and Adaptable</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_like"></licon>
                <h3>Easy to Use</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_user"></licon>
                <h3>Professional Services</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_banknote"></licon>
                <h3>Cost Effective</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_data"></licon>
                <h3>Scalable and Adaptable</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-3">
                <licon class="li_like"></licon>
                <h3>Easy to Use</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <br>
    </div> <!-- /container -->
</div> <!-- End Intro Wrap -->

<div id="divider01">
    <div class="container">
        <div class="row text-center">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item">
                        <h3>"Working with Bootstack was amazing. Their team is incredible."</h3>
                        <h4>John Doe, <em>A Company</em></h4>
                    </div>
                    <div class="item active">
                        <h3>"Bootstack has helped my team build amazing products. Amazing team."</h3>
                        <h4>Jane Doe, <em>A Company</em></h4>
                    </div>
                </div><!-- /carousel-inner -->
                <br>
                <br>
                <br>
                <!-- Indicators - Uncomment for indicators to show
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol> -->
            </div><!-- /carousel-example -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>

<!-- Pricing Section -->
<section id="pricing" name="pricing"></section>
<div id="pricingwrap">
    <div class="container text-center">
        <br>
        <h2>Our Pricing Options</h2>
        <hr><br><br>
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h3 class="panel-title">Starter</h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <h2>$9<span class="subscript">/mo</span></h2>
                            <small>1 month FREE Trial</small>
                        </div>
                        <table class="table">
                            <tbody><tr>
                                <td>1 Account</td>
                            </tr>
                            <tr>
                                <td>1 Project</td>
                            </tr>
                            <tr>
                                <td>50K API Access</td>
                            </tr>
                            <tr>
                                <td>100MB Storage</td>
                            </tr>
                            <tr>
                                <td>Custom Cloud Services</td>
                            </tr>
                            <tr>
                                <td>Weekly Reports</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="panel-footer">
                        <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h3 class="panel-title">Standard</h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <h2>$19<span class="subscript">/mo</span></h2>
                            <small>1 month FREE Trial</small>
                        </div>
                        <table class="table">
                            <tbody><tr>
                                <td>2 Accounts</td>
                            </tr>
                            <tr>
                                <td>5 Projects</td>
                            </tr>
                            <tr>
                                <td>100K API Access</td>
                            </tr>
                            <tr>
                                <td>200MB Storage</td>
                            </tr>
                            <tr>
                                <td>Custom Cloud Services</td>
                            </tr>
                            <tr>
                                <td>Weekly Reports</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="panel-footer">
                        <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h3 class="panel-title">Premium</h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <h2>$39<span class="subscript">/mo</span></h2>
                            <small>1 month FREE Trial</small>
                        </div>
                        <table class="table">
                            <tbody><tr>
                                <td>5 Accounts</td>
                            </tr>
                            <tr>
                                <td>20 Projects</td>
                            </tr>
                            <tr>
                                <td>300K API Access</td>
                            </tr>
                            <tr>
                                <td>500MB Storage</td>
                            </tr>
                            <tr>
                                <td>Custom Cloud Services</td>
                            </tr>
                            <tr>
                                <td>Weekly Reports</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="panel-footer">
                        <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h3 class="panel-title">Enterprise</h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <h2>$59<span class="subscript">/mo</span></h2>
                            <small>1 month FREE Trial</small>
                        </div>
                        <table class="table">
                            <tbody><tr>
                                <td>10 Accounts</td>
                            </tr>
                            <tr>
                                <td>50 Projects</td>
                            </tr>
                            <tr>
                                <td>500K API Access</td>
                            </tr>
                            <tr>
                                <td>1GB Storage</td>
                            </tr>
                            <tr>
                                <td>Custom Cloud Services</td>
                            </tr>
                            <tr>
                                <td>Weekly Reports</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <div class="panel-footer">
                        <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div> <!-- End Pricing Wrap -->
<!-- Divider 02 -->
<div id="divider02">
    <div class="container text-center">
        <h3>Star to the Demo Page</h3>
        <a href="#" type="button" class="btn btn-lg btn-theme2">Demo Page</a>
    </div>
</div>

<div id="footerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3>Contactenos</h3>
                <br>
                <p><i class="fa fa-map-marker"></i> Some Address 373, Palo Alto, CA <br>
                    <i class="fa fa-phone"></i> (800) 373-7733 <br>
                    <i class="fa fa-envelope-o"></i> <a href="mailto:support@bootstacktheme.com">support@bootstacktheme.com</a>
                </p>
            </div>

            <div class="col-lg-4 col-lg-offset-4">
                <h3>Newsletter</h3>
                <br>
                <p>Subscribe to our newsletter and be the first to know our latest updates.</p>
                <div class="form-inline">
                    <input type="text" class="form-control" placeholder="Your email">
                    <button class="btn btn-theme" type="button">Subscribe</button>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div>

<!-- Copyright -->
<div id="copywrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <p> Copyright ©2014 <a href="www.digitalcaribe.com.co">Digital Caribe.</a> Todos los derechos reservados.</p>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

{{ Asset::js() }}
<script>
    $('.carousel').carousel({
        interval: 3500,
        pause: "none"
    })
</script>
</body>
</html>