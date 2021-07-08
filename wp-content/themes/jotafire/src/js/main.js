const menuHamburguer = document.querySelector('.menu-hamburguer');

menuHamburguer.addEventListener('click', (event) => {
  const headerDesktop = document.querySelector('.header__content');

  event.preventDefault()
  event.stopPropagation()

  menuHamburguer.classList.toggle('active');
  headerDesktop.classList.toggle('active');
})
