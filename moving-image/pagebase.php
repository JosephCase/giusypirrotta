<!--Helpers-->
<?php 
    require_once '../../helpers/rootResolver.php';
    $pageType = 'workPage';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($root."head.php");
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