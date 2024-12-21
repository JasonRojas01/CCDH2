function validarFormulario() {
    const usuario = document.getElementById('usuario').value.trim();
    const password = document.getElementById('password').value.trim();
    if (!usuario || !password) {
        alert('Debe completar todos los campos.');
        return false;
    }
    return true;
}

// Mostrar notificación si hay mensaje en los parámetros de la URL
const urlParams = new URLSearchParams(window.location.search);
const mensaje = urlParams.get('mensaje');
const error = urlParams.get('error');
const popup = document.getElementById('notificationPopup');

if (mensaje || error) {
    popup.style.display = 'block';
    popup.className = mensaje ? 'success' : 'error';
    popup.textContent = mensaje || error;

    // Cerrar automáticamente después de 3 segundos y redirigir
    setTimeout(() => {
        popup.style.display = 'none';
        if (mensaje) {
            window.location.href = '../View/userDashboard.php'; // Redirige si es necesario
        } else {
            window.location.href = '/View/login.php';
        }
    }, 1000);
}