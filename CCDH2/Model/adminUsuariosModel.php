<?php
require_once '../config/conexion.php';

class UsuarioModel {
    public static function obtenerTodos() {
        $sql = "SELECT idUsuario, nombre, telefono, correo, rol FROM usuarios";
        return conexionBD::getData($sql);
    }
}
?>
