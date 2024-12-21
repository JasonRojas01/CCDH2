<?php
require_once '../Controller/UsuarioController.php';
require_once '../Controller/auth.php';
verificarAcceso(1);

// Verificar si se ha pasado un idUsuario
if (!isset($_GET['idUsuario']) || empty($_GET['idUsuario'])) {
    header("Location: administracionUsuario.php");
    exit;
}

$idUsuario = intval($_GET['idUsuario']);
$usuario = UsuarioController::obtenerUsuarioPorId($idUsuario);

if (!$usuario) {
    header("Location: administracionUsuario.php");
    exit;
}

// Procesar el formulario de modificación
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $rol = $_POST['rol'] ?? '';

    UsuarioController::modificarUsuario($idUsuario, $nombre, $telefono, $correo, $rol);
    header("Location: administracionUsuario.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/View/Assets/css/admin.css">
</head>

<body>
    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Modificar Usuario</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" value="<?= htmlspecialchars($usuario['telefono']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?= htmlspecialchars($usuario['correo']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="rol" class="form-label">Rol</label>
                                <select name="rol" id="rol" class="form-select" required>
                                    <option value="1" <?= $usuario['rol'] === 'Admin' ? 'selected' : '' ?>>Admin</option>
                                    <option value="0" <?= $usuario['rol'] === 'Usuario' ? 'selected' : '' ?>>Usuario</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                            <a href="administracionUsuario.php" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
