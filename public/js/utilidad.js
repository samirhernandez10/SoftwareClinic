// Obtener la lista de elementos del menú
const menuItems = document.querySelectorAll('nav ul li');

// Agregar un evento "click" a cada elemento del menú
menuItems.forEach(item => {
  item.addEventListener('click', () => {
    // Obtener el ID del elemento de la sección correspondiente
    const sectionId = item.querySelector('a').getAttribute('href');
    // Obtener el elemento de la sección correspondiente
    const section = document.querySelector(sectionId);
    // Desplazarse hasta el elemento de la sección correspondiente
    section.scrollIntoView({ behavior: 'smooth' });
  });
});