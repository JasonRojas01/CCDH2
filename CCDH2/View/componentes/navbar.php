<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si la página actual es adminDashboard.php
$isAdminDashboard = strpos($_SERVER['PHP_SELF'], 'adminDashboard.php') !== false;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo isset($_SESSION['usuario']) ? '../View/userDashboard.php' : '../index.php'; ?>">CCDH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo isset($_SESSION['usuario']) ? '../View/userDashboard.php' : '../index.php'; ?>">
                        Inicio
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/View/sobrenosotros.php">Nuestro Equipo</a></li>
                <li class="nav-item"><a class="nav-link" href="/View/servicios.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="/View/contacto.php">Contacto</a></li>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <!-- Mostrar botón Admin Dashboard si el usuario es administrador y no está en adminDashboard.php -->
                    <?php if ($_SESSION['usuario']['rol'] == 1 && !$isAdminDashboard): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/View/adminDashboard.php">
                                Admin Dashboard
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- Mostrar perfil y cerrar sesión si el usuario está logueado -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="profileMenu" onmouseover="showPopup()" onmouseout="hidePopup()">
                            <img src="../View/Assets/img/profile-icon.png" alt="Perfil" width="30" height="30" class="rounded-circle" style="filter: invert(1);">
                        </a>
                        <div id="profilePopup" class="profile-popup shadow-lg p-3 bg-white rounded text-dark">
                            <p><strong>Nombre:</strong> <?php echo $_SESSION['usuario']['nombre']; ?></p>
                            <p><strong>Correo:</strong> <?php echo $_SESSION['usuario']['correo']; ?></p>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="logoutButton">
                            <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                        </a>
                    </li>
                <?php else: ?>
                    <!-- Ícono de login si no hay un usuario logueado -->
                    <li class="nav-item">
                        <a href="/View/login.php" class="nav-link text-center">
                            <i class="fas fa-user fa-lg"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Popup para confirmar el cierre de sesión -->
<div id="logoutPopup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1050;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; max-width: 90%;">
        <p style="margin: 0 0 15px; font-size: 16px; color: #333;">¿Estás seguro de que deseas cerrar sesión?</p>
        <button onclick="confirmLogout()" style="padding: 10px 15px; margin-right: 10px; border: none; border-radius: 5px; background-color: #0d6efd; color: white; cursor: pointer; font-size: 14px; transition: background-color 0.3s ease;">Confirmar</button>
        <button onclick="closeLogoutPopup()" style="padding: 10px 15px; border: none; border-radius: 5px; background-color: #ddd; color: #333; cursor: pointer; font-size: 14px; transition: background-color 0.3s ease;">Cancelar</button>
    </div>
</div>

<style>
    #profilePopup {
        position: absolute;
        top: 70px;
        right: 30px;
        display: none;
        z-index: 1050;
        width: 250px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        padding: 15px;
    }
    #profilePopup p {
        margin: 0;
        font-size: 14px;
    }
</style>

<script>
    // Mostrar y ocultar popup del perfil
    function showPopup() {
        const popup = document.getElementById("profilePopup");
        popup.style.display = "block";
    }

    function hidePopup() {
        const popup = document.getElementById("profilePopup");
        popup.style.display = "none";
    }

    // Mostrar el popup de confirmación de cierre de sesión
    function openLogoutPopup() {
        const logoutPopup = document.getElementById("logoutPopup");
        logoutPopup.style.display = "block";
    }

    // Cerrar el popup de confirmación de cierre de sesión
    function closeLogoutPopup() {
        const logoutPopup = document.getElementById("logoutPopup");
        logoutPopup.style.display = "none";
    }

    // Confirmar y redirigir para cerrar sesión
    function confirmLogout() {
        window.location.href = "../Controller/logout.php";
    }

    // Asignar evento al botón de cerrar sesión
    document.getElementById("logoutButton")?.addEventListener("click", (event) => {
        event.preventDefault();
        openLogoutPopup();
    });
</script>
