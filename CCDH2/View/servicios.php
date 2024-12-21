<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios - Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
    <link href="/View/Assets/css/servicios.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-services text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Nuestros Servicios</h1>
            <p class="lead">Comprometidos con la defensa y promoción de los derechos humanos a través de servicios integrales</p>
        </div>
    </section>

    <!-- Servicios Principales -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Asesoría Legal -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow">
                        <img src="/api/placeholder/400/250" class="service-image" alt="Asesoría Legal">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-balance-scale service-icon"></i>
                                <h3 class="card-title h4">Asesoría Legal</h3>
                            </div>
                            <p class="card-text">Brindamos apoyo legal gratuito y profesional en casos de violación de derechos humanos, con un equipo de abogados especializados.</p>
                            <ul class="feature-list mt-4">
                                <li><i class="fas fa-check text-primary me-2"></i> Consultoría legal gratuita</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Representación en casos de violación de derechos</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Acompañamiento en procesos legales</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Documentación de casos</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Mediación y resolución de conflictos</li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="/View/asesoria.php" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apoyo Humanitario -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow">
                        <img src="/api/placeholder/400/250" class="service-image" alt="Apoyo Humanitario">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-hands-helping service-icon"></i>
                                <h3 class="card-title h4">Apoyo Humanitario</h3>
                            </div>
                            <p class="card-text">Proporcionamos asistencia directa a personas en situación de vulnerabilidad, trabajando en conjunto con comunidades y organizaciones locales.</p>
                            <ul class="feature-list mt-4">
                                <li><i class="fas fa-check text-primary me-2"></i> Distribución de alimentos</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Atención médica básica</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Apoyo psicosocial</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Programas de emergencia</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Ayuda a refugiados</li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="/View/apoyo.php" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Educación -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow">
                        <img src="/api/placeholder/400/250" class="service-image" alt="Educación">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-book service-icon"></i>
                                <h3 class="card-title h4">Educación</h3>
                            </div>
                            <p class="card-text">Desarrollamos programas educativos para promover el conocimiento y la defensa de los derechos humanos desde una perspectiva cristiana.</p>
                            <ul class="feature-list mt-4">
                                <li><i class="fas fa-check text-primary me-2"></i> Talleres y seminarios</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Programas de capacitación</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Material educativo</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Certificaciones</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Investigación y publicaciones</li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="/View/educacion.php" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Servicios Adicionales -->
     <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Servicios Complementarios</h2>
            <div class="row g-4">
                <!-- Investigación y Documentación -->
                <div class="col-md-6">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-search service-icon me-3"></i>
                                <h3 class="h5 mb-0">Investigación y Documentación</h3>
                            </div>
                            <p>Realizamos investigaciones sobre violaciones de derechos humanos y documentamos casos para su seguimiento y denuncia.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Investigación de campo</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Documentación de casos</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Informes especializados</li>
                            </ul>
                        </div>
                    </div>
                </div>
 
                <!-- Advocacy y Comunicación -->
                <div class="col-md-6">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-bullhorn service-icon me-3"></i>
                                <h3 class="h5 mb-0">Comunicación</h3>
                            </div>
                            <p>Promovemos la sensibilización y concientización sobre derechos humanos a través de diversos canales.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Campañas de sensibilización</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Comunicación estratégica</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Eventos de promoción</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">¿Necesitas nuestra ayuda?</h2>
                    <p class="lead mb-4">Estamos aquí para apoyarte. Contáctanos y un miembro de nuestro equipo te atenderá lo antes posible.</p>
                    <a href="contacto.php" class="btn btn-primary btn-lg me-2">Contactar ahora</a>
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
