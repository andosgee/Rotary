<?php //Image upload for gallery
  if(isset($_POST['submit'])){
    $upload = "0";
    $target_dir = "./ass/gallery";
    // $target_file = $target_dir . basename($_FILES['file']['name']);

    $imageName = $_FILES["file"]["name"]; #Varibale with name
    $imageTmpName = $_FILES["file"]["tmp_name"]; #Variable with temp location and name
    $imageSize = $_FILES["file"]["size"]; #Variable with file size
    $imageError = $_FILES["file"]["error"]; #Variable with upload errors
    $imageType = $_FILES["file"]["type"]; # Variable with file type

    $imageExtn = explode('.', $imageName);
    $allowEXT = array('image/jpg', 'image/jpeg', 'image/png');

    if(in_array($imageType, $allowEXT)){ // Checks extension against array
      if($imageError === 0){ //no upload errors
        if($imageSize < 5500000){ //Image size less than 5.5mb
          $newName = uniqid('', true).'.'.$imageExtn;
          $newLocation = $target_dir . $newName;
          move_uploaded_file($imageTmpName , $newLocation);
          $upload = 1;
          echo "Image Upload Successful!";
        }else{
          echo 'Error: Image Too Big.';
        }
      }else {
        echo "Error: There was an upload error. Please Try again.";
      }
    }else{
      echo "Error: Incorrect file tpye. Please only use jpg, jpeg, or png files.";
    }
  }
?>
<div class="pdf-upload column">
	<h3><?php // echo("Upload " . ucwords($page)); ?></h3>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
	  <input type="file" class="form__upload" name="file">
	</div>
		<div class="row">
	  <input type="submit" value="Upload" name="submit" class="form__button form__button--submit">
	</div>
	</form>
</div>
