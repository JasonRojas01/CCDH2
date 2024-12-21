<?php
require_once '../View/componentes/sessionHandler.php';
 
require_once('../Controller/voluntariadoController.php');
 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre'] && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['disponibilidad']) && !empty($_POST['area_interes']) && !empty($_POST['descripcion']))) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'disponibilidad' => $_POST['disponibilidad'],
            'area_interes' => $_POST['area_interes'],
            'descripcion' => $_POST['descripcion']
         
        );
 
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $area_interes = $_POST['area_interes'];
        $mensaje = "Te enviamos este correo para confirmar la solicitud para realizar voluntariado";
        $header = "From: josugamer0108@gmail.com\r\n" .
        "Replay-To: noreplay@example.com\r\n";
 
        $correo = @mail($email, $area_interes, $mensaje, $header);
        if ($correo) {
            echo "<h3>Correo Enviado exitosamente!</h3>";
        } else {
            echo "<h3>Error al enviar el correo</h3>";
        }
 
        voluntariadoController::ctl_intoVoluntariadoUser($data);
    }
}
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apoyo Humanitario - Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/View/Assets/css/apoyo.css" rel="stylesheet">
    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-humanitarian text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Apoyo Humanitario</h1>
            <p class="lead">Brindando esperanza y asistencia a quienes más lo necesitan</p>
            <div class="mt-4">
                <a href="#donar" class="btn btn-primary btn-lg mx-2">Donar Ahora</a>
                <a href="#voluntariado" class="btn btn-outline-light btn-lg mx-2">Ser Voluntario</a>
            </div>
        </div>
    </section>

    <!-- Estadísticas de Impacto -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm stat-card">
                        <div class="card-body text-center">
                            <h3 class="display-4 fw-bold text-primary">1000+</h3>
                            <p class="text-muted mb-0">Familias Asistidas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm stat-card">
                        <div class="card-body text-center">
                            <h3 class="display-4 fw-bold text-primary">50+</h3>
                            <p class="text-muted mb-0">Comunidades Alcanzadas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm stat-card">
                        <div class="card-body text-center">
                            <h3 class="display-4 fw-bold text-primary">200+</h3>
                            <p class="text-muted mb-0">Voluntarios Activos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm stat-card">
                        <div class="card-body text-center">
                            <h3 class="display-4 fw-bold text-primary">5000+</h3>
                            <p class="text-muted mb-0">Ayudas Entregadas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Áreas de Apoyo -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nuestras Áreas de Apoyo</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card impact-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-utensils service-icon mb-3"></i>
                            <h3 class="card-title h4">Alimentación</h3>
                            <p class="card-text">Distribución de alimentos y apoyo nutricional a familias en situación de vulnerabilidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card impact-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-heartbeat service-icon mb-3"></i>
                            <h3 class="card-title h4">Salud</h3>
                            <p class="card-text">Asistencia médica básica y apoyo para acceder a servicios de salud.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card impact-card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-home service-icon mb-3"></i>
                            <h3 class="card-title h4">Vivienda</h3>
                            <p class="card-text">Apoyo para mejoras básicas de vivienda y situaciones de emergencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voluntariado -->
    <section class="py-5" id="voluntariado">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Únete como Voluntario</h2>
                    <p class="lead">Tu tiempo y dedicación pueden hacer la diferencia en la vida de muchas personas.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Participa en proyectos comunitarios</li>
                        <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Ayuda en la distribución de ayuda</li>
                        <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Colabora en eventos especiales</li>
                        <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Comparte tus habilidades</li>
                    </ul>
                    <a href="#contacto" class="btn btn-primary">Inscríbete como Voluntario</a>
                </div>
                <div class="col-lg-6">
                    <img src="/api/placeholder/600/400" alt="Voluntarios en acción" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Donaciones -->
    <section class="py-5 bg-light" id="donar">
        <div class="container">
            <h2 class="text-center mb-5">Realiza tu Donación</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h4>Tipos de Donaciones</h4>
                                <p>Puedes apoyar nuestra labor de diferentes formas:</p>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-money-bill text-primary me-2"></i>Donación Monetaria</h5>
                                            <p class="card-text">Transferencia bancaria o depósito a nuestra cuenta:</p>
                                            <ul class="list-unstyled">
                                                <li>Banco: XXXXX</li>
                                                <li>Cuenta: XXXXX</li>
                                                <li>CLABE: XXXXX</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-box-open text-primary me-2"></i>Donación en Especie</h5>
                                            <p class="card-text">Aceptamos:</p>
                                            <ul class="list-unstyled">
                                                <li>• Alimentos no perecederos</li>
                                                <li>• Ropa y calzado</li>
                                                <li>• Artículos de higiene</li>
                                                <li>• Material escolar</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Contacto -->
   <section class="py-5" id="contacto">
        <div class="container">
            <h2 class="text-center mb-5">Contacto para Voluntariado</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form  method="POST" class="needs-validation" novalidate>
                                <div class="mb-4">
                                    <label for="nombre" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su nombre completo
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un email válido
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su teléfono
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="disponibilidad" class="form-label">Disponibilidad</label>
                                    <select class="form-select" id="disponibilidad" name="disponibilidad" required>
                                        <option value="">Seleccione su disponibilidad</option>
                                        <option value="fines_de_semana">Fines de semana</option>
                                        <option value="entre_semana">Entre semana</option>
                                        <option value="flexible">Horario flexible</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione su disponibilidad
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="areas_interes" class="form-label">Áreas de interés</label>
                                    <select class="form-select" id="areas_interes" name="area_interes" required>
                                        <option value="">Seleccione un área</option>
                                        <option value="alimentacion">Alimentación</option>
                                        <option value="salud">Salud</option>
                                        <option value="vivienda">Vivienda</option>
                                        <option value="educacion">Educación</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione un área de interés
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="mensaje" class="form-label">¿Por qué te gustaría ser voluntario?</label>
                                    <textarea class="form-control" id="mensaje" name="descripcion" rows="4" required></textarea>
                                    <div class="invalid-feedback">
                                        Por favor comparte tus motivaciones
                                    </div>
                                </div>
                                <input type="text" name="_gotcha" style="display:none">
                                <input type="hidden" name="_subject" value="Nueva solicitud de voluntariado - CCDH">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Enviar solicitud</button>
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
