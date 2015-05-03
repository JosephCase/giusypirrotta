<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
				<title>artist: Giusy Pirrotta</title>

				<!-- The below is a copied HTML5 shiv from https://code.google.com/p/html5shiv/ that allows pre IE9 to understand the HTML5 elements -->

				<!--[if lt IE 9]>
				<script src="dist/html5shiv.js"></script>
				<![endif]-->

				<!--Meta-->
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
				<!-- <meta name="description" content="A portfolio of some of the work I have completed.">
				<meta name="author" content="Joseph Case">

				<!--Google Fonts-->
				<!-- <link href="http://fonts.googleapis.com/css?family=Oxygen:700,400,300" rel="stylesheet" type="text/css"> -->
				<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

				<!--CSS-->
				<link rel="stylesheet" type="text/css" href="/CSS/reset.css?version=1.1">
				<link rel="stylesheet" type="text/css" href="/CSS/style.css?version=1.1">        
				<link rel="stylesheet" type="text/css" href="/CSS/work.css?version=1.1">
				<!-- <link rel="stylesheet" type="text/css" href="Portfolio.css"> -->

				<!-- JS -->
				<script src="/js/language.js"></script>


		</head>
		<body class="english">
				<div class="content">

						<?php 
							$root = $_SERVER['DOCUMENT_ROOT'];
							include_once($root."/header.php");
			            ?>

						<div class="text english">
							<h3>Reversed light</h3>
							<p>Slides, light box, slide projector.</br>Installation view at Central saint Martin College of Art and Design.</br>Installation view at FAMA Gallery Verona.</p>
							<p>The light box is made with medium format glass slides, each of them has 3 layers whose images are overlapped, creating surreal landscape view. The slide projector is used for looking in its inside. Three slides are placed behind the lens, but their thickness block the light/projection to come out, creating the inverse effect of looking inside, flashing and pointing a sort of tridimensional miniature. I designed an octagonal carousel, the viewer can have a look inside the lens on 8 different groups of 3 overlapped slides</p>
							<p>The found slides depict the journeys of an english through italian sightseeing.</p>
						</div>

						<div class="text italian">
							<h3>Reversed light</h3>
							<p>diapositive medio formato, light box, slide projector</br>2011, dimensioni variabili</br>veduta dell'installazione Central Saint Martin College of Art and design</br>Fama Gallery Verona</p>
							<p>Reversed Light studia l&rsquo;oggetto della proiezione sovvertendone l&rsquo;uso comune. Il light box &egrave; composto da 27 diapositive medio formato suddivise in gruppi da 3, in modo da formare 9 riquadri dove le immagini sono sovrapposte. La diapositiva comunemente usata come oggetto da proiettare in questo caso deve essere guardata al suo interno diventando scultura di luce. La sovrapposizione di immagini e la retro-illuminazione creano immagini nuove che giocano sui gradienti di profonfit&agrave; e dimensione. Le diapositive rappresentano un turista inglese in giro per il l&rsquo;Italia durante gli anni 70.</p>
							<p>Il proiettore usato per proiettare immagini in questo caso &egrave; usato per essere guardato nel suo interno, dentro la sua lente sono infatti contenuti tre diapositive che sovrapposte bloccano il flusso di luce. In questo caso guardando dentro la lente &egrave; possibile vedere un&rsquo;immagine che sovrapposta alle altre crea uno spazio tridimensionale miniaturizzato. Il proiettore comprende un carosello ottagonale studiato e realizzato appositamente per l'oggetto, lo spettatore pu&ograve; guardare all'interno della lente su otto diversi gruppi da 3 diapositive sovrapposte su ogni lato dell'ottagono</p>
							<p>Le immagini usate rappresentano un turista inglese in giro per il mondo, la selezione fatta per questo lavoro riguarda solo attrazioni e luoghi del suo viaggio in Italia</p>
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