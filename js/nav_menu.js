function mobileMenu() { //Hamburger Toggle
  var nav = document.getElementsByClassName("nav__menu")[0];
  if (nav.style.display === "block") { //Toggle items state
      nav.style.display = "none";
    }
  else {
        nav.style.display = "block";
      }
}
