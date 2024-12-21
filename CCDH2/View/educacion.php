<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación - Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
    <link href="/View/Assets/css/educacion.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-education text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Educación en Derechos Humanos</h1>
            <p class="lead">Formando líderes comprometidos con la justicia y la dignidad humana</p>
            <a href="#programas" class="btn btn-primary btn-lg mt-3 me-2">Ver Programas</a>
            <a href="#inscripcion" class="btn btn-outline-light btn-lg mt-3">Inscríbete</a>
        </div>
    </section>

    <!-- Programas Educativos -->
    <section class="py-5" id="programas">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Programas</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card program-card h-100 shadow">
                        <img src="/api/placeholder/400/200" class="card-img-top" alt="Programa básico">
                        <div class="card-body">
                            <h3 class="card-title h4">Programa Básico</h3>
                            <p class="card-text">Introducción a los derechos humanos fundamentales y su importancia en la sociedad actual.</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check text-primary me-2"></i>Duración: 4 semanas</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Modalidad: Presencial/Virtual</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Certificado incluido</li>
                            </ul>
                            <a href="#inscripcion" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card program-card h-100 shadow">
                        <img src="/api/placeholder/400/200" class="card-img-top" alt="Programa intermedio">
                        <div class="card-body">
                            <h3 class="card-title h4">Programa Intermedio</h3>
                            <p class="card-text">Profundización en temas específicos y análisis de casos prácticos.</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check text-primary me-2"></i>Duración: 8 semanas</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Modalidad: Presencial/Virtual</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Material didáctico incluido</li>
                            </ul>
                            <a href="#inscripcion" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card program-card h-100 shadow">
                        <img src="/api/placeholder/400/200" class="card-img-top" alt="Programa avanzado">
                        <div class="card-body">
                            <h3 class="card-title h4">Programa Avanzado</h3>
                            <p class="card-text">Formación especializada para activistas y defensores de derechos humanos.</p>
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check text-primary me-2"></i>Duración: 12 semanas</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Modalidad: Presencial</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Prácticas incluidas</li>
                            </ul>
                            <a href="#inscripcion" class="btn btn-outline-primary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodología -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nuestra Metodología</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-book-reader feature-icon mb-3"></i>
                        <h3 class="h5">Aprendizaje Activo</h3>
                        <p>Participación directa en discusiones y análisis de casos.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-users feature-icon mb-3"></i>
                        <h3 class="h5">Trabajo en Equipo</h3>
                        <p>Desarrollo de proyectos colaborativos y debates grupales.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-laptop feature-icon mb-3"></i>
                        <h3 class="h5">Recursos Digitales</h3>
                        <p>Acceso a plataforma virtual y materiales multimedia.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-certificate feature-icon mb-3"></i>
                        <h3 class="h5">Certificación</h3>
                        <p>Reconocimiento oficial al completar el programa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Inscripción -->
    <section class="py-5 bg-light" id="inscripcion">
        <div class="container">
            <h2 class="text-center mb-5">Inscríbete a Nuestros Programas</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form action="https://formspree.io/f/xwpklgeq" method="POST" class="needs-validation" novalidate>
                                <div class="mb-4">
                                    <label for="nombre" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <div class="invalid-feedback">Por favor ingrese su nombre completo</div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="_replyto" required>
                                    <div class="invalid-feedback">Por favor ingrese un email válido</div>
                                </div>
                                <div class="mb-4">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                    <div class="invalid-feedback">Por favor ingrese su teléfono</div>
                                </div>
                                <div class="mb-4">
                                    <label for="programa" class="form-label">Programa de interés</label>
                                    <select class="form-select" id="programa" name="programa" required>
                                        <option value="">Seleccione un programa</option>
                                        <option value="basico">Programa Básico</option>
                                        <option value="intermedio">Programa Intermedio</option>
                                        <option value="avanzado">Programa Avanzado</option>
                                    </select>
                                    <div class="invalid-feedback">Por favor seleccione un programa</div>
                                </div>
                                <div class="mb-4">
                                    <label for="modalidad" class="form-label">Modalidad preferida</label>
                                    <select class="form-select" id="modalidad" name="modalidad" required>
                                        <option value="">Seleccione una modalidad</option>
                                        <option value="presencial">Presencial</option>
                                        <option value="virtual">Virtual</option>
                                    </select>
                                    <div class="invalid-feedback">Por favor seleccione una modalidad</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Enviar inscripción</button>
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
</body>
</html>
