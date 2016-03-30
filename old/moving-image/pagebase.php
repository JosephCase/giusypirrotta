<!--Helpers-->
<?php 
    $path_to_root = "../../";
    $media_content_dir = $path_to_root."media_content/".basename(dirname(getcwd()))."/".basename(getcwd());
    $style = 'videoPage';
    $section = 'moving-image';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($path_to_root."head.php");
    ?>
	<body class="eng">
		<div class="content">

			<?php 
				require_once($path_to_root."header.php");
            ?>

            <?php
				require_once("contentTitle.php");
            ?>

			<div class="videoContent">	            	
				<video controls poster="<?=$media_content_dir?>/wallpaper_01_o.jpg">
					<source src="<?=$media_content_dir?>/video.webm" type="video/webm">
					<source src="<?=$media_content_dir?>/video.ogg" type="video/ogg">
					<source src="<?=$media_content_dir?>/video.mp4" type="video/mp4">
				</video>
			</div>
			<?php							
				$files = glob($media_content_dir.'/images/*_o.jpg');
				if (count($files) > 0) {

					echo "<div class='frames'>";
					foreach($files as $abs_file) {
						$file = basename($abs_file);
						echo "<img data-img='".$media_content_dir."/images/".$file."' />";
					}
					echo "</div>";

				}
			?>


			 

			<?php
				if(file_exists("contentText.php")) {
					include_once("contentText.php");				
				}
            ?>
			
			<?php
				require_once($path_to_root."footer.php");
            ?>

		</div>
	</body>
</html>