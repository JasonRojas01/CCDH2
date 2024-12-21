<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
require_once('../Controller/serviciosController.php');

$id = $_GET['id'];

$asesoria = serviciosController::ctl_getAsesoria($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre'] && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['tipo_caso'])  && !empty($_POST['descripcion_caso']))) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'tipo_caso' => $_POST['tipo_caso'],
            'descripcion_caso' => $_POST['descripcion_caso'],
            'id' => $_POST['id']
        );

        serviciosController::ctl_updateAsesoria($data);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1e81c1920d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>

    <form
        method="POST" class="col-4 p-3 m-auto"
        enctype="multipart/form-data">
        <h5 class="col-4 p-3 m-auto">Modificar Asesoria</h5>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" >
        <?php 
        
        foreach($asesoria As $asesoria){
        ?>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $asesoria['nombre'] ?>"  required="true"/>
            </div>
            <div class="mb-3">
                <label for="apellidos">email</label>
                <input type="text" class="form-control" name="email" value="<?= $asesoria['email'] ?>" required="true" />
            </div>
            <div class="mb-3">
                <label for="username">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?= $asesoria['telefono'] ?>" required="true" />
            </div>
            <div class="mb-3">
                <label for="password">Tipo de caso</label>
                <input type="text" class="form-control" name="tipo_caso" value="<?= $asesoria['tipo_caso'] ?>" required="true" />
            </div>
            <div class="mb-3">
                <label for="password">Descripcion del caso</label>
                <input type="text" class="form-control" name="descripcion_caso" value="<?= $asesoria['descripcion_caso'] ?>" required="true" />
            </div>

        </div>
        <?php
        }
        ?>
        <div class="modal-footer">
            <button name="btnRegistrar" class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>