<?php
	$page = str_replace("create ", "", get_active_page());
	$target_dir = "./ass/{$page}/";
	$target_file = $target_dir . date("d-m-Y") . ".pdf";
	if(isset($_POST["submit"]))
	{
		if($_FILES['file']['type'] == "application/pdf")
		{
			if($_FILES["file"]["size"] > 250000)
			{
				echo("Error: Maximum File Size is 25Mb");
			}
			else if(file_exists($target_file))
			{
				echo("Error: File Already Exists");
			}

			else
			{
				if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
				{
					echo("File Upload Successful");
				}
				else
				{
					echo("Error: Upload Failed");
				}
			}
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
