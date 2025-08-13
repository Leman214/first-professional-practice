<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];

include('conexion.php');

try {
    mysqli_query($database, "INSERT INTO clientes VALUES (NULL, '$usuario', '$contraseña', '$email')");
    header("Location: /madefroni/auth/registrarse.php?ok#redir-register");
} catch (mysqli_sql_exception $error) {
    header("Location: /madefroni/auth/registrarse.php?error=pw_duped#redir-register");
}

?>