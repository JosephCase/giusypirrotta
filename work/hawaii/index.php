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
							<h3>Hawaii</h3>
							<p>8mm film, colour, silent, 0'23'', loop, 1 slide, slide viewer</br>2013 installation view Mars Milan</p>
							<p>The slide viewer is usually used to analyze a 35mm slide in detail through a magnified lens where the slide is backlit. In this case it is only possible to see the slide only through the projection beam which projects light and image on the viewer. The short loop shows the countdown with color test and opening title of a documentary film about painting in Hawaii Island called &quot;Hawaii path pictorial&quot;.</br>The countdown flicker makes the slide visible only in particular moments and in relation to the position of the viewer around the projector, while the attention on the slide viewer and its image is completely disrupted by a short selection of hawaii dancers performing for just few seconds which keeps the light condition stable.</p>
						</div>

						<div class="text italian">
							<h3>Hawaii</h3>
							<p>8mm film, colore, silent, 0&rsquo;23&rsquo;&rsquo; loop, 1 diapositiva, 2013,proiettore super 8, slide viewer</br>2013 veduta dell'installazione Mars Milano</p>
							<p>LightSign_Rinbow &egrave; la prima di una serie di insegne luminose e scatole ottiche dove &egrave; esaminato il rapporto tra la consistenza della luce e la percezione del colore attraverso la massa di un corpo scultoreo con lo scopo di dare forma all'aspetto evanescente della luce e la sua immaterialit&agrave;.</p>
							<p>Lo slide viewer &egrave; comunemente usato per analizzare le diapositive 35mm attraverso una lente retro-illuminandole. In questo caso &egrave; possibile vedere l&rsquo;immagine all&rsquo;interno del visualizzatore solo attraverso la proiezione che illumina lo slide viewer frontalmente. Il loop usato rappresenta un countdown di inizio pellicola di un film documentario sulla pittura nell&rsquo;isola di Hawaii. Il flicker causato dai numeri, rende visibile la diapositiva soltanto in brevi momenti e in relazione alla posizione dello spettatore intorno all&rsquo;opera, mentre l&rsquo;attenzione dalla diapositiva &egrave; completamente interrotta dall&rsquo;uso di un estratto dal film di pochi secondi di ballerine hawaiane durante la danza che interrompono il flicker del countdown.</p>
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