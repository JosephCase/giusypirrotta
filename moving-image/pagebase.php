<!--Helpers-->
<?php 
    require_once '../../helpers/rootResolver.php';
    $style = 'videoPage';
    $section = 'moving-image';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($root."head.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				require_once($root."header.php");
            ?>

            <?php
				require_once("contentTitle.php");
            ?>

			<div class="videoContent">	            	
				<video loop controls poster="image01.jpg">
					<source src="video.mp4" type="video/mp4">
					<!-- <source src="video.ogg" type="video/ogg">
					<source src="video.webm" type="video/webm">-->
				</video>
				<?php							
					$images = glob('image*.jpg');
					foreach($images as $image) {
						echo "<img src='".$image."' />";
					}
				?>
			</div>
			<?php
				require_once("contentText.php");
            ?>
			
			<?php
				require_once($root."footer.php");
            ?>

		</div>
	</body>
</html>