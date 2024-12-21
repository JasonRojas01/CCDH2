<?php
require_once '../View/componentes/sessionHandler.php'; // Validación de sesión
 
include('../Controller/serviciosController.php');
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre'] && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['tipo_caso']) && !empty($_POST['descripcion_caso']))) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'tipo_caso' => $_POST['tipo_caso'],
            'descripcion_caso' => $_POST['descripcion_caso']
        );
 
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $tipo_caso = $_POST['tipo_caso'];
        $mensaje = "Te enviamos este correo para confirmar la solicitud por uno de nuestros servicios";
        $header = "From: josugamer0108@gmail.com\r\n" .
        "Replay-To: noreplay@example.com\r\n";
 
        $correo = @mail($email, $tipo_caso, $mensaje, $header);
        if ($correo) {
            echo "<h3>Correo Enviado exitosamente!</h3>";
        } else {
            echo "<h3>Error al enviar el correo</h3>";
        }
 
        serviciosController::ctl_intoAsesoriasUser($data);
    }
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesoría Legal - Centro Cristiano de Derechos Humanos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/View/Assets/css/userDashboard.css" rel="stylesheet">
    <link href="/View/Assets/css/asesoria.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include '../View/componentes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-legal text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Asesoría Legal Gratuita</h1>
            <p class="lead">Defendiendo tus derechos fundamentales con experiencia y dedicación</p>
            <a href="#contacto" class="btn btn-primary btn-lg mt-3">Solicitar Asesoría</a>
        </div>
    </section>

    <!-- Áreas de Práctica -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Áreas de Práctica</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-users service-icon mb-3"></i>
                            <h3 class="card-title h4">Derechos Humanos</h3>
                            <p class="card-text">Protección y defensa de derechos fundamentales, libertades civiles y dignidad humana.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-home service-icon mb-3"></i>
                            <h3 class="card-title h4">Derecho Familiar</h3>
                            <p class="card-text">Asistencia en casos de violencia doméstica, custodia y protección familiar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-gavel service-icon mb-3"></i>
                            <h3 class="card-title h4">Derecho Laboral</h3>
                            <p class="card-text">Defensa en casos de discriminación laboral y violaciones de derechos laborales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proceso de Asesoría -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Proceso de Asesoría</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="process-step text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <h3 class="m-0">1</h3>
                        </div>
                        <h4>Contacto Inicial</h4>
                        <p>Llena el formulario o llámanos para una primera evaluación de tu caso.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <h3 class="m-0">2</h3>
                        </div>
                        <h4>Evaluación</h4>
                        <p>Analizamos tu caso y determinamos la mejor estrategia legal.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <h3 class="m-0">3</h3>
                        </div>
                        <h4>Asesoría</h4>
                        <p>Te brindamos asesoría legal personalizada y orientación sobre tus derechos.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <h3 class="m-0">4</h3>
                        </div>
                        <h4>Seguimiento</h4>
                        <p>Acompañamiento continuo durante todo el proceso legal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solicitar Asesoría -->
    <section class="py-5" id="contacto">
        <div class="container">
            <h2 class="text-center mb-5">Solicitar Asesoría Legal</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form  method="POST" class="needs-validation" novalidate>
                                <div class="mb-4">
                                    <label for="nombre" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control"  name="nombre" required>
                                    <div class="invalid-feedback">Por favor ingrese su nombre completo</div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control"  name="email" required>
                                    <div class="invalid-feedback">Por favor ingrese un email válido</div>
                                </div>
                                <div class="mb-4">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control"  name="telefono" required>
                                    <div class="invalid-feedback">Por favor ingrese su teléfono</div>
                                </div>
                                <div class="mb-4">
                                    <label for="tipo_caso" class="form-label">Tipo de caso</label>
                                    <select class="form-select"  name="tipo_caso" required>
                                        <option value="">Seleccione una opción</option>
                                        <option value="derechos_humanos">Derechos Humanos</option>
                                        <option value="familiar">Derecho Familiar</option>
                                        <option value="laboral">Derecho Laboral</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                    <div class="invalid-feedback">Por favor seleccione el tipo de caso</div>
                                </div>
                                <div class="mb-4">
                                    <label for="mensaje" class="form-label">Descripción del caso</label>
                                    <textarea class="form-control"  name="descripcion_caso" rows="4" required></textarea>
                                    <div class="invalid-feedback">Por favor describa brevemente su caso</div>
                                </div>
                                <input type="hidden" name="_gotcha" style="display:none">
                                <input type="hidden" name="_subject" value="Nueva solicitud de asesoría legal - CCDH">
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
</body>
</html>
