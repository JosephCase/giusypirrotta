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
							<h3>Untitled_48</h3>
							<p>Slide projector 80 slides loop, 2 super 8 projector loop 7'', Toughned glass panels.</br>Installation view at Elthorn Studio London</p>
							<p>Untitled is a site specific project realized on 48 hours.The work comprises a slide show and 2 super 8 film projection on frosted glass.The projection is deconstructed in between the glass support were the light reflects or pass through.</p>
						</div>

						<div class="text italian">
							<h3>Untitled_48</h3>
							<p>proiettore di diapositive 80 diapositive in loop, 2 proiettori super 8, 7&rsquo; film loop, pannelli di vetro temperato</br>Veduta dell&rsquo;installazione Elthorn Studio Londra</p>
							<p>Untitled &egrave; un lavoro site specfic realizzato in 48 ore, Il lavoro comprende un proiezione di diapositve e due film super 8 in loop con immagini di paesaggio trovate. La proiezione &egrave; deostruita attraverso un analisi spaziale che indaga la superficie di proiezione la sua consistenza riflettente o trasparente tra vetro e superficie pittorica e la relazione con la struttura del frame di proiezione</p>
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