<?php
// Detectar ruta de imágenes
$images_path = file_exists('imagenes/compra-online.png') ? 'imagenes/' : '../imagenes/';
?>

<section id="porque-nosotros">
        <h2 id="titulo-pq-ns">¿Porque nuestros clientes nos eligen?</h2>

        <div id="caja-pq-nosotros">
            <div class="pq-ns" id="pq-nos1">
                <img src="<?php echo $images_path; ?>compra-online.png" alt="" class="img-pq-ns">
                <h3 class="titulos-pq-ns">Tu Madera, Tu Proyecto, Nuestra Pasión</h3>
                <p class="parrafos-pq-ns"> Desde atención personalizada hasta entrega directa, somos tu aliado en cada paso. Comprá fácil desde nuestra web y hacé realidad tus ideas con respaldo profesional.</p>
            </div>
            <div class="pq-ns" id="pq-nos2">
                <img src="<?php echo $images_path; ?>descuento.png" alt="" class="img-pq-ns">
                <h3 class="titulos-pq-ns">Comprá Online con Confianza y Rapidez</h3>
                <p class="parrafos-pq-ns">Accedé a nuestro catálogo completo, promociones exclusivas y ofertas especiales solo para clientes registrados. ¡Todo desde la comodidad de tu casa!</p>
            </div>
            <div class="pq-ns" id="pq-nos3">
                <img src="<?php echo $images_path; ?>cliente.png" alt="" class="img-pq-ns">
                <h3 class="titulos-pq-ns">Beneficios Reales para Clientes Reales</h3>
                <p class="parrafos-pq-ns">Registrate y accedé a descuentos especiales, promociones mensuales y una atención al cliente que realmente te escucha.</p>
            </div>
            <div class="pq-ns" id="pq-nos4">
                <img src="<?php echo $images_path; ?>confianza.png" alt="" class="img-pq-ns">
                <h3 class="titulos-pq-ns">Madera de Calidad, Servicio de Primera</h3>
                <p class="parrafos-pq-ns">Somos más que una maderera: somos una experiencia de compra segura, cómoda y con precios que te hacen volver.</p>
            </div>
        </div>

</section>