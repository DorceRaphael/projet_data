(()=>{var e="",t=1;function o(){$.ajax({url:"./public/controller/genre_pagination_ajax_controller.php",type:"POST",cache:!1,data:{page_no:t,musicfilter:e},success:function(e){$("#table-data").html(e)}})}document.querySelectorAll(".option").forEach((function(t){t.addEventListener("click",(function(){e=(e=this.getAttribute("value")).replace(/ /g,"_"),console.log(e),o()}))})),$(document).on("click",".pagination li a",(function(e){e.preventDefault(),t=$(this).attr("id"),console.log(t),o()}));var n=document.querySelector("#top-btn");window.addEventListener("scroll",(function(){document.body.scrollTop>1e3||document.documentElement.scrollTop>1e3?$("#top-btn").fadeIn(500):$("#top-btn").fadeOut(500)})),n.addEventListener("click",(function(){document.body.scrollTop=document.querySelector(".slideshow-section").getBoundingClientRect().height,document.documentElement.scrollTop=document.querySelector(".slideshow-section").getBoundingClientRect().height}))})();