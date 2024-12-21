<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../View/Assets/css/login.css">
    <style>
        #notificationPopup {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            display: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 15px;
            min-width: 300px;
        }

        #notificationPopup.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        #notificationPopup.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="login-container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg">
            <h3 class="text-center mb-4">Inicio de Sesión</h3>
            <form action="../Controller/procesar-login.php" method="POST" onsubmit="return validarFormulario()">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
            <div class="text-center mt-3">
                <p>No tienes cuenta? <a href="../View/register.php" class="text-decoration-none" style="color: #007bff;">Registrarse</a></p>
            </div>
            <div class="text-center mt-3">
                <a href="javascript:history.back()" class="btn btn-secondary w-100">Regresar</a>
            </div>
        </div>
    </div>

    <!-- Popup de notificación -->
    <div id="notificationPopup" class=""></div>

    <!-- Js Popup de notificación del login-->
    <script src="../View/Assets/js/login.js"></script>
</body>
</html>
