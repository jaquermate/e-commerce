
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
	<script src="js/simpleCart.min.js"> </script>
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
                                            if($_GET['logged']==false){?>
                                                <li class="active"><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Register</a></li>
                                            <?php echo 'hola';}
                                            else{
                                                ?> <li><a>Logueado como <?php echo $_GET['correo']?></a></li><?php
                                            }
                                            ?>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:e-mercadillo@mercadillo.com">e-mercadillo@mercadillo.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 <span>567</span> 892</li>
						
					</ul>
				</div>
                    <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                        <ul class="social-icons">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="g"></a></li>
                            <li><a href="#" class="instagram"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="logo-nav">
                    <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                        <h1><a href="index.php">E-mercadillo <span >TU TIENDA ONLINE</span></a></h1>
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
                                    <li class="active"><a href="index.php" class="act">Inicio</a></li>	
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electrónica <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Cámaras</h6>
                                                        <li><a href="products.php?id_prod=1">Canon EOS 1300D</a></li>
                                                        <li><a href="products.php?id_prod=2">Nikon D3400</a></li>
                                                        <li><a href="products.php?id_prod=3">Sony Alpha 68</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>TV</h6>
                                                        <li><a href="products.php?id_prod=4">Samsung 49MU6405</a></li>
                                                        <li><a href="products.php?id_prod=5">LG 32LJ500U</a></li>
                                                        <li><a href="products.php?id_prod=6">Philips 50PUS6162</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>GPS</h6>
                                                        <li><a href="products.php?id_prod=7">TomTom Start 52</a></li>
                                                        <li><a href="products.php?id_prod=8">Garmin Drive 50</a></li>
                                                        <li><a href="products.php?id_prod=9">OHREX Nav Plus</a></li>
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
                                                       <li><a href="products.php?id_prod=10"></a></li>
                                                        <li><a href="products.php?id_prod=11"></a></li>
                                                        <li><a href="products.php?id_prod=12"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Media</h6>
                                                         <li><a href="products.php?id_prod=13"></a></li>
                                                        <li><a href="products.php?id_prod=14"></a></li>
                                                        <li><a href="products.php?id_prod=15"></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Gama Baja</h6>
                                                        <li><a href="products.php?id_prod=16"></a></li>
                                                        <li><a href="products.php?id_prod=17"></a></li>
                                                        <li><a href="products.php?id_prod=18"></a></li>
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
                                                        <li><a href="products.php?id_prod=19"></a></li>
                                                        <li><a href="products.php?id_prod=20"></a></li>
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
                            <a href="checkout.php">
                                <h3> <div class="total">
                                        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                    <img src="images/bag.png" alt="" />
                                </h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Carrito Vacío</a></p>
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
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                            <form method="post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    
                                <input type="email" placeholder="Email Address" name="correoLI" required=" " value="<?php echo $_GET['correo'];?>">
					<input type="password" placeholder="Password" name="contrasenaLI" required=" " value="<?php echo $_GET['contrasena']?>">
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login" >
				</form>
			</div> <?php

                    define("DB_HOST", "localhost");
                    define("DB_USER", "root");
                    define("DB_PASS", "root");
                    define("DB_DATABASE", "e-mercadillo");

                    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                    if (mysqli_connect_errno()) {
                        echo "Imposible conectarse a la base de datos: " . mysqli_connect_error();
                    } else {
                        $sql = "SELECT correo, contrasena FROM usuarios";
                        $resultado = $mysqli->query($sql);
                        if ($mysqli->errno)
                            die($mysqli->error);
                        $logueado = true;
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            if ($fila['correo'] == $_POST['correoLI'] && $_POST['correoLI'] !="" && $fila['contrasena'] == $_POST['contrasenaLI'] && $_POST['contrasenaLI'] !="" ) {
                                
                                $_SESSION['correoSES'] = "hola";//$_POST['correoLI'];
                                ?>   <meta http-equiv=REFRESH CONTENT=0;url='index.php?correo=<?php echo $_POST["correoLI"]?>&contrasena=<?php echo $_POST["contrasenaLI"]?>&logged=true'> <?php
                                
                                //$_SESSION["favanimal"] = "cat";
                                $logueado=true;
                               break;
                            }  else if ($_POST['correoLI'] !="" && $_POST['contrasenaLI'] !="" ){ {
                               $logueado=false;
                            }
                            }
                        }
                        if(!$logueado){
                            echo "Correo o contraseña incorrectos, por favor intente otra vez";
                        }
                        
                    }
                 
//                       
                    ?>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
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
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">culpa qui officia deserunt</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Quis autem vel eum iure</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">Best Store <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>

<?php
?>
