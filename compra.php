<?php define("DB_HOST", "localhost");
                            define("DB_USER", "root");
                            define("DB_PASS", "root");
                            define("DB_DATABASE", "e-mercadillo");

                            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                            if (mysqli_connect_errno()) {
                                echo "Imposible conectarse a la base de datos: " . mysqli_connect_error();
                            } else {
                                $sql = "INSERT INTO `ventas` (`cod_venta`, `id_usuario`, `id_prod`) VALUES (NULL, '".$_GET['id_usuario']."', '".$_GET['id_prod']."')";
                                 $sql2 = " UPDATE productos SET stock=stock-1 WHERE productos.id_prod = ".$_GET['id_prod']."; ";
                                        
                                $resultado = $mysqli->query($sql);
                                $resultado2 = $mysqli->query($sql2);
                                if ($mysqli->errno)
                                    die($mysqli->error);
                                
                            }
                            ?>
<html>
    <head>
        
        </head>
    <body>

    <meta http-equiv=REFRESH CONTENT=3;url='single.php?id_prod=<?php echo $_GET['id_prod'];?>&id_usuario=<?php echo $_GET['id_usuario'];?>'  >
       
        TRAMITANDO COMPRA. ESPERE MIENTRAS CONECTAMOS CON SU BANCO
        
    </body>

</html>