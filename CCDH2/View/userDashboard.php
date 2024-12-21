<?php
require_once '../Controller/auth.php';
verificarAcceso([0, 1]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="../View/Assets/css/userDashboard.css" rel="stylesheet">
</head>
<body>
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero text-center bg-primary" id="inicio">
        <div class="container">
            <h1 class="display-4 fw-bold">Centro Cristiano de Derechos Humanos</h1>
            <p class="lead">Defendiendo la dignidad humana desde una perspectiva cristiana</p>
            <a href="./contacto.php" class="btn btn-primary btn-lg mt-3">Contáctanos</a>
        </div>
    </section>

    <!-- Servicios -->
    <section class="py-5 bg-light" id="servicios">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-balance-scale service-icon mb-3"></i>
                            <h3 class="card-title h4">Asesoría Legal</h3>
                            <p class="card-text">Brindamos apoyo legal gratuito en casos de violación de derechos humanos.</p>
                            <a href="/View/asesoria.php" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-hands-helping service-icon mb-3"></i>
                            <h3 class="card-title h4">Apoyo Humanitario</h3>
                            <p class="card-text">Asistencia directa a personas en situación de vulnerabilidad.</p>
                            <a href="./apoyo.php" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-book service-icon mb-3"></i>
                            <h3 class="card-title h4">Educación</h3>
                            <p class="card-text">Programas de formación en derechos humanos y valores cristianos.</p>
                            <a href="./educacion.php" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Nosotros -->
    <section class="py-5" id="nosotros">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Nuestra Misión</h2>
                    <p class="lead">Somos una organización cristiana comprometida con la defensa y promoción de los derechos humanos, inspirados en los valores del amor, la justicia y la dignidad humana.</p>
                    <p>Trabajamos incansablemente para:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> Defender los derechos fundamentales</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Promover la justicia social</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Apoyar a los más vulnerables</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="/api/placeholder/600/400" alt="Nuestro equipo" class="img-fluid rounded shadow">
                </div>
            </div>
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
                                    <div class="invalid-feedback">
                                        Por favor ingrese su nombre
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="_replyto" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un email válido
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="mensaje" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su mensaje
                                    </div>
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
 

    <?php include '../View/componentes/footer.php'; ?>

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
