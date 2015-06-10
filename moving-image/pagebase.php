<!--Helpers-->
<?php 
    require_once '../../helpers/rootResolver.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		$root = $_SERVER['DOCUMENT_ROOT'].$rootHelper;
		require_once($root."workHead.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				require_once($root."header.php");
            ?>	

            <div class="images">
           `	<video width="940" controls>
					<source src="video.mp4" type="video/mp4">
					<source src="video.ogg" type="video/ogg">
					<source src="video.webm" type="video/webm">
					Your browser does not support the video tag.
				</video>
            </div>
			
			<?php
				require_once($root."footer.php");
            ?>

		</div>
	</body>
</html>