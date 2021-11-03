<?php
	$page = get_active_page();
	$dir = "./ass/{$page}";
?>
<div class="pdf-display column">
	<select class="form__select" onchange="update_pdf(this.value,'pdf-display')">
		<?php
			$files = get_files($dir);
			{
				foreach($files as $file)
				{
					echo("<option value='{$dir}/{$file}.pdf'>{$file}</option>");
				}
			}
			?>
	</select>
	<?php
	if(sizeof($files) > 0)
	{
		echo("<iframe id='pdf-display' src='{$dir}/{$files[0]}.pdf'></iframe>");
	}else{
		echo "No Files Found, Please try again Later";
	}
	?>
</div>
