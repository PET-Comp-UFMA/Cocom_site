btnMenu = document.getElementById("btnNavBar");
btnMenu.addEventListener("click", fechaNavBar);

function fechaNavBar(){
    var menu = document.getElementById("navbarNav");
    if(menu.className == 'navbar-collapse justify-content-end collapse show'){
        menu.className = 'navbar-collapse justify-content-end collapse';
    }/*else{
        menu.className = 'anim-menu-mobile-close';
        document.getElementById("nav-menu-mobile").className = 'nav-menu anim-menu-mobile-close';
        setTimeout(function (){
            menu.style.display = "none";
        }, 0075);
    }*/
};

/*var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex";  
  dots[slideIndex-1].className += " active";
}*/