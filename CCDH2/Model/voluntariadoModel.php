<?php

require_once('../config/conexion.php');

class serviciosModel
{

    public static function into_voluntariadosAdmin($data)
    {
        try {

            $sql = "'" . $data['nombre'] . "'," .
                "'" . $data['email'] . "'," .
                "'" . $data['telefono'] . "'," .
                "'" . $data['disponibilidad'] . "'," . 
                "'" . $data['area_interes'] . "'," .
                "'" . $data['descripcion'] . "'";
            $resultado = conexionBD::execute("call sp_into_voluntariados($sql);");

?>
            <script>
                window.location.href = '../View/crudVoluntariado.php';
            </script>
        <?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public static function into_voluntariadosUser($data)
    {
        try {

            $sql = "'" . $data['nombre'] . "'," .
                "'" . $data['email'] . "'," .
                "'" . $data['telefono'] . "'," .
                "'" . $data['disponibilidad'] . "'," . 
                "'" . $data['area_interes'] . "'," .
                "'" . $data['descripcion'] . "'";
            $resultado = conexionBD::execute("call sp_into_voluntariados($sql);");

?>
            <script>
                window.location.href = '../View/apoyo.php';
            </script>
        <?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function get_voluntariados()
    {
        try {


            return conexionBD::getData("call sp_get_voluntariados;");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function get_voluntariado($id)
    {
        try {


            return conexionBD::getData("select * from voluntariado where id_voluntariado=$id");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function updateVoluntariado($data)
    {
        try {

            $sql = "'" . $data['nombre'] . "'," .
                "'" . $data['email'] . "'," .
                "'" . $data['telefono'] . "'," .
                "'" . $data['disponibilidad'] . "'," . 
                "'" . $data['area_interes'] . "'," .
                "'" . $data['descripcion'] . "'," .
                "'" . $data['id'] . "'";
            $resultado = conexionBD::execute("call sp_update_voluntariado($sql);");

        ?>
            <script>
                window.location.href = '../View/crudVoluntariado.php';
            </script>
        <?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public static function deleteVoluntariado($data)
    {
        try {
            $sql = 
                "" . $data['id'] . "";
            $resultado = conexionBD::execute("call sp_delete_voluntariado($sql);");

        ?>
            <script>
                window.location.href = '../View/crudVoluntariado.php';
            </script>
<?php


            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

