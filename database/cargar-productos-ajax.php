<?php
include('conexion.php');

session_start();

// Detectar la ruta base para uploads
$uploads_path = file_exists('../uploads/productos/') ? '../uploads/productos/' : 'uploads/productos/';

if(isset($_GET['art'])) {

    switch($_GET['art']) {

        case '1':
            echo "<h3 class='titulo-catalogo-madera'> Postes Redondos </h3>";
            $consulta = "SELECT * FROM productos WHERE categoria = 'postes-redondos' ORDER BY id DESC ";
            break;

        case '2':
            echo "<h3 class='titulo-catalogo-madera'> Postes Cuadrados </h3>";
            $consulta = "SELECT * FROM productos WHERE categoria = 'postes-cuadrados' ORDER BY id DESC ";
            break;

        case '3':
            echo "<h3 class='titulo-catalogo-madera'> Varillas </h3>";
            $consulta = "SELECT * FROM productos WHERE categoria = 'varillas' ORDER BY id DESC ";
            break;

        case '4':
            echo "<h3 class='titulo-catalogo-madera'> Durmientes </h3>";
            $consulta = "SELECT * FROM productos WHERE categoria = 'durmientes' ORDER BY id DESC ";
            break;
    }
    

    $resultado = mysqli_query($database, $consulta);

    echo "<div class='productos-container'>";

    if (isset($resultado) && mysqli_num_rows($resultado) > 0) {
        while($producto = mysqli_fetch_assoc($resultado)) {
            echo "<div class='producto'>";
            if (!empty($producto['imagen'])) {
                echo "<img src='" . $uploads_path . $producto['imagen'] . "' alt='Producto' class='imagen-producto'>";
            }
            echo "<p class='parrafo-productos-madera descripcion-producto'>" . $producto['descripcion'] . "</p>";
            echo "<p class='parrafo-productos-madera'> Material: " . $producto['tipo'] . "</p>";
            echo "<p class='parrafo-productos-madera'> Precio: $" . $producto['precio'] . "</p>";
            
            if (isset($_SESSION['admin_logueado']) && $_SESSION['admin_logueado']) {
                echo "<a href='#'> BORRAR </a>";
            }   else {
                if (isset($_SESSION['usuario_logueado']) && $_SESSION['usuario']) {
                    echo "<a href='database/carrito.php?producto_id=" . $producto['id'] . "&art=" . $_GET['art'] . "' class='boton-agg-carrito'> COMPRAR </a>";
                }
            }

            echo "</div>";

        }
        
    } else {
        echo "<p>No hay productos disponibles en esta categoría.</p>";
    }
}

    echo "</div>";
?>