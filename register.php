
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<html>
    <head>
        <title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
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
        <!-- breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                    <li class="active">Register Page</li>
                </ol>
            </div>
        </div>
        <!-- //breadcrumbs -->
        <!-- register -->
        <div class="register">
            <div class="container">
                <h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
                <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum.</p>
                <div class="login-form-grids">
                    <h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
                    <form class="animated wow slideInUp" data-wow-delay=".5s" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
                        <input type="text" name = "nombre" placeholder="First Name..." required="" >
                        <input type="text" name = "apellidos" placeholder="Last Name..." required="">
                        <input type="text" name="cod_postal" placeholder="Codigo Postal" required="" >

                        <div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
                            <div class="check">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
                            </div>
                        </div>
                        <h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>

                        <input type="email" name="correo" placeholder="Email Address"  required="" >
                        <input type="password" name="contrasena" placeholder="Password" required="" >
                        <input type="password" name="contrasena02" placeholder="Password Confirmation" required="" >
                        <div class="register-check-box">
                            <div class="check">
                                <label class="checkbox"><input type="checkbox" name="checkbox" required=""><i> </i>I accept the terms and conditions</label>
                            </div>
                        </div>
                        <input type="submit" value="Register" name="register" >
                    </form>
                    <?php echo $_POST['nombre'] . " " . $_POST['apellidos'] . " " . $_POST['cod_postal'] . " " . $_POST['correo'] . " " . $_POST['contrasena'] . " " . $_POST['contrasena02'] ?> <br> <?php

                    define("DB_HOST", "localhost");
                    define("DB_USER", "root");
                    define("DB_PASS", "root");
                    define("DB_DATABASE", "e-mercadillo");

                    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                    if (mysqli_connect_errno()) {
                        echo "Imposible conectarse a la base de datos: " . mysqli_connect_error();
                    } else {
                        $sql = "SELECT correo FROM usuarios";
                        $resultado = $mysqli->query($sql);
                        if ($mysqli->errno)
                            die($mysqli->error);
                        $validUser = true;
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            if ($fila['correo'] == $_POST['correo']) {
                                if($_POST['correo']!=""){
                                     echo 'Ya existe un usuario registrado con el correo:' . $_POST['correo'] . '. Prueba con otro correo';
                                     
                                }
                               $validUser = false;
                            }
                        }
                        if ($validUser) {
                            $sql = "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `cod_postal`, `correo`, `contrasena`) "
                                    . "VALUES (NULL, '" . $_POST['nombre'] . "', '" . $_POST['apellidos'] . "', '" . $_POST['cod_postal'] . "', '" . $_POST['correo'] . "', '" . $_POST['contrasena'] . "');";
                            $resultado = $mysqli->query($sql);
                            if ($mysqli->errno)
                                die($mysqli->error);
                            echo "Usuario registrado correctamente"
                            ?> <br> <meta http-equiv=REFRESH CONTENT=3;url='login.php?correo=<?php echo $_POST["correo"]?>&contrasena=<?php echo $_POST["contrasena"]?>'> <?php
                            
                            echo "Se le redigirá automaticamente";
                           
                        }
                    }
                    //else {
//            
//            
//            if ($mysqli->errno)
//                die($mysqli->error);
//            while ($fila = mysqli_fetch_assoc($resultado)) {
//
//                    $mysqli02 = mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
//                    
//                    if (mysqli_connect_errno()) {
//                        echo "Imposible conectarse a la base de datos: " . mysqli_connect_error();
//                    } else {
//
//                        $sql02 = //"INSERT INTO usuario (nombre, mail) VALUES ('nuevo', 'nuevo@ejemplo.com');"
//                                // "UPDATE usuario SET nombre='modificado' WHERE id = '6'";
//                                // "DELETE FROM usuario WHERE id = '5'";    
//                                //"DROP TABLE IF EXISTS usuario";   
//                                "SELECT correo FROM usuarios";
//                        $resultado02 = $mysqli02->query($sql02);
//                        if ($mysqli02->errno)
//                            die($mysqli02->error);
//                        
//                      
//                        while ($fila = mysqli_fetch_assoc($resultado02)) {
//                            if (0 == 0) {//$fila['correo']=="pepe@pepe"){
//                                echo 'pepe@pepe INTRODUCIDO';
//                            } else {
//                                echo 'NO HAS INTRODUCIDO pepe@pepe';
//                            }
//                        }
//                       
                    ?>
                </div>
                <div class="register-home animated wow slideInUp" data-wow-delay=".5s">
                    <a href="index.php">Inicio</a>
                </div>
            </div>
        </div>
        <!-- //register -->
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
    </body>
</html>
