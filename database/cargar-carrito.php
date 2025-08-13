<?php

include('conexion.php');

$usuario_id = $_SESSION['id_usuario'];

$consulta_bd = "SELECT carrito.*, productos.categoria, productos.descripcion, productos.precio
                FROM carrito
                INNER JOIN productos ON carrito.producto_id = productos.id
                WHERE carrito.usuario_id = '$usuario_id'";

$resultado_consulta = mysqli_query($database, $consulta_bd);

if (mysqli_num_rows($resultado_consulta) > 0) {

    $total_general = 0;

    while($item = mysqli_fetch_assoc($resultado_consulta)) {

        $categoria_mostrar = ucwords(str_replace('-', ' ', $item['categoria']));
        $subtotal = $item['precio'] * $item['cantidad'];
        $total_general += $subtotal;

        echo "<div class='caja-carrito' id='item-" . $item['id'] . "'>";
        echo "<h3>Producto: ". $categoria_mostrar . "</h3>";
        echo "<p>Descripcion: " . $item['descripcion'] . "</p>";
        echo "<p>Precio: $" . $item['precio'] . "</p>";
        echo "<form method='POST' action='/madefroni/database/actualizar-cantidad.php'>";
        echo "<input type='hidden' name='item_id' value='" . $item['id'] . "'>";
        echo "<label>Cantidad: </label>";
        echo "<input type='number' name='nueva_cantidad' value='" . $item['cantidad'] . "' min='1' max='99'>";
        echo "<button type='submit'>Actualizar</button>";
        echo "</form>";
        echo "<form method='POST' action='/madefroni/database/borrar-item.php' style='display:inline; margin-left:10px;'>";
        echo "<input type='hidden' name='item_id' value='" . $item['id'] . "'>";
        echo "<button type='submit' onclick='return confirm(\"¿Estás seguro de que quieres eliminar este producto?\")' class='btn-borrar'>Borrar</button>";
        echo "</form>";
        echo "<p class='subtotal'>Subtotal: $" . $subtotal . "</p>";
        echo "</div>";

    }

    echo "<div class='total-carrito'>";
    echo "<h3>Total: $" . $total_general . "</h3>";
    echo "</div>";

    

} else {

    echo "<p>Tu carrito está vacío</p>";

}

?>