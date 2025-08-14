<?php
session_start();

// Verificar que los datos lleguen por POST
if (!isset($_POST['usuario']) || !isset($_POST['password'])) {
    header("Location: ../auth/iniciar-sesion.php?error=datos_faltantes#redir_login");
    exit();
}

$usuario = $_POST['usuario'];
$password = $_POST['password'];

include('conexion.php');

// IMPORTANTE: Establecer charset UTF-8
mysqli_set_charset($database, "utf8");

// Usar prepared statements para evitar problemas de encoding y SQL injection
$consulta_admin = "SELECT * FROM admins WHERE usuario = ? AND contraseña = ?";
$stmt_admin = mysqli_prepare($database, $consulta_admin);
mysqli_stmt_bind_param($stmt_admin, "ss", $usuario, $password);
mysqli_stmt_execute($stmt_admin);
$resultado_admin = mysqli_stmt_get_result($stmt_admin);

if(mysqli_num_rows($resultado_admin) > 0) {
    
    $_SESSION['admin'] = $usuario;
    $_SESSION['admin_logueado'] = true;
    mysqli_stmt_close($stmt_admin);
    mysqli_close($database);
    header("Location: ../panel-admin.php");
    exit();

} else {

    // Verificar usuarios normales
    $consulta_user = "SELECT * FROM clientes WHERE usuario = ? AND contraseña = ?";
    $stmt_user = mysqli_prepare($database, $consulta_user);
    mysqli_stmt_bind_param($stmt_user, "ss", $usuario, $password);
    mysqli_stmt_execute($stmt_user);
    $resultado_user = mysqli_stmt_get_result($stmt_user);

    if(mysqli_num_rows($resultado_user) > 0) {

        $user_data = mysqli_fetch_assoc($resultado_user);

        $_SESSION['usuario'] = $usuario;
        $_SESSION['id_usuario'] = $user_data['id'];
        $_SESSION['usuario_logueado'] = true;
        
        mysqli_stmt_close($stmt_user);
        mysqli_close($database);
        header("Location: ../index.php");
        exit();

    } else {

        mysqli_stmt_close($stmt_admin);
        mysqli_stmt_close($stmt_user);
        mysqli_close($database);
        header("Location: ../auth/iniciar-sesion.php?datos_incorrectos#redir_login");
        exit();

    }
}
?>