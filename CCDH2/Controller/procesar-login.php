<?php
require_once '../Model/UsuarioModel.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    if (empty($usuario) || empty($password)) {
        header('Location: ../View/login.php?error=Debe ingresar usuario y contraseña.');
        exit();
    }

    $user = UsuarioModel::login($usuario, $password);

    if ($user) {
        $_SESSION['usuario'] = $user;

        if ($user['rol'] == 1) {
            header('Location: ../View/login.php?mensaje=Bienvenido, administrador.');
        } else {
            header('Location: ../View/login.php?mensaje=Inicio de sesión exitoso.');
        }
        exit();
    } else {
        header('Location: ../View/login.php?error=Usuario o contraseña incorrectos.');
        exit();
    }
} else {
    header('Location: ../View/login.php?error=Acceso no permitido.');
    exit();
}
