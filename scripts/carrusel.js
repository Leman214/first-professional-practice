let slideActual = 0;
const slides = document.querySelectorAll('.slide');

function mostrarSlide(n) {
    slides.forEach(slide => slide.classList.remove('activo'));
    slides[n].classList.add('activo');
}

function cambiarSlide(direccion) {
    slideActual += direccion;
    if (slideActual >= slides.length) slideActual = 0;
    if (slideActual < 0) slideActual = slides.length - 1;
    mostrarSlide(slideActual);

    clearInterval(autoSlide);
    autoSlide = setInterval(() => cambiarSlide(1), 3000);
}
