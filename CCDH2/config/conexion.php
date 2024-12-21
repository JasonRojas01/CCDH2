<?php
class conexionBD {
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    private static $db = 'proyectoambiente';

    public static function getConnection() {
        $conn = new mysqli(self::$host, self::$user, self::$password, self::$db);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        return $conn;
    }

    public static function execute($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        if (!$result) {
            die("Error en la consulta: " . $conn->error);
        }
        $conn->close();
        return $result;
    }

    public static function getData($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $data = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        $conn->close();
        return $data;
    }
}
?>
