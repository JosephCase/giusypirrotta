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
								<h3>ENLIGHTEN</h3>
								<p>16mm b&amp;w film, loop no sound, 6&rsquo;45&rsquo;&rsquo;</br>spot 1,video, no sound, loop, 0&rsquo;30&rsquo;&rsquo;</br>spot 2,video, no sound, loop, 1&rsquo;45&rsquo;&rsquo;</br>spot 3,video, no sound, loop, 7&rsquo;50&rsquo;&rsquo;</br>80 slides, loop, no sound</br>led light</br>Installation view at Central Saint Martin College of Art &amp; Design 2011</p>
								<p>The focus of the work is the study of light in and outside the screen, in terms of light shot and emitted between production and postproduction. Therefore, moving images projected and light created and modified with structural intervention and through equipment used. Every projection reproduces a spot light which interacts with a character in different way. Light is shown as an abstracted component in its consistence and ephemerality in the ambiguity between what was shot and what is made with other equipment and in postproduction. Moreover, different light source are placed in the exhibition space interacting with every projection in order to amplify the ambiguity between light sources.</p>
						</div>

						<div class="text italian">
								<h3>ENLIGHTEN</h3>
								<p>16mm b&amp;w film, loop no sound, 6&rsquo;45&rsquo;&rsquo;</br>spot 1,video, no sound, loop, 0&rsquo;30&rsquo;&rsquo;</br>spot 2,video, no sound, loop, 1&rsquo;45&rsquo;&rsquo;</br>spot 3,video, no sound, loop, 7&rsquo;50&rsquo;&rsquo;</br>80 slides, loop, no sound</br>led light</br>Installation view at Central Saint Martin College of Art &amp; Design 2011</p>
								<p>Il focus di questo lavoro &egrave; lo studio della luce dentro e fuori lo schermo: luce filmata, luce proiettata, e luce prodotta dall&rsquo;attrezzatura e modificata secondo interventi strutturalisti. Ogni proiezione ricrea un punto di luce ottenuto in maniere diversa secondo il media usato, non c&rsquo;&egrave; una narrativa lineare tra i diversi interventi ma si creano relazioni diverse che collegano ogni proiezione all&rsquo;altra stimolando lo spettatore istintivamente a costruire una storia attraverso la figura protagonista di ogni storia che si muove nella luce. Nello spazio sono inoltre posizionate sorgenti di luce che interagiscono con le proiezioni creando una forte ambiguit&agrave; tra quello che &egrave; stato filmato e quello che &egrave; proiettato tra produzione e post produzione.</p>
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