<?php
session_start();

$usuario_id = $_SESSION['id_usuario'];
$producto_id = $_GET['producto_id'];
$categoria = $_GET['art'];

include('conexion.php');

$consulta_existe = "SELECT * FROM carrito WHERE usuario_id = '$usuario_id' AND producto_id = '$producto_id'";

$resultado_existe = mysqli_query($database, $consulta_existe);

if(mysqli_num_rows($resultado_existe) > 0) {

    header("Location: ../maderas.php?art=$categoria&ya_existe=si");

} else {

    mysqli_query($database, "INSERT INTO carrito VALUES (NULL, '$usuario_id', '$producto_id', 1, NOW())");

    header("Location: ../maderas.php?art=$categoria&cargado=si");

}
?>