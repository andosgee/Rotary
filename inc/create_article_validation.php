<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $image = $_FILES['article_image'];
  $title = secure($_POST['article_title']);
  $content = secure($_POST['article_content']);
  $description = substr(str_replace(array('\r','\n')," ",$content),0,67) . "...";
  $date = date("Y-m-d");

  //Add to database
  $insert_query = "INSERT INTO tbl_articles(
                     Title,Description,
                     Content,Date,Author,
                     Featured,Moderated)
                   VALUES(
                     '{$title}','{$description}',
                     '{$content}','{$date}',{$_SESSION['USER']},
                     0,0)";
  $conn -> query($insert_query);

  //Add Image - Validation
  $AID = get_from_table('tbl_articles',1,'tbl_articles.AID','DESC')[0]['AID'];
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
  if($image["size"] > 500000){ //Max file size 500kb
    echo "File too large";
    $uploadOk = false; //Invalid
  }

  //Check if not jpg
  if($file_type != "jpg"){
    echo "File must be .jpg format";
    return $uploadOk = false; //Invalid
  }

  if($uploadOk && move_uploaded_file($image["tmp_name"], $target_location)){ //If image can be uploaded and is uploaded successfully
    header("Location: ./article.php?AID={$AID}");
  }
  else{
    echo "Image could not be uploaded. ";
  }
}
 ?>
