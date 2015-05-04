<html xmlns="http://www.w3.org/1999/xhtml">
		
	<?php 
		$root = $_SERVER['DOCUMENT_ROOT'];
		include_once($root."/workHead.php");
    ?>
		<body class="english">
				<div class="content">

						<?php 
							$root = $_SERVER['DOCUMENT_ROOT'];
							include_once($root."/header.php");
			            ?>

						<div class="text english">
								<h3>LightSign_Rainbow</h3>
								<p>Steel box, 99 light bulbs, adhesive sticker, spray painting, 120x50x15cm</br>2014 Installation view at Premio Cairo, Museo della Permanente, Milan.</p> 
								<p>LightSign_Rainbow is the first of a series of Light Signs and Optical Boxes which examine the relationship between light consistency and color perception through the use of a sculptural body mass, used to give shape to the otherwise evanescent and immaterial aspects of light.</p>
						</div>

						<div class="text italian">
								<h3>LightSign_Rainbow</h3>
								<p>Steel box, 99 light bulbs, adhesive sticker, spray painting, 120x50x15cm</br>2014 Installation view at Premio Cairo, Museo della Permanente, Milan.</p> 
								<p>LightSign_Rinbow &egrave; la prima di una serie di insegne luminose e scatole ottiche dove &egrave; esaminato il rapporto tra la consistenza della luce e la percezione del colore attraverso la massa di un corpo scultoreo con lo scopo di dare forma all'aspetto evanescente della luce e la sua immaterialit&agrave;.</p>
						</div>
						

						<div class="images">
							<?php							
								$files = glob('images/*.jpg');
								foreach($files as $file) {
									echo "<img src='".$file."' />";
								}
							?>      
						</div>

						<?php 
							include_once($root."/footer.php");
			            ?>

				</div>
		</body>
</html>