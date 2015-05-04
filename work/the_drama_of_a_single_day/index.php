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
							<h3>The drama of a single day</h3>
							<p>24 slides, loop, no sound, slide projector viewer</p>
							<p>The drama of a single day comes from seven found photographs that depict a view of the Grand Canyon at different hours of the day.</br>The found pictures refer to this time</br>6:02 am-8:35 am-12:02 pm-3:55 pm- 4:31 pm &ndash; 6:35 pm 7: pm</p>
							<p>I digitally manipulated the colours of the 7 found images in order to reconstruct the total day light in 24 hours, recreating a total of 24 slides</p>
						</div>

						<div class="text italian">
							<h3>The drama of a single day</h3>
							<p>24 diapositive, loop, 2010/2011 slide viewer projector</p>
							<p>24 diapositive rappresentano le 24 ore di un giorno sulla veduta del Gran Canion. Il mio intervento &egrave; quello di manipolare i colori delle 7 immagini trovate che rappresentano la stessa veduta sul Gran Canyon in differenti ore del giorno.</br>Tempo delle 7 foto originali</br>6:02 am_ 8:35 am_ 12:02 pm_ 3:55 pm_ 4:31 pm_ 6:35 pm_ 7:00 pm_</p>
							<p>Il mio intervento ricostruisce 24 ore di un intero giorno attraverso tecniche di manipolazione digitale e la trasformazione dell&rsquo;immagine in diapositiva secondo un processo analogico.</p>
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