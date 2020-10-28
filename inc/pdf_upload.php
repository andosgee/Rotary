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
	<?php echo("Upload " . ucwords($page)); ?>
	<form method="post" enctype="multipart/form-data">
	  <input type="file" name="file">
	  <input type="submit" value="Upload" name="submit">
	</form>
</div>
