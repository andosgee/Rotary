<?php
	$page = get_active_page();
	$dir = "./pdf/{$page}";
?>
<div class="pdf-display column">
	<select id="{$page}_date" onchange="update_pdf(this.value)">
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
		echo("<iframe id='pdf_display' src='{$dir}/{$files[0]}.pdf'></iframe>");
	}
	?>
</div>
