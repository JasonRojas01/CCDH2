<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
require_once('../Controller/serviciosController.php');

$allAsesorias = serviciosController::ctl_getAsesorias();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre'] && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['tipo_caso']) && !empty($_POST['descripcion_caso']))) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'tipo_caso' => $_POST['tipo_caso'],
            'descripcion_caso' => $_POST['descripcion_caso']
        );

        serviciosController::ctl_intoAsesoriasAdmin($data);
    }
}

if (!empty($_GET["id"])) {

    $data = array(
        'id' => $_GET['id']
    );

    serviciosController::ctl_deleteAsesoria($data);
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
                    <h1 class="h2">Administracion de Asesorias</h1>
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
                                    data-bs-target="#agregarAsesoria">
                                    <i class="fas fa-plus"></i> agregar cliente
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div id="agregarAsesoria"
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
                                            <label for="password">Tipo de caso</label>
                                            <input type="text" class="form-control" name="tipo_caso" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Descripcion del caso</label>
                                            <input type="text" class="form-control" name="descripcion_caso" required="true" />
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
                                <th scope="col">TIPO DE CASO</th>
                                <th scope="col">DESCRIPCION</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($allAsesorias as $asesorias) {

                            ?>
                                <tr>
                                    <th scope="row"><?= $asesorias['id_asesoria'] ?></th>
                                    <td><?= $asesorias['nombre'] ?></td>
                                    <td><?= $asesorias['email'] ?></td>
                                    <td><?= $asesorias['telefono'] ?></td>
                                    <td><?= $asesorias['tipo_caso'] ?></td>
                                    <td><?= $asesorias['descripcion_caso'] ?></td>
                                    <td>
                                        <a href="../View/asesoriasModificar.php?id=<?= $asesorias['id_asesoria'] ?>" class="btn btn-small btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="../View/crudAsesorias.php?id=<?= $asesorias['id_asesoria'] ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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