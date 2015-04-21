<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Valeria Martell</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('assets')?>/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('assets')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="tel:+52-556-383-5101">Valeria Martell</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?=base_url()?>#inicio">Inicio</a>
                    </li>
                     <li>
                        <a href="<?=base_url()?>#me">Sobre mí</a>
                    </li> 
                    <li>
                        <a href="<?=base_url()?>#services">Contactame</a>
                    </li>
                    <li>
                        <a href="<?=base_url('diario/erotico')?>">Blog</a>
                    </li>                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="inicio"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 >Valeria Martell </h1>
                        <h3><a href="tel:+52-556-383-5101" style="text-decoration:none; color:#fff">Contrataciones: 5543731944</a></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/Valeria_Martell" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/VALERIA_MARTELL" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">INSTAGRAM</span></a>
                            </li>
                            <!-- <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <a name="about"></a>  

	<?php $this->load->view($contenido)?>    

	<a  name="contact"></a>
        <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Sigueme: </h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/Valeria_Martell" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/VALERIA_MARTELL" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">INSTAGRAM</span></a>
                        </li>
                        <!-- <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#inicio">Inicio</a>
                        </li>
                         <li>
                            <a href="#me">Sobre mí</a>
                        </li> 
                        <li>
                            <a href="#services">Contactame</a>
                        </li>
                        <li>
                            <a href="<?=base_url('diario/erotico')?>">Blog</a>
                        </li>
                    </ul>
                    <!-- <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=base_url('assets')?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets')?>/js/bootstrap.min.js"></script>

</body>

</html>
