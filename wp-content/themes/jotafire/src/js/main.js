const menuHamburguer = document.querySelector('.menu-hamburguer');

menuHamburguer.addEventListener('click', (event) => {
  const headerDesktop = document.querySelector('.header__content');

  event.preventDefault()
  event.stopPropagation()

  menuHamburguer.classList.toggle('active');
  headerDesktop.classList.toggle('active');
})


/** CARREGAR MAIS POSTS */
const cardsItems = document.querySelectorAll('.content-card__item');
const loadmore = document.getElementById('loadmore');
const initialNumberOfPostDisplay = 5;

const showOnlyTheFirstPosts = (number) => {
  const firstPosts = Array.from(cardsItems).filter((item, index ) => {
    if (index <= number) {
      item.classList.add('active');
    }
    return
  })
  return firstPosts;
}

showOnlyTheFirstPosts(initialNumberOfPostDisplay)

let listItem = initialNumberOfPostDisplay + 1

if (listItem >= cardsItems.length) {
  loadmore.remove();
}

loadmore.addEventListener('click', () => {

  Array.from(cardsItems).forEach( item => {
    if (item.classList.contains('active')) {
      return listItem++
    }
  })

  if (listItem >= cardsItems.length) {
    loadmore.remove();
  }

  return showOnlyTheFirstPosts(initialNumberOfPostDisplay + 6);
})