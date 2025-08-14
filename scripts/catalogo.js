// Obtener la base URL del sitio automáticamente
const baseURL = window.location.origin + window.location.pathname.replace(/\/[^\/]*$/, '/');

document.querySelectorAll('button[data-art]').forEach(function(boton) {
    boton.addEventListener('click', function() {
        const art = this.getAttribute('data-art');
        
        // Construir URL completa dinámicamente
        fetch(`${baseURL}database/cargar-productos-ajax.php?art=${art}`)
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-productos').innerHTML = html;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
});