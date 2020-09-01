var slideIndex = 1; //Default slide
showSlides(slideIndex); //Show default slide

function plusSlides(n) { //Next Slide
  showSlides(slideIndex += n);
}

function currentSlide(n) { //Show current slide
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i; //Iterable
  var slides = document.getElementsByClassName("marquee-card"); //Get slide by class
  var dots = document.getElementsByClassName("marquee__nav-dot"); //Get dot by class
  if (n > slides.length) {slideIndex = 1} //If last slide go back to first
  if (n < 1) {slideIndex = slides.length} //If first slide go to last
  for (i = 0; i < slides.length; i++) { //Hide all non-active slides
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) { //Remove active class from inactive dots
      dots[i].className = dots[i].className.replace(" marquee__nav-dot--active", "");
  }
  //Show current slide and give active to associated dot
  slides[slideIndex-1].style.display = "flex"; //Show current slide
  dots[slideIndex-1].className += " marquee__nav-dot--active"; //Active dot
}
