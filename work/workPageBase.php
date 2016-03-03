<!--Helpers-->
<?php 
    $path_to_root = "../../";
	$media_content_dir = $path_to_root."media_content/".basename(dirname(getcwd()))."/".basename(getcwd());
    $style = 'workPage';
    if (!isset($section)) {
    	$section = 'works';
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($path_to_root."head.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				require_once($path_to_root."header.php");
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
					$path = $media_content_dir.'/images/';							
					$files = glob($path."*_o.jpg");
					foreach($files as $abs_file) {
						$file = basename($abs_file);
						echo "<img data-img='{$path}{$file}' />";
					}
				?>      
			</div>

			<?php
				if(file_exists("pageHeading.php")) {
					echo "<div class='workDescription'>";
		            include_once("pageText.php");
		            echo "</div>";				
				}
            ?>
			
			<?php
				require_once($path_to_root."footer.php");
            ?>

		</div>
	</body>
</html>