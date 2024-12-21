// Detectar parámetros de la URL
const urlParams = new URLSearchParams(window.location.search);
const mensaje = urlParams.get('mensaje');
const error = urlParams.get('error');

// Mostrar el modal con el mensaje correspondiente
if (mensaje || error) {
    const modalMessage = document.getElementById('modalMessage');
    const modal = new bootstrap.Modal(document.getElementById('notificationModal'));

    if (mensaje) {
        modalMessage.innerHTML = `<div class="alert alert-success">${mensaje}</div>`;
    } else if (error) {
        modalMessage.innerHTML = `<div class="alert alert-danger">${error}</div>`;
    }

    modal.show();

    // Ocultar el modal automáticamente después de 3 segundos
    setTimeout(() => {
        modal.hide();
        // Redirigir si hay éxito
        if (mensaje) {
            window.location.href = 'login.php';
        }
    }, 2000);
}