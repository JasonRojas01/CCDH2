<?php
require_once '../Model/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $resultado = UsuarioModel::registrar($nombre, $telefono, $correo, $usuario, $password);

    if ($resultado) {
        // Enviar parámetro de éxito
        header('Location: ../View/register.php?mensaje=Registro exitoso. Por favor inicie sesión.');
    } else {
        // Enviar parámetro de error
        header('Location: ../View/register.php?error=Error al registrar usuario. Inténtelo de nuevo.');
    }
    exit();
}
?>
