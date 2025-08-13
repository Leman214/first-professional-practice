<?php
session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

include('conexion.php');

$consulta_admin = "SELECT * FROM admins WHERE usuario = '$usuario' AND contraseña = '$contraseña'";

$resultado_admin = mysqli_query($database, $consulta_admin);

if(mysqli_num_rows($resultado_admin) > 0) {

    $_SESSION['admin'] = $usuario;
    $_SESSION['admin_logueado'] = true;
    header("Location: ../panel-admin.php");

} else {

    $consulta_user = "SELECT * FROM clientes WHERE usuario = '$usuario' AND contraseña = '$contraseña'";

    $resultado_user = mysqli_query($database, $consulta_user);

    if(mysqli_num_rows($resultado_user) > 0) {

        $user_data = mysqli_fetch_assoc($resultado_user);

        $_SESSION['usuario'] = $usuario;
        $_SESSION['id_usuario'] = $user_data['id'];
        $_SESSION['usuario_logueado'] = true;
        header("Location: ../index.php");

    } else {

        header("Location: ../auth/iniciar-sesion.php?datos_incorrectos#redir_login");

    }

}

?>