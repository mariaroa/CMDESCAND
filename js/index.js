// Obtener la URL actual
var currentUrl = window.location.href;

console.log(currentUrl)

// Obtener el elemento del menú de inicio
var menuInicio = document.getElementById('menu-inicio');

// Obtener el elemento del menú de "Acerca de"
var menuServicios = document.getElementById('menu-servicios'); 

// Obtener el elemento del menú de "Acerca de"
var menuAcercaDe = document.getElementById('menu-acerca-de');

// Obtener el elemento del menú de "Contacto"
var menuContacto = document.getElementById('menu-contacto');

// Comprobar si la página es la página de inicio
if (currentUrl === 'http://192.168.1.89:5500/index.html') {
    menuInicio.style.cssText = 'color: #61a375 !important;';
}
if (currentUrl === 'http://192.168.1.89:5500/servicios.html') {
    menuServicios.style.cssText = 'color: #61a375!important;';
}

// Comprobar si la página es la página "Acerca de"
if (currentUrl === 'https://www.ejemplo.com/acerca-de') {
  menuAcercaDe.style.cssText = 'color: #61a375!important';
}

// Comprobar si la página es la página "Contacto"
if (currentUrl === 'https://www.ejemplo.com/contacto') {
  menuContacto.style.cssText = 'color: #61a375!important';
}