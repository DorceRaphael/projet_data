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

/***/ "./assets/js/home_prod.js":
/*!********************************!*\
  !*** ./assets/js/home_prod.js ***!
  \********************************/
/***/ (() => {

eval("var prevScrollpos = window.pageYOffset;\nwindow.addEventListener(\"scroll\", function () {\n  navBackground();\n});\n\nfunction navBackground() {\n  var currentScrollPos = window.pageYOffset;\n\n  if (window.pageYOffset == 0) {\n    // BLACK BG WHITE BORDER\n    document.querySelector(\"nav\").style.backgroundColor = \"#0c0c0c00\";\n    document.querySelector(\"nav\").style.borderBottom = \"1px solid #ffffff00\";\n  } else {\n    document.querySelector(\"nav\").style.backgroundColor = \"#0c0c0c\";\n    document.querySelector(\"nav\").style.borderBottom = \"1px solid #ffffff\";\n  }\n\n  prevScrollpos = currentScrollPos;\n}\n\nvar nav = document.querySelector(\"#nav\");\nvar menu = document.querySelector(\"#menu\");\nvar menuToggle = document.querySelector(\".nav-toggle\");\nvar isMenuOpen = false; // TOGGLE MENU ACTIVE STATE\n\nmenuToggle.addEventListener(\"click\", function (e) {\n  e.preventDefault();\n  isMenuOpen = !isMenuOpen; // toggle a11y attributes and active class\n\n  menuToggle.setAttribute(\"aria-expanded\", String(isMenuOpen));\n  menu.hidden = !isMenuOpen;\n  nav.classList.toggle(\"nav-open\");\n}); // TRAP TAB INSIDE NAV WHEN OPEN\n\nnav.addEventListener(\"keydown\", function (e) {\n  // abort if menu isn't open or modifier keys are pressed\n  if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {\n    return;\n  } // listen for tab press and move focus\n  // if we're on either end of the navigation\n\n\n  var menuLinks = menu.querySelectorAll(\".nav-link\");\n\n  if (e.keyCode === 9) {\n    if (e.shiftKey) {\n      if (document.activeElement === menuLinks[0]) {\n        menuToggle.focus();\n        e.preventDefault();\n      }\n    } else if (document.activeElement === menuToggle) {\n      menuLinks[0].focus();\n      e.preventDefault();\n    }\n  }\n}); // ACCORDION MENU\n\nvar acc = document.getElementsByClassName(\"accordion\");\nvar i;\n\nfor (i = 0; i < acc.length; i++) {\n  acc[i].addEventListener(\"click\", function () {\n    this.classList.toggle(\"active\");\n    var panel = this.nextElementSibling;\n\n    if (panel.style.maxHeight) {\n      panel.style.maxHeight = null;\n    } else {\n      panel.style.maxHeight = panel.scrollHeight + \"px\";\n    }\n  });\n} // SLICK SLIDER\n\n\n$(\"#slick-slider\").slick({\n  dots: true,\n  arrows: true,\n  speed: 500,\n  fade: true,\n  cssEase: \"linear\",\n  autoplay: true,\n  autoplaySpeed: 5000,\n  prevArrow: \"<button class='slick-prev'></button>\",\n  nextArrow: \"<button class='slick-next'></button>\",\n  responsive: [{\n    breakpoint: 768,\n    settings: {\n      arrows: false\n    }\n  }]\n});\n\ntry {\n  var scene = document.getElementById(\"scene\");\n  var parallaxInstance = new Parallax(scene, {\n    limitX: 0\n  });\n} catch (error) {\n  console.log(\"no parallax\");\n}\n\n//# sourceURL=webpack://projet_data/./assets/js/home_prod.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/js/home_prod.js"]();
/******/ 	
/******/ })()
;