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
    $items_pedido = []; // Array para JavaScript

    while($item = mysqli_fetch_assoc($resultado_consulta)) {

        $categoria_mostrar = ucwords(str_replace('-', ' ', $item['categoria']));
        $subtotal = $item['precio'] * $item['cantidad'];
        $total_general += $subtotal;

        // Guardar para JavaScript
        $items_pedido[] = [
            'categoria' => $categoria_mostrar,
            'cantidad' => $item['cantidad'],
            'precio' => $item['precio'],
            'subtotal' => $subtotal
        ];

        echo "<div>";
        echo "<p> x" . $item['cantidad'] . " " . $categoria_mostrar . ", Subtotal: $" . $subtotal . "</p>";
        echo "</div>";

    }

    echo "<p class='total-a-pagar-txt'> Total a pagar: $" . $total_general . "</p>";

    // Generar JavaScript con los datos
    echo "<script>";
    echo "const pedidoItems = " . json_encode($items_pedido) . ";";
    echo "const totalPedido = " . $total_general . ";";
    echo "</script>";

}

?>