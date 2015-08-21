<!--Helpers-->
<?php 
    require_once '../../helpers/rootResolver.php';
	$media_content_dir = substr(getcwd(), strlen($root));
    $style = 'workPage';
    if (!isset($section)) {
    	$section = 'works';
    }
?>
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
				if(file_exists("pageHeading.php")) {
					echo "<div class='workDetail'>";
		            include_once("pageHeading.php");
		            echo "</div>";				
				}
            ?>

			<div class="images">
				<?php							
					$files = glob($absolute_media_content_root.$media_content_dir.'/images/*_o.jpg');
					foreach($files as $abs_file) {
						$file = basename($abs_file);
						echo "<img data-img='".$media_content_root.$media_content_dir."/images/".$file."' />";
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
				require_once($root."/footer.php");
            ?>

		</div>
	</body>
</html>