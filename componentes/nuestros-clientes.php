<!-- ========== nuestros-clientes.php ========== -->
<?php
// Detectar ruta de imágenes
$images_path = file_exists('imagenes/hombre-cliente.png') ? 'imagenes/' : '../imagenes/';
?>

<section id="nuestros-clientes">

        <h2 id="opiniones-clientes">
            OPINIONES DE NUESTROS CLIENTES
        </h2>

        <div class="mi-carrusel">

            <div class="slides">

                <div class="slide activo">
                    <img src="<?php echo $images_path; ?>hombre-cliente.png" alt="" class="img-slide">
                    <img src="<?php echo $images_path; ?>5-stars.png" alt="" class="cinco-estrellas">
                    <h3 class="nombre-cliente">Dario Bartolucci</h3>
                    <p class="descripcion-cliente">Muy buena atención! Amplio stock y veriedad! Me llego la mercadería en tiempo y forma. Saludos desde cnel. Suárez</p>
                </div>

                <div class="slide">
                    <img src="<?php echo $images_path; ?>hombre-cliente-dos.png" alt="" class="img-slide">
                    <img src="<?php echo $images_path; ?>5-stars.png" alt="" class="cinco-estrellas">
                    <h3 class="nombre-cliente">Dino Maltauro</h3>
                    <p class="descripcion-cliente">Muy buena la atención y me llegaron los materiales en tiempo y forma, recomendable</p>
                </div>

                <div class="slide">
                    <img src="<?php echo $images_path; ?>hombre-cliente-tres.png" alt="" class="img-slide">
                    <img src="<?php echo $images_path; ?>5-stars.png" alt="" class="cinco-estrellas">
                    <h3 class="nombre-cliente">Maximo Giraudo</h3>
                    <p class="descripcion-cliente">Super recomendado , excelente calidad , cumplieron en tiempo y forma</p>
                </div>

                <div class="slide">
                    <img src="<?php echo $images_path; ?>mujer-cliente.png" alt="" class="img-slide">
                    <img src="<?php echo $images_path; ?>5-stars.png" alt="" class="cinco-estrellas">
                    <h3 class="nombre-cliente">Anita O'Mullane</h3>
                    <p class="descripcion-cliente">Genios!!!! Gracias por la eficacia en sus envíos</p>
                </div>

            </div>

            <button class="prev" onclick="cambiarSlide(-1)">←</button>
            <button class="next" onclick="cambiarSlide(1)">→</button>

        </div>

</section>