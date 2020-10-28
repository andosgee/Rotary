function preview_image(event){
 var file = new FileReader();
 file.onload = function()
 {
  var img = document.getElementById('upload_preview');
  img.src = file.result;
 }

 file.readAsDataURL(event.target.files[0]);
}
