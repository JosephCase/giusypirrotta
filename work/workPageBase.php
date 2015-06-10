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

            <div class="workDetail">
			<?php 
				require_once("pageHeading.php");
            ?>
            </div>

			<div class="images">
				<?php							
					$files = glob('images/*.jpg');
					foreach($files as $file) {
						echo "<img src='".$file."' />";
					}
				?>      
			</div>


            <div class="workDescription">
			<?php 
				include_once("pagetext.php");
            ?>
            </div>
			
			<?php
				include_once($root."footer.php");
            ?>

		</div>
	</body>
</html>