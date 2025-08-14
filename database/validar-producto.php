<?php

include('conexion.php');

$categoria = $_POST['producto-madera'];
$tipo = $_POST['tipo-madera'];
$precio = $_POST['precio-madera'];
$stock = $_POST['stock-madera'];
$descripcion = $_POST['descripcion-madera'];

$imagen_nombre = '';

if (isset($_FILES['imagen-madera']) && $_FILES['imagen-madera']['error'] == 0) {

    $uploadDir = '../uploads/productos/';

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = uniqid() . '_' . $_FILES['imagen-madera']['name'];

    $imagen_ruta_completa = $uploadDir . $fileName;

    $imagen_nombre = $fileName;

    move_uploaded_file($_FILES['imagen-madera']['tmp_name'], $imagen_ruta_completa);

}

$consulta_bd = mysqli_query($database, "INSERT INTO productos VALUES(NULL, '$imagen_nombre','$categoria', '$precio', '$descripcion', '$tipo', '$stock')");

header("Location: ../panel-admin.php?value=producto-agregado#redir-admin-panel");

?>