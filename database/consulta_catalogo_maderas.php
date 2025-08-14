<?php

if(isset($_GET['art'])) {

            switch($_GET['art']) {

                case '1':

                    echo "<h3 id='redir-catalogo' class='titulo-catalogo-madera'> Postes Redondos </h3>";
                    $consulta = "SELECT * FROM productos WHERE categoria = 'postes-redondos' ORDER BY id DESC ";
                    break;


                case '2':

                    echo "<h3 id='redir-catalogo' class='titulo-catalogo-madera'> Postes Cuadrados </h3>";
                    $consulta = "SELECT * FROM productos WHERE categoria = 'postes-cuadrados' ORDER BY id DESC ";
                    break;

                case '3':

                    echo "<h3 id='redir-catalogo' class='titulo-catalogo-madera'> Varillas </h3>";
                    $consulta = "SELECT * FROM productos WHERE categoria = 'varillas' ORDER BY id DESC ";
                    break;

                case '4':

                    echo "<h3 id='redir-catalogo' class='titulo-catalogo-madera'> Durmientes </h3>";
                    $consulta = "SELECT * FROM productos WHERE categoria = 'durmientes' ORDER BY id DESC ";
                    break;

            }

            $resultado = mysqli_query($database, $consulta);

        }

        if (isset($_GET['ya_existe']) && $_GET['ya_existe'] == 'si') {
            echo "<p id='mensaje'>⚠️ Ese producto ya fue agregado a su carrito de compras. <a href='componentes/carrito-compras.php'>Haz click aquí</a> para ir a verlo</p>";
            echo "<script>location.hash = '#mensaje';</script>";
        }

        if (isset($_GET['cargado']) && $_GET['cargado'] == 'si') {
            echo "<p id='mensaje'>✅ Producto agregado correctamente! <a href='componentes/carrito-compras.php'>Haz click aquí para gestionar tu carrito</a></p>";
            echo "<script>location.hash = '#mensaje';</script>";
        }

?>