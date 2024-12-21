<?php
function verificarAcceso($rolesPermitidos) {
    session_start();

    // Verificar si el usuario está en sesión
    if (!isset($_SESSION['usuario'])) {
        header('Location: ../index.php?error=Debe iniciar sesión.');
        exit();
    }

    $usuario = $_SESSION['usuario'];

    // Verificar si el rol del usuario está en los roles permitidos
    if (!in_array($usuario['rol'], (array)$rolesPermitidos)) {
        header('Location: ../index.php?error=Acceso denegado.');
        exit();
    }
}
?>
