/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (() => {

eval("const menuHamburguer = document.querySelector('.menu-hamburguer');\r\n\r\nmenuHamburguer.addEventListener('click', (event) => {\r\n  const headerDesktop = document.querySelector('.header__content');\r\n\r\n  event.preventDefault()\r\n  event.stopPropagation()\r\n\r\n  menuHamburguer.classList.toggle('active');\r\n  headerDesktop.classList.toggle('active');\r\n})\r\n\r\n\r\n/** CARREGAR MAIS POSTS */\r\nconst cardsItems = document.querySelectorAll('.content-card__item');\r\nconst loadmore = document.getElementById('loadmore');\r\nconst initialNumberOfPostDisplay = 5;\r\n\r\nconst showOnlyTheFirstPosts = (number) => {\r\n  const firstPosts = Array.from(cardsItems).filter((item, index ) => {\r\n    if (index <= number) {\r\n      item.classList.add('active');\r\n    }\r\n    return\r\n  })\r\n  return firstPosts;\r\n}\r\n\r\nshowOnlyTheFirstPosts(initialNumberOfPostDisplay)\r\n\r\nlet listItem = initialNumberOfPostDisplay + 1\r\n\r\nif (listItem >= cardsItems.length) {\r\n  loadmore.remove();\r\n}\r\n\r\nloadmore.addEventListener('click', () => {\r\n\r\n  Array.from(cardsItems).forEach( item => {\r\n    if (item.classList.contains('active')) {\r\n      return listItem++\r\n    }\r\n  })\r\n\r\n  if (listItem >= cardsItems.length) {\r\n    loadmore.remove();\r\n  }\r\n\r\n  return showOnlyTheFirstPosts(initialNumberOfPostDisplay + 6);\r\n})\n\n//# sourceURL=webpack://jotafire/./src/js/main.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/main.js"]();
/******/ 	
/******/ })()
;