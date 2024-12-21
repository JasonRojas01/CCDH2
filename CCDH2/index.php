<?php if (isset($_GET['error'])): ?>
    <div id="error-alert" class="alert alert-danger text-center">
        <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
    <script>
        // Espera 10 segundos y luego oculta el mensaje de error
        setTimeout(function() {
            const alertElement = document.getElementById('error-alert');
            if (alertElement) {
                alertElement.style.display = 'none';
            }
        }, 3000); // 3 segundos (3000 milisegundos)
    </script>
<?php endif; ?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
        }
        
        .service-card {
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="./index.php">CCDH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../View/sobrenosotros.php">Nuestro Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../View/servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./View/contacto.php">Contacto</a>
                    </li>
                </ul>
                <!-- Login Icon -->
                <a href="/View/login.php" class="ms-3 text-light">
                    <i class="fas fa-user fa-lg"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center bg-primary" id="inicio">
        <div class="container">
            <h1 class="display-4 fw-bold">Centro Cristiano de Derechos Humanos</h1>
            <p class="lead">Defendiendo la dignidad humana desde una perspectiva cristiana</p>
            <a href="/View/contacto.html" class="btn btn-primary btn-lg mt-3">Contáctanos</a>
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
                            <a href="/View/apoyo.php" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-book service-icon mb-3"></i>
                            <h3 class="card-title h4">Educación</h3>
                            <p class="card-text">Programas de formación en derechos humanos y valores cristianos.</p>
                            <a href="/View/educacion.php" class="btn btn-outline-primary">Más información</a>
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
 

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Contacto</h5>
                    <p><i class="fas fa-phone me-2"></i> +1 234 567 890</p>
                    <p><i class="fas fa-envelope me-2"></i> contacto@ccdh.org</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Calle Principal #123, Ciudad</p>
                </div>
                
                <div class="col-md-4">
                    <h5>Síguenos</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <small>&copy; 2024 Centro Cristiano de Derechos Humanos. Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>

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