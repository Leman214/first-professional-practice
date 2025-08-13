<?php
session_start();
include('conexion.php');

if (isset($_POST['item_id']) && !empty($_POST['item_id'])) {
    $item_id = intval($_POST['item_id']);
    $usuario_id = $_SESSION['id_usuario'];
    
    // Consulta para borrar el item del carrito
    $consulta_borrar = "DELETE FROM carrito WHERE id = '$item_id' AND usuario_id = '$usuario_id'";
    
    if (mysqli_query($database, $consulta_borrar)) {
        // Verificar si se eliminó algún registro
        if (mysqli_affected_rows($database) > 0) {
            // Redirigir de vuelta al carrito con mensaje de éxito
            header("Location: /madefroni/componentes/carrito-compras.php?mensaje=eliminado");
        } else {
            // No se encontró el item o no pertenece al usuario
            header("Location: /madefroni/componentes/carrito-compras.php?error=no_encontrado");
        }
    } else {
        // Error en la consulta
        header("Location: /madefroni/componentes/carrito-compras.php?error=bd");
    }
} else {
    // No se recibió item_id válido
    header("Location: /madefroni/componentes/carrito-compras.php?error=datos");
}

mysqli_close($database);
?>