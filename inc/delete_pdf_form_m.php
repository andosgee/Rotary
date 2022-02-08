<?php
	$dir = "./ass/minutes"; //Directory targeted
  //Error/success messages
  $delete = "<h3 class='contact__subheading'>File Succeessfully Deleted</h3>";
  $fail = "<h3 class='contact__subheading'>Could Not Delete File, Please Try Later</h3>";
  $state = "";

  if(isset($_POST["delete_pdf"])){ //Script that deletes file
    $PDF_name = secure($_POST['pdf_select']);
    if(unlink($PDF_name)){
      $state = $delete;
    }else{
      $state = $fail;
    }
  }
?>
<div class="pdf-display column">
	<script type="text/javascript">
		$(document).ready(function(e){
			$(".form__select").chosen({width: "95%"});
		});
	</script>
<form class="form column" method="post" name="pdf_delete">
  <h1 class="form__title column form__head">Delete Minutes</h1>
<div class="row">
	<select placeholder="PDF Select" name="pdf_select" class="form__select form__select--PDF">
		<?php
			$files = get_files($dir);
			{
				foreach(array_reverse($files) as $file)
				{
					echo("<option value='{$dir}/{$file}.pdf'>{$file}</option>");
				}
			}
			?>
	</select>
</div>
<div class="row">
  <button name="delete_pdf" type="submit" class="form__button form__button--delete">Delete Minutes</button>
</div>
<div class="row">
  <?php
    echo $state;
   ?>
 </div>
</form>
