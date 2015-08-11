<!--Helpers-->
<?php 
    require_once '../../helpers/rootResolver.php';
    $style = 'workPage';
    $section = 'works';
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


			<?php
				if(file_exists("pageHeading.php")) {
					echo "<div class='workDetail'>";
		            include_once("pageHeading.php");
		            echo "</div>";				
				}
            ?>

			<div class="images">
				<?php							
					$files = glob('images/*.jpg');
					foreach($files as $file) {
						echo "<img data-img='".$file."' />";
					}
				?>      
			</div>

			<?php
				if(file_exists("pageHeading.php")) {
					echo "<div class='workDescription'>";
		            include_once("pagetext.php");
		            echo "</div>";				
				}
            ?>
			
			<?php
				require_once($root."footer.php");
            ?>

		</div>
	</body>
</html>