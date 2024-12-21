<?php
require_once '../config/conexion.php';

class UsuarioModel {
    public static function registrar($nombre, $telefono, $correo, $usuario, $password) {
        // Generar hash seguro de la contraseña
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Preparar consulta SQL
        $sql = "INSERT INTO usuarios (nombre, telefono, correo, usuario, password, rol) VALUES (?, ?, ?, ?, ?, 0)";
        
        // Obtener conexión
        $conn = conexionBD::getConnection();
        
        // Preparar statement
        $stmt = $conn->prepare($sql);
        
        // Verificar preparación del statement
        if (!$stmt) {
            error_log("Error preparando statement: " . $conn->error);
            return false;
        }
        
        // Bindear parámetros
        $stmt->bind_param("sssss", $nombre, $telefono, $correo, $usuario, $hashedPassword);
        
        // Ejecutar y verificar
        $resultado = $stmt->execute();
        
        if (!$resultado) {
            error_log("Error al registrar usuario: " . $stmt->error);
            return false;
        }
        
        return true;
    }

    public static function login($usuario, $password) {
        // Obtener conexión
        $conn = conexionBD::getConnection();
        
        // Preparar consulta
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            error_log("Error al preparar la consulta: " . $conn->error);
            return null;
        }

        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        
        // Obtener resultado
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Registrar detalles para depuración
            error_log("Usuario encontrado: " . print_r($user, true));
            error_log("Contraseña ingresada: $password");
            error_log("Hash en la base de datos: " . $user['password']);
            
            // Verificar contraseña
            if (password_verify($password, $user['password'])) {
                error_log("Contraseña válida.");
                return $user;
            } else {
                error_log("Contraseña incorrecta.");
            }
        } else {
            error_log("Usuario no encontrado.");
        }
        
        return null;
    }

    public static function obtenerTodos() {
        $sql = "SELECT idUsuario, nombre, telefono, correo, rol FROM usuarios";
        return conexionBD::getData($sql);
    }
}
?>