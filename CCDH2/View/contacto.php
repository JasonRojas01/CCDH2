<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
    <link href="/View/Assets/css/contacto.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-contact text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Contáctanos</h1>
            <p class="lead">Estamos aquí para escucharte y ayudarte</p>
        </div>
    </section>

    <!-- Contacto -->
    <section class="py-5 bg-light" id="contacto">
        <div class="container">
            <h2 class="text-center mb-5">Contáctanos</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form action="https://formspree.io/f/xwpklgeq" method="POST" class="needs-validation" novalidate>
                                <div class="mb-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <div class="invalid-feedback">Por favor ingrese su nombre</div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="_replyto" required>
                                    <div class="invalid-feedback">Por favor ingrese un email válido</div>
                                </div>
                                <div class="mb-4">
                                    <label for="mensaje" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                                    <div class="invalid-feedback">Por favor ingrese su mensaje</div>
                                </div>
                                <!-- Campos anti-spam -->
                                <input type="text" name="_gotcha" style="display:none">
                                <input type="hidden" name="_subject" value="Nuevo mensaje de contacto del CCDH">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Enviar mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../View/componentes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación del formulario
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
