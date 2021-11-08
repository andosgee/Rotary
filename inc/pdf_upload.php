<?php //sample file for pdf uploads to fix
$page = str_replace("create ", "", get_active_page());
$target_dir = "./ass/{$page}/"; //directory of the file
$date = date('d-m-y');
// $target_file = $target_dir . date("d-m-Y") . ".pdf"; //Name of file
if(isset($_POST["submit"])){ //button press
  // print_r( $_FILES['file']);
  $target_file = $target_dir . $_FILES['file']['name'];
  if($_FILES['file']['type'] == 'application/pdf'){ //if chosen file is a pdf
    if($_FILES['file']['size'] > 16000000){ //file size is less than 16MB
      echo("Error: File is too big, Maximum upload size is 16MB.");
    }else if(file_exists($target_file)){ //Checks for duplicates
      echo("Error: File Already Exists.");
    }else{
      if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
        echo "Success: File successfully uploaded.";
        // echo get_active_page();
        if(get_active_page() == "create newsletters"){
          $sql_add = "INSERT INTO `tbl_news`(`FileName`,`Date`, `Moderated`,`UID`)
                      VALUES ('{$target_file}', '{$date}', 0, {$_SESSION['USER']})";
          $conn -> query($sql_add);
        }else if(get_active_page() == "create minutes"){
          $sql_add = "INSERT INTO `tbl_mins`(`FileName`,`Date`, `Moderated`,`UID`)
                      VALUES ('{$target_file}', '{$date}', 0, {$_SESSION['USER']})";
          $conn -> query($sql_add);
        }
      }else{
        echo "Error: Upload Failed, please try again.";
      }

    }
  }else{
    echo "Error: Wrong file type. Only accepts PDF format.";
  }
}
?>
<div class="pdf-upload column">
	<h3><?php echo("Upload " . ucwords($page)); ?></h3>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
	  <input type="file" class="form__upload" name="file">
	</div>
		<div class="row">
	  <input type="submit" value="Upload" name="submit" class="form__button form__button--submit">
	</div>
	</form>
</div>
