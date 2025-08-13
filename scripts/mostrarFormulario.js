function mostrarFormulario(tipo) {

    document.getElementById('form-catalogo').style.display = 'none';
    document.getElementById('form-perfil').style.display = 'none';

    document.getElementById('form-' + tipo).style.display = 'block';

}