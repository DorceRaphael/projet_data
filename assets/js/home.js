var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (window.pageYOffset == 0) {
    // BLACK BG WHITE BORDER
    document.querySelector("nav").style.backgroundColor = "#0c0c0c00";
    document.querySelector("nav").style.borderBottom = "1px solid #ffffff00";
  } else {
    document.querySelector("nav").style.backgroundColor = "#0c0c0c";
    document.querySelector("nav").style.borderBottom = "1px solid #ffffff";
  }
  prevScrollpos = currentScrollPos;
};

const nav = document.querySelector("#nav");
const menu = document.querySelector("#menu");
const menuToggle = document.querySelector(".nav-toggle");
let isMenuOpen = false;

// TOGGLE MENU ACTIVE STATE
menuToggle.addEventListener("click", (e) => {
  e.preventDefault();
  isMenuOpen = !isMenuOpen;

  // toggle a11y attributes and active class
  menuToggle.setAttribute("aria-expanded", String(isMenuOpen));
  menu.hidden = !isMenuOpen;
  nav.classList.toggle("nav-open");
});

// TRAP TAB INSIDE NAV WHEN OPEN
nav.addEventListener("keydown", (e) => {
  // abort if menu isn't open or modifier keys are pressed
  if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
    return;
  }

  // listen for tab press and move focus
  // if we're on either end of the navigation
  const menuLinks = menu.querySelectorAll(".nav-link");
  if (e.keyCode === 9) {
    if (e.shiftKey) {
      if (document.activeElement === menuLinks[0]) {
        menuToggle.focus();
        e.preventDefault();
      }
    } else if (document.activeElement === menuToggle) {
      menuLinks[0].focus();
      e.preventDefault();
    }
  }
});

// ACCORDION MENU
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// SLICK SLIDER
$(".slideshow-section").slick({
  dots: true,
  arrows: false,
  speed: 500,
  fade: true,
  cssEase: "linear",
  autoplay: true,
  autoplaySpeed: 5000,
  prevArrow: '<p class="prev"><</p>',
  nextArrow: '<p class="next">></p>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
      },
    },
  ],
});

// PARALLAX EFFECT
// var image = document.getElementsByClassName("parallax");
// new simpleParallax(image, {
//   delay: 0.6,
//   transition: "cubic-bezier(0,0,0,1)",
// });
