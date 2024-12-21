<?php
require_once('../Controller/voluntariadoController.php');
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión

$id = $_GET['id'];

$voluntariado = voluntariadoController::ctl_getVoluntariado($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre'] && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['disponibilidad']) && !empty($_POST['area_interes']) && !empty($_POST['descripcion']))) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'disponibilidad' => $_POST['disponibilidad'],
            'area_interes' => $_POST['area_interes'],
            'descripcion' => $_POST['descripcion'],
            'id' => $_POST['id']
        );

        voluntariadoController::ctl_updateVoluntariado($data);
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
        <h5 class="col-4 p-3 m-auto">Modificar Voluntariado</h5>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>"/>
        <?php

        foreach ($voluntariado as $voluntariado) {
        ?>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $voluntariado['nombre'] ?>" required="true" />
                </div>
                <div class="mb-3">
                    <label for="apellidos">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $voluntariado['email'] ?>" required="true" />
                </div>
                <div class="mb-3">
                    <label for="username">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="<?= $voluntariado['telefono'] ?>" required="true" />
                </div>
                <div class="mb-3">
                    <label for="password">Disponibilidad</label>
                    <select class="form-select" id="disponibilidad" type="text" value="<?= $voluntariado['disponibilidad'] ?>" name="disponibilidad" required>
                        <option value="">Seleccione su disponibilidad</option>
                        <option value="fines_de_semana">Fines de semana</option>
                        <option value="entre_semana">Entre semana</option>
                        <option value="flexible">Horario flexible</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password">Areas de interes</label>
                    <select class="form-select" id="area_interes" type="text" name="area_interes" value="<?= $voluntariado['area_interes'] ?>" required>
                        <option value="">Seleccione un área</option>
                        <option value="alimentacion">Alimentación</option>
                        <option value="salud">Salud</option>
                        <option value="vivienda">Vivienda</option>
                        <option value="educacion">Educación</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Descripcion</label>
                    <textarea class="form-control" id="Descripcion" name="descripcion" type="text" value="<?= $voluntariado['descripcion'] ?>" rows="4" required></textarea>
                    <div class="invalid-feedback">
                        Por favor comparte tus motivaciones
                    </div>
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