<?php
require_once '../Controller/auth.php';
verificarAcceso(1);
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
            <!-- Importar el menú -->
            <?php include '../View/componentes/menu.php'; ?>


            </main>
        </div>
    </div>
    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Bienvenido al Dashboard</h1>
            <!-- Botón de modo oscuro/claro -->
            <button id="toggle-mode" class="btn btn-outline-secondary">
                <i class="fas fa-moon"></i> Oscuro
            </button>
        </div>
        <div class="content">
            <p>Selecciona una opción del menú para gestionar los recursos del sistema.</p>
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



</body>

</html>