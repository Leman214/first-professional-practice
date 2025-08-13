<!DOCTYPE html>
<html lang="es">

<?php include('componentes/head.php'); ?>

<body id="inicio">
    
    <?php include('componentes/header.php'); ?>

    <section class="maderas-catalogo">

        <ul class="lista-tipos-madera">
            <li class="items-tipos-madera"><button class="botones-catalogo-maderas" data-art="1">POSTES REDONDOS</button></li>
            <li class="items-tipos-madera"><button class="botones-catalogo-maderas" data-art="2">POSTES CUADRADOS</button></li>
            <li class="items-tipos-madera"><button class="botones-catalogo-maderas" data-art="3">VARILLAS</button></li>
            <li class="items-tipos-madera"><button class="botones-catalogo-maderas" data-art="4">DURMIENTES</button></li> 
        </ul>

        <div id="contenido-productos" class="caja-productos-maderas">
            <?php 
            include('database/conexion.php');
            ?>

            <div class="caja-productos-maderas">
                <?php include('database/consulta_catalogo_maderas.php'); ?>
            </div>
        
    </section>

<?php include('componentes/boton-top.php'); ?>
<script src="/madefroni/scripts/catalogo.js"></script>
</body>

<?php include('componentes/footer.php'); ?>

</html>