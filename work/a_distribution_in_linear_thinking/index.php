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
				<h3>A Disruption in Linear Thinking</h3>
				<p>slide projector show with synchronized sound 20&rsquo;59&rsquo;&rsquo;, loop, size variable, 2011</p>
				<p>installation view at Crypt Gallery London and at Lethaby Gallery London</p>
				<p>The installation features a dual slide projection show of looping images affected by two still light beams coming from other two slide projectors. The focus of the work is the relationship between the evanescent aspect related to images projected and the transient aspect of life, throughout a selection of 160 still frames from 7 films whose theme is strictly connected with human being&rsquo;s existential crisis as transitory life&rsquo;s aspect. The selection was made in order to recreate a new story where even the soundtracks of each film was edited and synchronized with the images in loop. The slide show comprises two projection of light coming from other equipment, which has different consistence and shape, this light affect the fruition of the image itself as well as the viewer experience, pointing out the impermanent and momentary aspect of moving images projected and its strict relation to the equipment used.</p>
				<p>film used:</br>Taste of cherry (1997) Abbas Kiarostamy 21 grams (2003) Alejandro Gonzalez Inarritu Interiors(1978) Woody Allen</br>Le diable probablement(1977) Robert Bresson Mishima: Life in four chapters&rdquo; (1985)Paul Schrader Virgin suicides (1999) Sofia Coppola Nostalgia (1983) Andrei Tarkovsky</p>
			</div>

			<div class="text italian">
				<h3>A Disruption in Linear Thinking</h3>
				<p>proiezione di diapositive su due canali, sonoro, 20&rsquo;59&rsquo;&rsquo;, loop, dimensione variabili 2011</br>4 proiettori di diapositive, struttura di legno</p>
				<p>veduta dell&rsquo;installazione Crypt gallery Londra</br>veduta dell&rsquo;installazione Lethaby Gallery Londra</p>
				<p>L&rsquo;installazione comprende due proiezioni di diapositive in loop che interagiscono con la luce proveniente da altri due proiettori di diapositive. Il focus del lavoro &egrave; relativo all&rsquo;aspetto evanescente dell&rsquo;immagine proiettata in quanto luce in relazione all&rsquo;aspetto transitorio della vita.</br>Le immagino sono 160 frame estratti da 7 film nei quali i protagonisti attraversano crisi esistenziali o si interrogano sulla volont&agrave; di interrompere la propria esistenza. La selezione di immagini &egrave; accompagnata da un editing sincronizzato delle diverse colonne sonore. Alle due proiezioni di immagini sono sovrapposte due proiezioni di luce in forma e consistenza diversa emesse da due proiettori di diapositive che modificano e interagiscono l&rsquo; esperienza dello spettatore, rompendo il limite della proiezione e sottolineando l&rsquo;effimeralit&agrave; e il temporaneo aspetto dell&rsquo;immagine proiettata come sorgente di luce dipendente dall&rsquo;attrezzatura usata.</p>
				<p>Film usati</br>Taste of cherry (1997) Abbas Kiarostamy 21 grams (2003) Alejandro Gonzalez Inarritu Interiors (1978) Woody Allen</br>Le diable probablement (1077) Robert Bresson Mishima: Life in four Chapters (1985) Paul Scharader Virgin Suicides (1999) Sofia Coppola Nostalgia (1983) Andrei Tarkovsky</p>
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