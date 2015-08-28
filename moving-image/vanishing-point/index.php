<!--Helpers-->
<?php 
    $path_to_root = "../../";
    $media_content_dir = $path_to_root."media_content/".basename(dirname(getcwd()))."/".basename(getcwd());
    $style = 'videoPage';
    $section = 'moving-image';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($path_to_root."head.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				require_once($path_to_root."header.php");
            ?>

            <div class="title">
				<h3>Vanishing Point</h3>				
				<p>Video part of the installation <a href="<?=$path_to_root?>work/vanishing_point">Vanishing Point</a>, central projection of the 3 channels video projection, 4&rsquo;45&rsquo;&rsquo;, loop, no sound, 2012</p>
			</div>	

			<div class="videoContent">	            	
				<video controls poster="<?=$media_content_dir?>/wallpaper_01_o.jpg">
					<source src="<?=$media_content_dir?>/video_01.webm" type="video/webm">
					<source src="<?=$media_content_dir?>/video_01.ogg" type="video/ogg">
					<source src="<?=$media_content_dir?>/video_01.mp4" type="video/mp4">
				</video>
			</div>
			<div class="videoContent">				
				<video controls poster="<?=$media_content_dir?>/wallpaper_02_o.jpg">
					<source src="<?=$media_content_dir?>/video_02.webm" type="video/webm">
					<source src="<?=$media_content_dir?>/video_02.ogg" type="video/ogg">
					<source src="<?=$media_content_dir?>/video_02.mp4" type="video/mp4">
				</video>
			</div>

			<div class="title">
				<p>B&amp;W Film, no sound, 10&rsquo; 39&rsquo;&rsquo; 2012,<br />Film extract, Film part of the Installation <a href="<?=$path_to_root?>/work/vanishing_point">Vanishing Point</a></p>
			</div>	

			<?php							
				$files = glob($media_content_dir.'/images/*_o.jpg');
				if (count($files) > 0) {

					echo "<div class='frames'>";
					foreach($files as $abs_file) {
						$file = basename($abs_file);
						echo "<img data-img='".$media_content_dir."/images/".$file."' />";
					}
					echo "</div>";

				}
			?>		
			<div class="text">
				<p class="english">The video analysed the representation of Chinese landscape trough the parallel perspective and the overlapping of different layers of mountains in order to achieve the sense of deepness. The different lays are overlapped through slow and almost not perceivable fades in and fades out of the same mountains landscape, The image appears still but is moving where the mountains crests oscillate like sea waves.</p>
				<p class="english">The 16mm black and white film is made with a selection of photographs and words shot with rostrum camera. The film is hand processed. The selection comprises excerpts from films and books pointing out the connection of the mountain with the origin of the world. Especially in relation to the notion of mountain as a holy place, closest to the heaven, were immortals reside. This is compared with the challenging of conquering mountains as for western culture in terms of climbing the highest mountains thus Mount Everest. It is physically impossible to survive above 26,000 ft, that is what is called death zone on Everest were corpse of dead climbers will forever be. Moreover the physical effect of highest altitude on human being leads to death, even, in some cases, where external oxygen supply is provided. The film is though in order to construct a new story between myth, popular legend and true mountaineering experience, through the editing of texts excerpts and mountain images.</p>
				<p class="english">1Film: Fata Morgana (Mirage) 1971 Werner Herzog, Ten Minutes older, the Cello, 2002 Michelangelo Bertolucci.<br />Books: The Everest:summit of achievement Stephen Venables, First ascent Stephen Venables, Book of modern mountaineering Malcolm Milne, Top climbs of the world<br />Garth Hatting, Mount blanc and the Aiguilles, C.Douglas Milner.</p>

				<p class="italian">Il film &egrave; realizzato attraverso una selezione di testi ed immagini girato con il Rostrum Camera, sviluppato e stampato a mano. La selezione comprende estratti presi da testi e sceneggiature dove la montagna &egrave; vista come luogo sacro collegata alle origini del mondo, specialmente in relazione alla sua rappresentazione sacra di posto da contemplare, pi&ugrave; vicino al paradiso dive risiedono gli immortali. Questa concezione &egrave; paragonata all&rsquo; idea occidentale di vetta da conquistare e a testimonianze di scalatori alla prese della conquista del Monte Everest dove ad un altezza superiore ai 26.000 piedi &egrave; fisicamente impossibile sopravvivere. Questa zona &egrave; chiamata &ldquo;La zona morta&rdquo;. Gli effetti psicofisici dell&rsquo;altitudine sull&rsquo;essere umano portano in alcuni casi alla morte anche se sono usate risorse esterne di ossigeno. Molti sono gli scalatori morti durante i tentativi di conquista della vetta e i loro cadaveri sono e rimarranno nella zona morta per sempre perch&egrave; molto difficile e pericoloso scendere questi corpi a valle. Questo film &egrave; pensato in modo da ricostruire un nuova storia tra mito, legenda popolare e vere testimonianze attraverso la rielaborazione e l&rsquo;associazione di estratti di di testi ed i immagini<br />1Film: Fata Morgana (Mirage) 1971 Werner Herzog, Ten Minutes older, the Cello, 2002 Michelangelo Bertolucci.</p>
				<p class="italian">Books: The Everest:summit of achievement Stephen Venables, First ascent Stephen Venables, Book of modern mountaineering Malcolm Milne, Top climbs of the world<br />Garth Hatting, Mount blanc and the Aiguilles, C.Douglas Milner</p>
			</div>
			
			<?php
				require_once($path_to_root."footer.php");
            ?>

		</div>
	</body>
</html>