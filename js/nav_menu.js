function mobileMenu() { //Hamburger Toggle
  //Opacity and max-height used for transition effect
  //Instead of display which cannot be transitioned
  var nav = document.getElementsByClassName("nav__menu")[0];
  if (nav.style.opacity === "1") { //Toggle items state
      nav.style.opacity = "0";
      nav.style.maxHeight = "0";
    }
  else {
    nav.style.opacity = "1";
    nav.style.maxHeight = "100vh";
      }
}
