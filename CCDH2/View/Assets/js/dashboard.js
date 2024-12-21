document.addEventListener("DOMContentLoaded", () => {
    const menuItems = document.querySelectorAll('#dashboard-menu .nav-link');
    const mainContent = document.getElementById('main-content');

    menuItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();

            // Resaltar la opción activa
            menuItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');

            // Cargar el contenido dinámicamente
            const view = this.getAttribute('data-view');
            fetch(`/View/${view}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Error HTTP: ${response.status}`);
                    }
                    return response.text();
                })
                .then(html => {
                    mainContent.innerHTML = html;
                })
                .catch(error => {
                    mainContent.innerHTML = '<p>Error al cargar la vista.</p>';
                    console.error('Error al cargar la vista:', error);
                });
        });
    });
});
