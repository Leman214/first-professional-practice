<!DOCTYPE html>
<html lang="es">

<?php include('head.php'); ?>

<body id="inicio">
    
    <?php include('header.php'); ?>

    <section class="carrito-compras">

        <h2 class="carrito-titulo" id="carr-com-redir">Carrito de Compra</h2>

        <div class="caja-carro">

            <?php include('../database/cargar-carrito.php') ?>

            <div class="boton-pagar">
                <a href="/madefroni/componentes/pagar.php">IR A PAGAR</a>
            </div>

        </div>
        
    </section>

<?php include('boton-top.php'); ?>
</body>

<?php include('footer.php'); ?>

</html>