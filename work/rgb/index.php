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
							<h3>RGB</h3>
							<p>Installation view at Galleria Massimo de Luca 16mm film 7'15'', color, no sound, three channel slide projection 240 slides, screens, wall screen</p>
							<p>The installation is a site specific project thought in relation to the architectural space of the gallery. Red, blue and green light are projected with a three channel slide show creating different layers of colors that breaks the deepness of the gallery space.</br>The screen are placed in order to have a middle core that recreates the white light. Colored light are alternated with a selection of images represented in both slides and Film. Flowers and gardens view are assembled through an original book composition structured in a sculptural collage. They are illuminated and shoot under red, blu and green light. The original color of the pictures are completed altered. Moreover the images of open landscape and gardens create at first glance an ambiguity between reality and fiction that is unveiled by the developing of the film when the film studio and the plinths where the book sculptures are placed are shown.</p>
							<p>Alice Ginaldi in &quot;Tanto tempo fa quando la terra era pita&quot; (A long time ago when the earth was flat) exhibition catalogue.</p>
							<p>The new project that Giusy Pirrotta presented in the Exhibition confirms a continuity of thought in relation to previous work on human perception. The conception behind RGB emerges from the equipment; the medium became an investigation of the reverberations of human existence and history. Thanks to the process of additive synthesis, the human eye translates the combination of the three colors - red, blue and green- into white light. This process should not be confused with the subtractive color synthesis involved in the mixing of pigments and inks; it is specific to light and its simultaneous perceptions by the human retina. It is interesting to note that the subtractive color blending (used by painters on the palettes for example) it is a physical procedure, while RGB additive synthesis is a &quot;biological&quot; process, linked exclusively to optical perception. The chromatic purity of each color dissolves in the evanescent annulment of the overlapping ones, producing what we perceive as a pure white light. Pirrotta's work undermines a kind of individualistic and anthropocentric interpretation of reality and reminds us, once again, that the world exists not as a function of man but despite man.</p>
						</div>

						<div class="text italian">
							<h3>RGB</h3>
							<p>Installation view at Galleria Massimo de Luca 16mm film 7'15'', color, no sound, three channel slide projection 240 slides, screens, wall screen</p>
							<p>L'installazione &egrave; un progetto site-specif appositamente studiato in relazione alla spazio della galleria. 240 diapositive con immagini e luci di dominate Rossa, Blu e verde sono proiettate su tre canali su schermi sospesi nello spazio, creando livelli di colori ed immagini sovrapposte che romposno la percezione della profondit&agrave; della galleria. Le superfici di proiezione sono posizionate in modo da avere un centro dove i tre fasci di colore si sovrappongano in modo da ricreare la percezione della luce bianca ovvero la sintesi additiva che si ottiene nella sovrapposizione dei colori rosso verde e blu.</br>Luci colorate sono alternate alla proiezioni di immagini sia nelle diapositive che nel film parte dell'installazione.</br>Le immagini rappresentano vedute di fiori e giardini ottenute fotografando assemblaggi di libri piegati e illuminati sotto luci di dominate rossa verde e blu che altereano completamente i colori originali delle immagini.  Inoltre le suddette vedute su spazi aperti ingannano a prima vista lo spettatore rivelando l'ambiguit&agrave; tra realt&agrave; e finzione, celata nella rappresentazione di immagini filtrate attraverso il medium di produzione e fruizione e come il nostro sistema percettivo interpreta il tutto.  Il film rivela la vera natura delle immagini svelando le composizioni di libri assemblati su plinti nello studio di registrazione.</p>
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