<?php

require_once('../config/conexion.php');

class serviciosModel
{

    public static function into_AsesoriasAdmin($data)
    {
        try {

            $sql = "'" . $data['nombre'] . "'," .
                "'" . $data['email'] . "'," .
                "'" . $data['telefono'] . "'," .
                "'" . $data['tipo_caso'] . "'," . 
                "'" . $data['descripcion_caso'] . "'";
            $resultado = conexionBD::execute("call sp_into_asesorias($sql);");
            


?>
            <script>
                window.location.href = '../View/adminDashboard.php';
            </script>
        <?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function into_AsesoriasUser($data)
    {
        try {

            $sql = "'" . $data['nombre'] . "'," .
                "'" . $data['email'] . "'," .
                "'" . $data['telefono'] . "'," .
                "'" . $data['tipo_caso'] . "'," . 
                "'" . $data['descripcion_caso'] . "'";
            $resultado = conexionBD::execute("call sp_into_asesorias($sql);");
            


?>
            <script>
                window.location.href = '../View/adminDashboard.php';
            </script>
        <?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function get_Asesorias()
    {
        try {


            return conexionBD::getData("call sp_get_asesorias;");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function get_Asesoria($id)
    {
        try {


            return conexionBD::getData("select * from asesorias where id_asesoria=$id");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function updateAsesoria($data)
    {
        try {

            $sql = "'" . $data['nombre'] . "'," .
                "'" . $data['email'] . "'," .
                "'" . $data['telefono'] . "'," .
                "'" . $data['tipo_caso'] . "'," .
                "'" . $data['descripcion_caso'] . "'," .
                "'" . $data['id'] . "'";
            $resultado = conexionBD::execute("call sp_update_asesoria($sql);");

        ?>
            <script>
                window.location.href = '../View/adminDashboard.php';
            </script>
        <?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public static function deleteAsesoria($data)
    {
        try {
            $sql = 
                "" . $data['id'] . "";
            $resultado = conexionBD::execute("call sp_delete_asesorias($sql);");

        ?>
            <script>
                window.location.href = '../View/adminDashboard.php';
            </script>
<?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

