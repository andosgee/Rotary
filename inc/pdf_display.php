<?php
	$page = get_active_page();
	$dir_loc = explode(" ",trim($page));
	$dir = "./ass/{$dir_loc[0]}";
?>
<div class="pdf-display column">
	<script type="text/javascript">
		$(document).ready(function(e){
			$(".form__select").chosen({width: "95%"});
		});
	</script>

	<select placeholder="PDF Select" class="form__select form__select--PDF" onchange="update_pdf(this.value,'pdf-display')">
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
	<?php
	if(sizeof($files) > 0)
	{
	  $files = array_reverse($files);
		echo("<iframe id='pdf-display' src='{$dir}/{$files[0]}.pdf'></iframe>");

	}else{
		echo "No Files Found, Please try again Later";
	}
	?>
</div>
