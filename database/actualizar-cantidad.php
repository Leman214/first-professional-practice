<?php
session_start();
include('conexion.php');

$item_id = $_POST['item_id'];
$nueva_cantidad = $_POST['nueva_cantidad'];

// Actualizar la cantidad en la base de datos
$consulta = "UPDATE carrito SET cantidad = '$nueva_cantidad' WHERE id = '$item_id'";
mysqli_query($database, $consulta);

// Volver al carrito
header("Location: /madefroni/componentes/carrito-compras.php#item-" . $item_id);
?>