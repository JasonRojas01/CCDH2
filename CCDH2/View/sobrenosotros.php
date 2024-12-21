<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Equipo - Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
    <link href="/View/Assets/css/sobrenosotros.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-team text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Nuestro Equipo</h1>
            <p class="lead">Conoce a las personas comprometidas con la defensa de los derechos humanos</p>
        </div>
    </section>

    <!-- Directiva Principal -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center committee-header">Directiva Principal</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Director General" class="team-img shadow">
                        <h3 class="h4 mb-2">Juan Pérez</h3>
                        <p class="text-muted mb-3">Director General</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Comitiva de Mujeres -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center committee-header">Comitiva de Mujeres</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinadora" class="team-img shadow">
                        <h3 class="h4 mb-2">María González</h3>
                        <p class="text-muted mb-3">Coordinadora General</p>
                        <p class="small mb-3">Defensora de los derechos de la mujer con más de 15 años de experiencia</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Asesora Legal" class="team-img shadow">
                        <h3 class="h4 mb-2">Ana Martínez</h3>
                        <p class="text-muted mb-3">Asesora Legal</p>
                        <p class="small mb-3">Especialista en derecho familiar y protección contra la violencia de género</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinadora de Proyectos" class="team-img shadow">
                        <h3 class="h4 mb-2">Laura Sánchez</h3>
                        <p class="text-muted mb-3">Coordinadora de Proyectos</p>
                        <p class="small mb-3">Gestora de programas de empoderamiento y desarrollo comunitario</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Comitiva de Juventud -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center committee-header">Comitiva de Juventud</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinador Juvenil" class="team-img shadow">
                        <h3 class="h4 mb-2">Carlos Ruiz</h3>
                        <p class="text-muted mb-3">Coordinador Juvenil</p>
                        <p class="small mb-3">Líder de iniciativas juveniles y programas de participación ciudadana</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinadora de Voluntariado" class="team-img shadow">
                        <h3 class="h4 mb-2">Patricia López</h3>
                        <p class="text-muted mb-3">Coordinadora de Voluntariado</p>
                        <p class="small mb-3">Responsable de la red de jóvenes voluntarios y actividades comunitarias</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinador de Comunicación" class="team-img shadow">
                        <h3 class="h4 mb-2">Diego Morales</h3>
                        <p class="text-muted mb-3">Coordinador de Comunicación</p>
                        <p class="small mb-3">Encargado de redes sociales y estrategias de comunicación juvenil</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Comitiva de Educación -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center committee-header">Comitiva de Educación</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Directora Académica" class="team-img shadow">
                        <h3 class="h4 mb-2">Rosa Mendoza</h3>
                        <p class="text-muted mb-3">Directora Académica</p>
                        <p class="small mb-3">Doctora en Educación con especialidad en derechos humanos</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinador de Programas" class="team-img shadow">
                        <h3 class="h4 mb-2">Roberto Torres</h3>
                        <p class="text-muted mb-3">Coordinador de Programas</p>
                        <p class="small mb-3">Especialista en desarrollo curricular y metodologías educativas</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member text-center">
                        <img src="/api/placeholder/200/200" alt="Coordinadora de Investigación" class="team-img shadow">
                        <h3 class="h4 mb-2">Elena Vargas</h3>
                        <p class="text-muted mb-3">Coordinadora de Investigación</p>
                        <p class="small mb-3">Investigadora y desarrolladora de material educativo</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
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
