<?php
session_start();

// Detectar si estamos en una subcarpeta para las rutas
$images_path = file_exists('imagenes/logo.png') ? 'imagenes/' : '../imagenes/';
$root_path = file_exists('index.php') ? '' : '../';
$auth_path = file_exists('auth/iniciar-sesion.php') ? 'auth/' : '../auth/';
$components_path = file_exists('componentes/carrito-compras.php') ? 'componentes/' : '';
?>

<header>
    <nav>
        <div id="encabezado">
            <a href="<?php echo $root_path; ?>index.php"><img src="<?php echo $images_path; ?>logo.png" alt=""></a>

            <ul id="navbarr">
                <li><a href="<?php echo $root_path; ?>index.php">INICIO</a></li>
                <li><a href="<?php echo $root_path; ?>index.php#nosotros">NOSOTROS</a></li>
                <li><a href="<?php echo $root_path; ?>index.php#section-nuestros-productos">PRODUCTOS</a></li>
                <li><a href="<?php echo $root_path; ?>index.php#nuestros-clientes">CLIENTES</a></li>
            </ul>

            <?php if (isset($_SESSION['admin_logueado']) && $_SESSION['admin_logueado']): ?>
                <div class="box_usuario_log">
                    <h3 class="txt_welcome_user">Bienvenido </h3>
                    <p class="txt_name_user_log"><?php echo $_SESSION['admin'] ?></p>
                    <a href="<?php echo $auth_path; ?>cerrar_sesion.php" class="btn-cerrar-sesion">Cerrar Sesión</a>
                </div>
                <div class="admin-box">
                    <a href="<?php echo $root_path; ?>panel-admin.php#redir-admin-panel" class="txt-admin-panel-go">IR AL PANEL DE ADMINISTRADOR</a>
                </div>

            <?php else: 
                if (isset($_SESSION['usuario_logueado']) && $_SESSION['usuario_logueado']): ?>
                    
                    <div class="box_usuario_log">
                        <h3 class="txt_welcome_user">BIENVENIDO </h3>
                        <p class="txt_name_user_log"><?php echo $_SESSION['usuario'] ?></p>
                        <a href="<?php echo $auth_path; ?>cerrar_sesion.php" class="btn-cerrar-sesion">Cerrar Sesión</a>
                        <a href="<?php echo $components_path; ?>carrito-compras.php#carr-com-redir" class="btn-cerrar-sesion">Ver mi Carrito</a>
                    </div>
                
                <?php else: ?>

            <div class="registro-inicio-sesion">
                <div class="inicio-sesion">
                    <p>Ya sos usuario?</p>
                    <a href="<?php echo $auth_path; ?>iniciar-sesion.php#redir_login" class="ingresa-ahora">Inicia Sesión</a>
                </div>

                <div class="registrarse">
                    <p>No sos usuario?</p>
                    <a href="<?php echo $auth_path; ?>registrarse.php#redir-register" class="registrarse-ahora">Registrate ahora!</a>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        
        </div>

        <div id="imagen-principal">
            <img src="<?php echo $images_path; ?>pagina-principal.png" alt="">
        </div>
    </nav>
</header>