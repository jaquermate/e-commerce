//CODIGO DE CONEXION BBDD 
<?php
        
        
        echo 'Usuario de la sesion:  '. $_SESSION['correoSES']. " \n logueado correctamente";
        define("DB_HOST", "localhost");
        define("DB_USER", "root");
        define("DB_PASS", "root");
        define("DB_DATABASE", "e-mercadillo");

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
        if (mysqli_connect_errno()) {
            echo "Imposible conectarse a la base de datos: " . mysqli_connect_error();
        } else {
            $sql = "SELECT * FROM productos";
            $resultado = $mysqli->query($sql);
            if ($mysqli->errno)
                die($mysqli->error);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                
                echo "Marca: " . $fila['marca']
                . ", modelo: " . $fila['modelo']
                . ", departamento: " . $fila['departamento']
                . ", tipo: " . $fila['tipo']
                . ", precio: " . $fila['precio']
                . ", stock: " . $fila['stock']
                . ", descripcion: " . $fila['descripcion']
                .  "images/".$fila['departamento'] ."_".$fila['tipo']."_0".$fila['id_prod'].".jpg"
                
                        ?> <img src="images/<?php echo $fila['departamento'] ."_".$fila['tipo']."_0".$fila['id_prod'].".jpg"?>" width="70" height="50"  /> <?php


                echo "<br/>";
            }


//            $resultado = mysqli_query($con, $sql);
//            if (mysqli_errno($con)) {
//                die(mysqli_error($con));
//            } else {
//                echo 'usuario metido';
//            }
        }
        ?>
