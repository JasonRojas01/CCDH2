<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
require_once('../Controller/voluntariadoController.php');

$allVoluntariados = voluntariadoController::ctl_getVoluntariados();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre'] && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['disponibilidad']) && !empty($_POST['area_interes']) && !empty($_POST['descripcion']))) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'disponibilidad' => $_POST['disponibilidad'],
            'area_interes' => $_POST['area_interes'],
            'descripcion' => $_POST['descripcion']

        );

        voluntariadoController::ctl_intoVoluntariadosAdmin($data);
    }
}

if (!empty($_GET["id"])) {

    $data = array(
        'id' => $_GET['id']
    );

    voluntariadoController::ctl_deleteVoluntariado($data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/View/Assets/css/admin.css">
</head>

<body>

    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar py-3">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/View/administracionUsuario.php">
                                <span class="bi bi-house"></span> Dashboard Usuario
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../View/crudAsesorias.php">
                                <span class="bi bi-people"></span> Servicios Solicitados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../View/crudVoluntariado.php">
                                <span class="bi bi-people"></span> Voluntariado
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Administracion de Voluntariados</h1>
                    <!-- Botón de modo oscuro/claro -->
                    <button id="toggle-mode" class="btn btn-outline-secondary">
                        <i class="fas fa-moon"></i> Oscuro
                    </button>
                </div>
                <div class="content">
                    <p>Selecciona una opción del menú para gestionar los recursos del sistema.</p>
                </div>

                <!-- boton para aparecer una pantalla modal para agreagr asesorias -->
                <section class="py-4 mb-4 ">
                    <div class="container d-flex justify-content-end ">
                        <div class="row">
                            <div class="col-md-3">
                                <button
                                    type="button"
                                    class="btn btn-primary btn-block"
                                    data-bs-toggle="modal"
                                    data-bs-target="#agregarVoluntariado">
                                    <i class="fas fa-plus"></i> agregar cliente
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div id="agregarVoluntariado"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-info text-white">
                                    <h5 class="modal-title">Agregar Cliente</h5>
                                    <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form
                                    method="POST" class="was-validated"
                                    enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="apellidos">Email</label>
                                            <input type="text" class="form-control" name="email" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="username">Telefono</label>
                                            <input type="text" class="form-control" name="telefono" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Disponibilidad</label>
                                            <select class="form-select" id="disponibilidad" name="disponibilidad" required>
                                                <option value="">Seleccione su disponibilidad</option>
                                                <option value="fines_de_semana">Fines de semana</option>
                                                <option value="entre_semana">Entre semana</option>
                                                <option value="flexible">Horario flexible</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Areas de interes</label>
                                            <select class="form-select" id="area_interes" name="area_interes" required>
                                                <option value="">Seleccione un área</option>
                                                <option value="alimentacion">Alimentación</option>
                                                <option value="salud">Salud</option>
                                                <option value="vivienda">Vivienda</option>
                                                <option value="educacion">Educación</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mensaje" class="form-label">Descripcion</label>
                                            <textarea class="form-control" id="Descripcion" name="descripcion" rows="4" required></textarea>
                                            <div class="invalid-feedback">
                                                Por favor comparte tus motivaciones
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button name="btnRegistrar" class="btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="col-8 p-4">
                    <table class="table ">
                        <thead class="bg-info">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">TELEFONO</th>
                                <th scope="col">DISPONIBILIDAD</th>
                                <th scope="col">AREAS DE INTERES</th>
                                <th scope="col">DESCRIPCION</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($allVoluntariados as $voluntariados) {

                            ?>
                                <tr>
                                    <th scope="row"><?= $voluntariados['id_voluntariado'] ?></th>
                                    <td><?= $voluntariados['nombre'] ?></td>
                                    <td><?= $voluntariados['email'] ?></td>
                                    <td><?= $voluntariados['telefono'] ?></td>
                                    <td><?= $voluntariados['disponibilidad'] ?></td>
                                    <td><?= $voluntariados['area_interes'] ?></td>
                                    <td><?= $voluntariados['descripcion'] ?></td>
                                    <td>
                                        <a href="../View/voluntariadoModificar.php?id=<?= $voluntariados['id_voluntariado'] ?>" class="btn btn-small btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="../View/crudVoluntariado.php?id=<?= $voluntariados['id_voluntariado'] ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../View/componentes/footer.php'; ?>

    <!-- Scripts -->
    <script src="/View/Assets/js/popupPerfil.js"></script>
    <script src="/View/Assets/js/logoutConfirmation.js"></script>
    <script src="/View/Assets/js/darkMode.js"></script>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>