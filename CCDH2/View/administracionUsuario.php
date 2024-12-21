<?php
require_once '../Controller/UsuarioController.php';
require_once '../Controller/auth.php';
verificarAcceso(1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion'])) {
        switch ($_POST['accion']) {
            case 'agregar':
                UsuarioController::agregarUsuario($_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['usuario'], $_POST['password']);
                break;
            case 'modificar':
                UsuarioController::modificarUsuario($_POST['idUsuario'], $_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['rol']);
                break;
            case 'eliminar':
                UsuarioController::eliminarUsuario($_POST['idUsuario']);
                break;
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

$usuarios = UsuarioController::obtenerUsuarios();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
            <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Administración de Usuarios</h1>
                </div>

                <div class="container">
                    <!-- Formulario para agregar usuario -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Agregar Usuario</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <input type="hidden" name="accion" value="agregar">
                                <div class="mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo">Correo</label>
                                    <input type="email" name="correo" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                            </form>
                        </div>
                    </div>

                    <!-- Tabla de usuarios -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($usuarios)): ?>
                                <?php foreach ($usuarios as $usuario): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($usuario['idUsuario']) ?></td>
                                        <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                                        <td><?= htmlspecialchars($usuario['telefono']) ?></td>
                                        <td><?= htmlspecialchars($usuario['correo']) ?></td>
                                        <td><?= htmlspecialchars($usuario['rol']) ?></td>
                                        <td>

                                            <!-- Modificar -->
                                            <a href="modificarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-warning btn-sm">Modificar</a>

                                            <!-- Eliminar -->
                                            <form method="POST" class="d-inline">
                                                <input type="hidden" name="accion" value="eliminar">
                                                <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">No se encontraron usuarios.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

</html>