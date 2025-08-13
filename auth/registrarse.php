<!DOCTYPE html>
<html lang="es">

<?php include('../componentes/head.php'); ?>

<body id="inicio">
    
    <?php include('../componentes/header.php'); ?>

    <section class="iniciar-sesion" id="redir-register">

        <h2 class="titulo-iniciar-sesion">REGISTRARSE</h2>

        <form action="/madefroni/database/validar_user.php" method="POST" class="formulario-iniciar-sesion">

            <img src="/madefroni/imagenes/logo.png" alt="" id="logo-inicio-sesion">

            <input type="text" name="usuario" class="inputs-iniciar-sesion yboton"id="input-nombre-cliente" placeholder="Nombre Completo" required>

            <input type="password" name="contraseña" class="inputs-iniciar-sesion yboton" id="input-pw" placeholder="Ingrese su Contraseña" required>

            <input type="email" name="email" class="inputs-iniciar-sesion yboton" placeholder="Ingrese su Email" required>

            <button type="submit" id="btn-iniciar-sesion" class="yboton">Iniciar Sesión</button>
        </form>

        <?php

        if(isset($_GET['error']) && $_GET['error'] == 'pw_duped') {
            echo '<p id="txt-pw-existe"> Contraseña ya existente. Intente con otra. </p>';
        } else {
            if(isset($_GET['ok'])) {
                echo '<div class="mensaje-exito">
                        <p id="txt-cuenta-creada">¡Registro exitoso! Redirigiendo...</p>
                    </div>

                    <script>
                        setTimeout(() => {
                        window.location.href = "/madefroni/auth/iniciar-sesion.php?status=login#redir-login";
                        }, 3000);
                    </script>'; 
            }
        }

        ?>

    </section>

<?php include('../componentes/boton-top.php'); ?>
</body>

<?php include('../componentes/footer.php'); ?>

</html>