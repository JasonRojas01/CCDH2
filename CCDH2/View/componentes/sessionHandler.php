<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Tiempo máximo de inactividad (en segundos)
$tiempoExpiracion = 1800; // 30 minutos

// Si el usuario está logueado, verificar la inactividad
if (isset($_SESSION['usuario'])) {
    if (isset($_SESSION['ultimaActividad']) && (time() - $_SESSION['ultimaActividad']) > $tiempoExpiracion) {
        // La sesión ha expirado
        session_unset();
        session_destroy();
        header("Location: /index.php?error=Sesion expirada, inicia sesión nuevamente.");
        exit();
    }
    // Actualizar tiempo de última actividad
    $_SESSION['ultimaActividad'] = time();
}
