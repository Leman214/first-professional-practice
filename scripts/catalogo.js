document.querySelectorAll('button[data-art]').forEach(function(boton) {
    boton.addEventListener('click', function() {
        const art = this.getAttribute('data-art');
        
        // Opción 1: con backticks
        fetch(`/madefroni/database/cargar-productos-ajax.php?art=${art}`)
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-productos').innerHTML = html;
            })
            .catch(error => {
                console.error('Error:', error);
            });

    });
});