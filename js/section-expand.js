//Expand Collapsed Section
function toggleExpand(buttonID) {
  var button = document.getElementById(buttonID);
  //Invert Button Arrow
  var button_value = button.innerText; //Get Value
  switch (button_value){
    case "▲": //Up Arrow
      button.innerHTML = "▼"; //Down Arrow
      break;

    case "▼": //Down Arrow
      button.innerHTML = "▲"; //Up Arrow
      break;

    default:
      button.innerHTML = "▲"; //Up Arrow
      break;
  }

  //Expand Section
  button.closest(".gallery__section").classList.toggle("gallery__expanded");
}
