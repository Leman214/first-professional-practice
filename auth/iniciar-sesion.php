<!DOCTYPE html>
<html lang="es">

<?php include('../componentes/head.php'); ?>

<body id="inicio">
    
    <?php include('../componentes/header.php'); ?>

    <section class="iniciar-sesion" id="redir-login">

        <h2 class="titulo-iniciar-sesion">INICIAR SESIÓN</h2>

        <form action="../database/validar_login.php" method="POST" class="formulario-iniciar-sesion" id="redir_login">

            <img src="../imagenes/logo.png" alt="" id="logo-inicio-sesion">

            <input type="text" name="usuario" class="inputs-iniciar-sesion yboton" id="input-nombre-cliente" placeholder="Nombre Completo" required>

            <input type="password" name="password" class="inputs-iniciar-sesion yboton" id="input-pw" placeholder="Ingrese su Contraseña" required>

            <button type="submit" id="btn-iniciar-sesion" class="yboton">Iniciar Sesión</button>
        </form>

        <?php

        if(isset($_GET['datos_incorrectos'])) {
            echo '<p> Datos Incorrectos.</p>';
        }

        ?>

    </section>

<?php include('../componentes/boton-top.php'); ?>
</body>

<?php include('../componentes/footer.php'); ?>

</html>