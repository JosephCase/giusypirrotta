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
							<h3>Crystal ship</h3>
							<p>2 channel video,4:3, dvd pal sd, color, sound,24'45'',2010 two projection on black/ withe wood screens surface size variable</p>
							<p>This project focuses on the double aspect of the ship as a visual object whose shape is depicted in relation to light, the brightness and the clearness of the ship in full sail and the obscure the darkness of the bottom of the vessel as a shipwreck.</br>Landscape is a phycological element related to my personal memories, In fact the film was shot on the Channel which divides Italy from Sicily, the place where I used to live until my teen years.The video shows my trip in order to pass across the channel and the voyage of vessels in full sail, in comparison with shipwreck footages sunken there.</br>The images of ships crossing the channel were taken by particular point of view related to my life in that place, such as my home, the harbor, my parent's home. Furthermore, I collected some documentaries from four scuba-driver companies who are currently living and working along the coast.The original footages are about seabed exploration and shipwrecks discovered on the channel seabed.</p>
						</div>

						<div class="text italian">
							<h3>Crystal ship</h3>
							<p>video su due canali, 24&rsquo;45&rsquo;&rsquo;, loop, sonoro, 2010/2011 proiezione su struttura di legno bicolore dimensioni variabili</p>
							<p>Questo lavoro si basa sullo studio della nave come elemento visivo doppio, la cui forma &egrave; caratterizzata da due aspetti : uno visibile a relazionato alla ovvero la nave che solca il mare e un altro oscuro appartenete al mondo sottomarino come relitto. Il paesaggio &egrave; elemento psicologico. Il video &egrave; interamente girato sullo stretto di Messina, il posto dove vive la mia famiglia. Il lavoro mette a confronto immagini del mio viaggio di traversata dello stretto con immagini di relitti ritrovati in quelle acque nel corso degli anni. I i documentari originali sono esplorazioni sottomarine e scoperte di relitti sul fondale. La struttura di legno su cui sono proiettati i due video &egrave; stata volutamente dipinta di bianco come superficie per le immagini della nave che attraversa il mare, e di nero per le immagini dei relitti. La struttura &egrave; stata studiata in relazione allo spazio in modo da dare alle immagini proiettate una consistenza fisica, che interagisce con lo spazio architettonico. Inoltre &egrave; leggermente sopraelevata da terra di modo che si crei una sorta di ambiguit&agrave; relativa alla consistenza stessa delle immagini proiettate.</p>
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