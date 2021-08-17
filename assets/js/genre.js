let filter = "";
let pageId = 1;
const filterRadios = document.querySelectorAll(".option");

filterRadios.forEach((rad) => {
  rad.addEventListener("click", function () {
    filter = this.getAttribute("value");
    filter = filter.replace(/ /g, "_");
    console.log(filter);
    loadData();
  });
});

// Pagination code
$(document).on("click", ".pagination li a", function (e) {
  e.preventDefault();
  pageId = $(this).attr("id");
  console.log(pageId);
  loadData();
});

function loadData() {
  $.ajax({
    url: "./public/controller/genre_pagination_ajax_controller.php",
    type: "POST",
    cache: false,
    data: { page_no: pageId, musicfilter: filter },
    success: function (response) {
      $("#table-data").html(response);
    },
  });
}

// When the user scrolls down 1000px from the top of the document, show the button
var topBtn = document.querySelector("#top-btn");
window.addEventListener("scroll", function () {
  toTopBtn();
});

function toTopBtn() {
  if (
    document.body.scrollTop > 1000 ||
    document.documentElement.scrollTop > 1000
  ) {
    $("#top-btn").fadeIn(500);
  } else {
    $("#top-btn").fadeOut(500);
  }
}

topBtn.addEventListener("click", () => {
  topFunction();
});
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = document
    .querySelector(".slideshow-section")
    .getBoundingClientRect().height;
  document.documentElement.scrollTop = document
    .querySelector(".slideshow-section")
    .getBoundingClientRect().height;
}
