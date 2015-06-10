<!--Helpers-->
<?php 
    include_once '../../helpers/rootResolver.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		$root = $_SERVER['DOCUMENT_ROOT'].$rootHelper;
		include_once($root."workHead.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				include_once($root."header.php");
            ?>	

            <video controls>
				<source src="video.mp4" type="video/mp4">
				<source src="video.ogg" type="video/ogg">
				<source src="video.webm" type="video/webm">
				Your browser does not support the video tag.
			</video>
			
			<?php
				include_once($root."footer.php");
            ?>

		</div>
	</body>
</html>