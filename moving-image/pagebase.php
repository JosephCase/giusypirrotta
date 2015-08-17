<!--Helpers-->
<?php 
	$media_content_dir = substr(getcwd(), strlen($_SERVER['DOCUMENT_ROOT']));
    require_once '../../helpers/rootResolver.php';
    $style = 'videoPage';
    $section = 'moving-image';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($root."/head.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				require_once($root."/header.php");
            ?>

            <?php
				require_once("contentTitle.php");
            ?>

			<div class="videoContent">	            	
				<video controls poster="<?=$media_content_root.$media_content_dir?>/mainImage.jpg">
					<source src="<?=$media_content_root.$media_content_dir?>/video.webm" type="video/webm">
					<source src="<?=$media_content_root.$media_content_dir?>/video.ogg" type="video/ogg">
					<source src="<?=$media_content_root.$media_content_dir?>/video.mp4" type="video/mp4">
				</video>
			</div>
			<?php							
				$files = glob($absolute_media_content_root.$media_content_dir.'/images/*.jpg');
				if (count($files) > 0) {

					echo "<div class='frames'>";
					foreach($files as $abs_file) {
						$file = basename($abs_file);
						echo "<img data-img='".$media_content_root.$media_content_dir."/images/".$file."' />";
					}
					echo "</div>";

				}
			?>


			 


			<?php
				require_once("contentText.php");
            ?>
			
			<?php
				require_once($root."/footer.php");
            ?>

		</div>
	</body>
</html>