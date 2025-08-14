<?php
// Detectar ruta de imágenes
$images_path = file_exists('imagenes/madera-muestra.png') ? 'imagenes/' : '../imagenes/';
$root_path = file_exists('maderas.php') ? '' : '../';
?>

<section id="section-nuestros-productos">
    <h2 id="titulo-ns-productos">Nuestros Productos</h2>
    <div id="nuestros-productos">
        <div class="productos-muestra">
            <a href="<?php echo $root_path; ?>maderas.php" target="_blank"><img src="<?php echo $images_path; ?>madera-muestra.png" alt=""></a>
            <p class="txt-productos-prueba">MADERAS</p>
        </div>

        <div class="productos-muestra">
            <a href="<?php echo $root_path; ?>alambres.php" target="_blank"><img src="<?php echo $images_path; ?>alambres-prueba.png" alt=""></a>
            <p class="txt-productos-prueba">ALAMBRES</p>
        </div>

        <div class="productos-muestra">
            <a href="<?php echo $root_path; ?>herrajes.php" target="_blank"><img src="<?php echo $images_path; ?>herrajes-prueba.png" alt="" id="herrajes"></a>
            <p class="txt-productos-prueba">HERRAJES</p>
        </div>
    </div>
</section>