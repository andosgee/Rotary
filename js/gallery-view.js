//View Section as Gallery
function toggleGalleryView(sectionID){
  //Toggle gallery view class on section
  var section = document.getElementById(sectionID);
  section.classList.toggle("gallery__galleryView");

  //Toggle gallery controls
  var elementsToHide = [document.getElementById("gallery__close"),document.getElementById("gallery__next"),document.getElementById("gallery__previous"),document.getElementById("gallery__expand")];
  elementsToHide.forEach(toggleHideElement);
}

function toggleHideElement(element){
  //Toggle hide for element
  element.classList.toggle("hidden");
}

function nextImage(){
  //Scroll forward to next image
  console.log("Switches to next image");
}

function previousImage(){
  //Scroll back to previous image
  console.log("Switches to previous image");
}
