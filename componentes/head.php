<?php
// Verificar si estamos en una subcarpeta
$styles_path = file_exists('styles/global.css') ? 'styles/' : '../styles/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $styles_path; ?>global.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>header.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>nosotros.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>porque-nosotros.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>productos-muestra.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>nuestros-clientes.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>footer.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>maderas.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>inicio-sesion.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>panel-admin.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>carrito.css">
    <link rel="stylesheet" href="<?php echo $styles_path; ?>pagar.css">

    <title>Madefroni</title>
</head>