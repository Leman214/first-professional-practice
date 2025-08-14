<!DOCTYPE html>
<html lang="es">

<?php include('componentes/head.php'); ?>

<body>
    
    <?php include('componentes/header.php'); ?>

    <section class="admin-panel" id="redir-admin-panel">

        <div class="box-admin-panel">

            <h2>PANEL DE ADMINISTRADOR</h2>

            <h3 class="txt-que-hacer">¿Que quieres hacer?</h3>

            <div class="box-links-panel">
                <button onclick="mostrarFormulario('catalogo')" class="links-panel">Editar catálogo</button>
                <button onclick="mostrarFormulario('perfil')" class="links-panel">Editar mi perfil</button>
            </div>

            <div id="form-catalogo" style="display: none;">

                <form action="database/validar-producto.php" class="form-catalogo-adminpanel" method="POST" enctype="multipart/form-data">

                    <label for="imagen-madera">Imagen</label>
                    <input type="file" name="imagen-madera" id="imagen-madera" class="form-cat-adm" accept="image/*" required>

                    <label for="tipo-producto-madera">Producto</label>
                    <select name="producto-madera" id="tipo-producto-madera" class="form-cat-adm">
                        <option value="postes-redondos">Postes Redondos</option>
                        <option value="postes-cuadrados">Postes Cuadrados</option>
                        <option value="varillas">Varillas</option>
                        <option value="durmientes">Durmientes</option>
                    </select>

                    <label for="tipo-madera">Tipo de Madera</label>
                    <select name="tipo-madera" id="tipo-madera" class="form-cat-adm">
                        <option value="Pino">Pino</option>
                        <option value="Quebracho">Quebracho</option>
                        <option value="Eucalipto">Eucalipto</option>
                    </select>

                    <label for="precio-madera">Precio $</label>
                    <input type="number" name="precio-madera" id="precio-madera" class="form-cat-adm" required>

                    <label for="stock-madera">Stock</label>
                    <input type="number" name="stock-madera" id="stock-madera" class="form-cat-adm">

                    <label for="descrpcion-madera">Descripcion</label>
                    <textarea name="descripcion-madera" id="descripcion-madera" rows="4" maxlength="500" class="form-cat-adm" required></textarea>

                    <button type="submit" class="links-panel pruebax">Agregar Producto</button>

                </form>

            </div>

            <div id="form-perfil" style="display: none;">

                <form action="">
                    <input type="text" name="" id="" placeholder="prueba perfil">
                </form>

            </div>
        
        </div>

        <?php
                
        if(isset($_GET['value']) && $_GET['value'] == 'producto-agregado') {

            echo '<p>Producto agregado exitosamente</p>';

        }

        ?>

    </section>

    <script src="scripts/mostrarFormulario.js"></script>
<?php include('componentes/boton-top.php'); ?>
</body>

<?php include('componentes/footer.php'); ?>

</html>