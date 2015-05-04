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

			<?php 
				include_once("pagetext.php");
            ?>	

			<div class="images">
				<?php							
					$files = glob('images/*.jpg');
					foreach($files as $file) {
						echo "<img src='".$file."' />";
					}
				?>      
			</div>
			
			<?php
				include_once($root."footer.php");
            ?>

		</div>
	</body>
</html>