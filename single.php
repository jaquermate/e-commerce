<?php
                            define("DB_HOST", "localhost");
                            define("DB_USER", "root");
                            define("DB_PASS", "root");
                            define("DB_DATABASE", "e-mercadillo");

                            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                            if (mysqli_connect_errno()) {
                                echo "Imposible conectarse a la base de datos: " . mysqli_connect_error();
                            } else {
                                $sql = "SELECT * FROM productos WHERE id_prod=" . $_GET['id_prod'];
                                $resultado = $mysqli->query($sql);
                                if ($mysqli->errno)
                                    die($mysqli->error);
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    $_POST['marca']= $fila['marca'];
                                    $_POST['modelo']= $fila['modelo'];
                                    $_POST['departamento']= $fila['departamento'];
                                    $_POST['tipo']= $fila['tipo'];
                                    $_POST['precio']= $fila['precio'];
                                    $_POST['stock']= $fila['stock'];
                                    $_POST['descripcion']= $fila['descripcion'];
                                }
                            }
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script src="js/jquery.min.js"></script>
        <!-- //js -->
        <!-- cart -->
        <script src="js/simpleCart.min.js"></script>
        <!-- cart -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
        <!-- for bootstrap working -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- animation-effect -->
        <link href="css/animate.min.css" rel="stylesheet"> 
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- //animation-effect -->
    </head>

    <body>
       <!-- header -->
        <div class="header">
            <div class="container">
                <div class="header-grid">
                    <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                        <ul>
                            
                            <?php
                            

                            if ($_GET['correo'] == '') { ?>
                                <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
                                <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Register</a></li>
                            <?php } else {
                                ?>
                                <li> <a >Logueado como: <?php echo $_GET['correo'];?></a></li><li><h3>  </h3> </li><?php
                            }
                            ?>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:e-mercadillo@mercadillo.com">e-mercadillo@mercadillo.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mail.php?<?php echo "correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Contactanos</a></li>
                        </ul>
                    </div>
                    <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/search/top/?q=e-mercadillo" class="facebook"></a></li>
                            <li><a href="https://twitter.com/search?q=e-mercadillo" class="twitter"></a></li>
                            <li><a href="https://plus.google.com/s/e-mercadillo/top "class="g"></a></li>
                            <li><a href="https://www.instagram.com/e-mercadillo" class="instagram"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="logo-nav">
                    <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                        <h1><a href="index.php?<?php echo "correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">E-mercadillo <span >TU TIENDA ONLINE</span></a></h1>
                    </div>
                    <div class="logo-nav-left1">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php?<?php echo "correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>" class="act">Inicio</a></li>	
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electrónica <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Cámaras</h6>
                                                        <li><a href="products.php?id_prod=1<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Canon EOS 1300D</a></li>
                                                        <li><a href="products.php?id_prod=2<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Nikon D3400</a></li>
                                                        <li><a href="products.php?id_prod=3<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Sony Alpha 68</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>TV</h6>
                                                        <li><a href="products.php?id_prod=4<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Samsung 49MU6405</a></li>
                                                        <li><a href="products.php?id_prod=5<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">LG 32LJ500U</a></li>
                                                        <li><a href="products.php?id_prod=6<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Philips 50PUS6162</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>GPS</h6>
                                                        <li><a href="products.php?id_prod=7<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">TomTom Start 52</a></li>
                                                        <li><a href="products.php?id_prod=8<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Garmin Drive 50</a></li>
                                                        <li><a href="products.php?id_prod=9<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">OHREX Nav Plus</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Móvil <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Alta</h6>
                                                        <li><a href="products.php?id_prod=10<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=11<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=12<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Media</h6>
                                                        <li><a href="products.php?id_prod=13<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=14<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=15<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Baja</h6>
                                                        <li><a href="products.php?id_prod=16<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=17<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=18<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenador <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Sobremesa</h6>
                                                        <li><a href="products.php?id_prod=19<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=20<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=21"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Portátil</h6>
                                                        <li><a href="products.php?id_prod=22"></a></li>
                                                        <li><a href="products.php?id_prod=23"></a></li>
                                                        <li><a href="products.php?id_prod=24"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Discos Duros</h6>
                                                        <li><a href="products.php?id_prod=25"></a></li>
                                                        <li><a href="products.php?id_prod=26"></a></li>
                                                        <li><a href="products.php?id_prod=27"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gaming <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Consolas</h6>
                                                        <li><a href="products.php?id_prod=28"></a></li>
                                                        <li><a href="products.php?id_prod=29"></a></li>
                                                        <li><a href="products.php?id_prod=30"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Juegos</h6>
                                                        <li><a href="products.php?id_prod=31"></a></li>
                                                        <li><a href="products.php?id_prod=32"></a></li>
                                                        <li><a href="products.php?id_prod=33"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Ratón</h6>
                                                        <li><a href="products.php?id_prod=34"></a></li>
                                                        <li><a href="products.php?id_prod=35"></a></li>
                                                        <li><a href="products.php?id_prod=36"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="logo-nav-right">
                        <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Introduzca su busqueda..." type="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!-- search-scripts -->
                        <script src="js/classie.js"></script>
                        <script src="js/uisearch.js"></script>
                        <script>
            new UISearch(document.getElementById('sb-search'));
                        </script>
                        <!-- //search-scripts -->
                    </div>
                    <div class="header-right">
                        <div class="cart box_1">

                            <h3> <div class="total">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                <img src="images/bag.png" alt="" />
                            </h3>

                            <p><a href="javascript:;" class="simpleCart_empty">Vaciar Carrito</a></p>
                            <div class="clearfix"> </div>
                        </div>	
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //header -->
         <!-- header -->
        <div class="header">
            <div class="container">
                <div class="header-grid">
                    <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                        <ul>
                            
                            <?php
                            

                            if ($_GET['correo'] == '') { ?>
                                <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
                                <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Register</a></li>
                            <?php } else {
                                ?>
                                <li> <a >Logueado como: <?php echo $_GET['correo'];?></a></li><li><h3>  </h3> </li><?php
                            }
                            ?>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:e-mercadillo@mercadillo.com">e-mercadillo@mercadillo.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mail.php?<?php echo "correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Contactanos</a></li>
                        </ul>
                    </div>
                    <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/search/top/?q=e-mercadillo" class="facebook"></a></li>
                            <li><a href="https://twitter.com/search?q=e-mercadillo" class="twitter"></a></li>
                            <li><a href="https://plus.google.com/s/e-mercadillo/top "class="g"></a></li>
                            <li><a href="https://www.instagram.com/e-mercadillo" class="instagram"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="logo-nav">
                    <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                        <h1><a href="index.php?<?php echo "correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">E-mercadillo <span >TU TIENDA ONLINE</span></a></h1>
                    </div>
                    <div class="logo-nav-left1">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php?<?php echo "correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>" class="act">Inicio</a></li>	
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electrónica <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Cámaras</h6>
                                                        <li><a href="products.php?id_prod=1<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Canon EOS 1300D</a></li>
                                                        <li><a href="products.php?id_prod=2<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Nikon D3400</a></li>
                                                        <li><a href="products.php?id_prod=3<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Sony Alpha 68</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>TV</h6>
                                                        <li><a href="products.php?id_prod=4<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Samsung 49MU6405</a></li>
                                                        <li><a href="products.php?id_prod=5<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">LG 32LJ500U</a></li>
                                                        <li><a href="products.php?id_prod=6<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Philips 50PUS6162</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>GPS</h6>
                                                        <li><a href="products.php?id_prod=7<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">TomTom Start 52</a></li>
                                                        <li><a href="products.php?id_prod=8<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">Garmin Drive 50</a></li>
                                                        <li><a href="products.php?id_prod=9<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>">OHREX Nav Plus</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Móvil <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Alta</h6>
                                                        <li><a href="products.php?id_prod=10<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=11<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=12<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Media</h6>
                                                        <li><a href="products.php?id_prod=13<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=14<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=15<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Baja</h6>
                                                        <li><a href="products.php?id_prod=16<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=17<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=18<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenador <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Sobremesa</h6>
                                                        <li><a href="products.php?id_prod=19<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=20<?php echo "&correo=".$_GET['correo']."&id_usuario=".$_GET['id_usuario']?>"></a></li>
                                                        <li><a href="products.php?id_prod=21"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Portátil</h6>
                                                        <li><a href="products.php?id_prod=22"></a></li>
                                                        <li><a href="products.php?id_prod=23"></a></li>
                                                        <li><a href="products.php?id_prod=24"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Discos Duros</h6>
                                                        <li><a href="products.php?id_prod=25"></a></li>
                                                        <li><a href="products.php?id_prod=26"></a></li>
                                                        <li><a href="products.php?id_prod=27"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gaming <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Consolas</h6>
                                                        <li><a href="products.php?id_prod=28"></a></li>
                                                        <li><a href="products.php?id_prod=29"></a></li>
                                                        <li><a href="products.php?id_prod=30"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Juegos</h6>
                                                        <li><a href="products.php?id_prod=31"></a></li>
                                                        <li><a href="products.php?id_prod=32"></a></li>
                                                        <li><a href="products.php?id_prod=33"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Ratón</h6>
                                                        <li><a href="products.php?id_prod=34"></a></li>
                                                        <li><a href="products.php?id_prod=35"></a></li>
                                                        <li><a href="products.php?id_prod=36"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="logo-nav-right">
                        <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Introduzca su busqueda..." type="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!-- search-scripts -->
                        <script src="js/classie.js"></script>
                        <script src="js/uisearch.js"></script>
                        <script>
            new UISearch(document.getElementById('sb-search'));
                        </script>
                        <!-- //search-scripts -->
                    </div>
                    <div class="header-right">
                        <div class="cart box_1">

                            <h3> <div class="total">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                <img src="images/bag.png" alt="" />
                            </h3>

                            <p><a href="javascript:;" class="simpleCart_empty">Vaciar Carrito</a></p>
                            <div class="clearfix"> </div>
                        </div>	
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //header -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                    <li class="active">Producto</li>
                </ol>
            </div>
        </div>
        <!-- //breadcrumbs -->
        <!-- single -->
        <div class="single">
            <div class="container">
                <div class="col-md-4 products-left">
                    <div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
                        <h3>Filtrar por precio</h3>
                        <ul class="dropdown-menu1">
                            <li><a href="">								               
                                    <div id="slider-range"></div>							
                                    <input type="text" id="amount" style="border: 0" />
                                </a></li>	
                        </ul>
                        <script type='text/javascript'>//<![CDATA[ 
                            $(window).load(function () {
                                $("#slider-range").slider({
                                    range: true,
                                    min: 0,
                                    max: 1000,
                                    values: [20, 250],
                                    slide: function (event, ui) {
                                        $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                                    }
                                });
                                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));


                            });//]]>
                        </script>
                        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                        <!---->
                    </div>
                    <div class="categories animated wow slideInUp" data-wow-delay=".5s">
                        <h3><?php 
                        $num = intval(($_GET['id_prod']-1)/9);
                        switch ($num){
                        case 0: echo "electronica";break;
                        case 1: echo "movil";break;
                        case 2: echo "ordenadores";break;
                        case 3: echo "gaming";break;
                        }
                       ?></h3>
                        <ul class="cate">
                            <li><a href="products.php?id_prod=1">Electrónica</a> <span>(9)</span></li>
                            <ul>
                            <li><a href="products.php?id_prod=10">Cámaras</a> <span>(3)</span></li>
                            <ul>
                                <li><a href="single.php?id_prod=1">Canon EOS 1300D</a></li>
                                <li><a href="single.php?id_prod=2">Nikon D3400</a></li>
                                <li><a href="single.php?id_prod=3">Sony Alpha 68</a></li>
                            </ul>
                            </ul>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-8 single-right">
                    <div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
                        <div class="flexslider">
                            <ul class="slides">
                                
                                <li data-thumb="images/<?php echo $_POST['departamento']."_".$_POST['tipo']."_0".$_GET['id_prod'].".jpg";?>">
                                    <div class="thumb-image"> <img src="images/<?php echo $_POST['departamento']."_".$_POST['tipo']."_0".$_GET['id_prod'].".jpg";?>" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <li data-thumb="images/<?php echo $_POST['departamento']."_".$_POST['tipo']."_0".$_GET['id_prod'].".jpg";?>">
                                    <div class="thumb-image"> <img src="images/<?php echo $_POST['departamento']."_".$_POST['tipo']."_0".$_GET['id_prod'].".jpg";?>" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <li data-thumb="images/<?php echo $_POST['departamento']."_".$_POST['tipo']."_0".$_GET['id_prod'].".jpg";?>">
                                    <div class="thumb-image"> <img src="images/<?php echo $_POST['departamento']."_".$_POST['tipo']."_0".$_GET['id_prod'].".jpg";?>" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                            </ul>
                        </div>
                        <!-- flixslider -->
                        <script defer src="js/jquery.flexslider.js"></script>
                        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function () {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>
                        <!-- flixslider -->
                    </div>
                    <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
                        <h3>
                            
                            <?php
                            echo $_POST['marca']." ".$_POST['modelo'];
                            ?>
                        </h3>
                        <h4><span class="item_price"><?php echo $_POST['precio']." €";?></span></h4>
                        <div class="rating1">
                            <span class="starRating">
                                <input id="rating5" type="radio" name="rating" value="5">
                                <label for="rating5">5</label>
                                <input id="rating4" type="radio" name="rating" value="4">
                                <label for="rating4">4</label>
                                <input id="rating3" type="radio" name="rating" value="3" checked>
                                <label for="rating3">3</label>
                                <input id="rating2" type="radio" name="rating" value="2">
                                <label for="rating2">2</label>
                                <input id="rating1" type="radio" name="rating" value="1">
                                <label for="rating1">1</label>
                            </span>
                        </div>
                        <div class="description">
                            <h5><i>Descripción</i></h5>
                            <p><?php echo $_POST['descripcion'];?></p>
                        </div>


                        <div class="occasion-cart">
                            <a  href="compra.php?correo=<?php echo $_GET['correo'];?>&id_prod=<?php echo $_GET['id_prod']; ?>&id_usuario=<?php echo $_GET['id_usuario']; ?>">Comprar ahora </a>
                          
                        </div>
                        <div class="social">
                            <div class="social-left">
                                <p>Share On :</p>
                            </div>
                            <div class="social-right">
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"></a></li>
                                    <li><a href="#" class="twitter"></a></li>
                                    <li><a href="#" class="g"></a></li>
                                    <li><a href="#" class="instagram"></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Descripción</a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(2)</a></li>
                                <li role="presentation" class="dropdown">
                                    
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                        <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
                                        <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                                    <h5>Descripción</h5>
                                    <p><?php echo $_POST['descripcion'];?></p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
                                    <div class="bootstrap-tab-text-grids">
                                        <div class="bootstrap-tab-text-grid">
                                            <div class="bootstrap-tab-text-grid-left">
                                                <img src="images/4.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="bootstrap-tab-text-grid-right">
                                                <ul>
                                                    <li><a href="#">Admin</a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
                                                </ul>
                                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                                    vel eum iure reprehenderit.</p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="bootstrap-tab-text-grid">
                                            <div class="bootstrap-tab-text-grid-left">
                                                <img src="images/5.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="bootstrap-tab-text-grid-right">
                                                <ul>
                                                    <li><a href="#">Admin</a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
                                                </ul>
                                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                                    vel eum iure reprehenderit.</p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="add-review">
                                            <h4>add a review</h4>
                                            <form>
                                                <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Name';
                                                        }" required="">
                                                <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Email';
                                                        }" required="">
                                                <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Subject';
                                                        }" required="">
                                                <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Message...';
                                                        }" required="">Message...</textarea>
                                                <input type="submit" value="Send" >
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //single -->
        
        <!-- //single-related-products -->
       <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
                        <h3>Sobre nosotros</h3>
                        <p>Somos la mejor tienda online del mercado<span>100% española</span></p>
                    </div>
                    <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>286595 Calle Mayor, Madrid <span>España</span></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:e-mercadillo@mercadillo.com">e-mercadillo@mercadillo.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
                        <h3>Flickr Posts</h3>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-left">
                            <a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                   
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
                    <h2><a href="index.php">E-mercadillo <span>compra online</span></a></h2>
                </div>
                <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
                    <p>&copy 2018 E-mercadillo. All rights reserved | Design by Jesús Martínez de Juan</p>
                </div>
            </div>
        </div>
        <!-- //footer -->
        <!-- zooming-effect -->
        <script src="js/imagezoom.js"></script>
        <!-- //zooming-effect -->
    </body>
</html>

