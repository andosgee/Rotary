<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $AID = secure($_POST['article_select']);
  $image = $_FILES['article_image'];
  $title = secure($_POST['article_title']);
  $content = secure($_POST['article_content']);
  $description = substr(str_replace(array('\r','\n')," ",$content),0,67) . "...";
  $date = date("Y-m-d");
  if(isset($_POST['article_featured'])){
    $featured = 1;
  }else {
    $featured = 0;
  }

  if(isset($_POST['article_publish'])){
    $publish = 1;
  }else {
    $publish = 0;
  }

  //Add to database
  $update_query = "UPDATE tbl_articles
                   SET Title = '{$title}', Description = '{$description}',
                       Content = '{$content}', Moderated = {$publish},Date = '{$date}'
                       , Featured = {$featured} WHERE AID = {$AID}";
  $conn -> query($update_query);

  if(isset($image)){
    //Add Image - Validation
    $uploadOk = true;
    //Save location
    $target_location = "./media/articles/{$AID}.jpg";

    //Get file type
    $file_type = strtolower(pathinfo($target_location,PATHINFO_EXTENSION));

    //Get Image Info
    $image_info = getimagesize($image['tmp_name']);

    //Check if image
    if($image_info == false){
      echo "File is not an image";
      $uploadOk = false; //Invalid
    }

    //Check File size
    if($image["size"] > 5500000){ //Max file size 500kb
      echo "File too large";
      $uploadOk = false; //Invalid
    }

    //Check if not jpg
    if($file_type != "jpg"){
      echo "File must be .jpg format";
      return $uploadOk = false; //Invalid
    }

    if($uploadOk && move_uploaded_file($image["tmp_name"], $target_location)){ //If image can be uploaded and is uploaded successfully
      // header("Location: ./article.php?AID={$AID}");
      echo "<script>location.replace(./article.php?AID={$AID})</script>";
    }
    else{
      echo "Image could not be uploaded. ";
    }
  }
  echo "<script>location.replace(./article.php?AID={$AID})</script>";
}
 ?>
