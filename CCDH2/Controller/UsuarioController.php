<?php
require_once '../Model/UsuarioModel.php';

class UsuarioController {
    public static function agregarUsuario($nombre, $telefono, $correo, $usuario, $password) {
        return UsuarioModel::registrar($nombre, $telefono, $correo, $usuario, $password);
    }

    public static function eliminarUsuario($idUsuario) {
        $conn = conexionBD::getConnection();
        $sql = "DELETE FROM usuarios WHERE idUsuario = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("i", $idUsuario);
            return $stmt->execute();
        }
        return false;
    }

    public static function modificarUsuario($idUsuario, $nombre, $telefono, $correo, $rol) {
        $conn = conexionBD::getConnection();
        $sql = "UPDATE usuarios SET nombre = ?, telefono = ?, correo = ?, rol = ? WHERE idUsuario = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssii", $nombre, $telefono, $correo, $rol, $idUsuario);
            return $stmt->execute();
        }
        return false;
    }

    public static function obtenerUsuarios() {
        return UsuarioModel::obtenerTodos();
    }

    public static function obtenerUsuarioPorId($idUsuario) {
        // Obtener conexión usando mysqli
        $conn = conexionBD::getConnection();
        
        // Preparar la consulta SQL
        $sql = "SELECT * FROM usuarios WHERE idUsuario = ?";
        
        // Preparar el statement
        $stmt = $conn->prepare($sql);
        
        // Verificar si la preparación fue exitosa
        if (!$stmt) {
            error_log("Error preparando la consulta: " . $conn->error);
            return null;
        }
        
        // Vincular el parámetro (idUsuario es un entero)
        $stmt->bind_param("i", $idUsuario); // "i" es el tipo para integer
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Obtener el resultado
        $resultado = $stmt->get_result();
        
        // Verificar si se encontró el usuario
        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();  // Devolver el usuario encontrado
        } else {
            return null;  // No se encontró ningún usuario
        }
    }
    
    
}
?>
