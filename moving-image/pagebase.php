<!--Helpers-->
<?php 
    require_once '../../helpers/rootResolver.php';
    $pageType = 'videoPage';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		require_once($root."head.php");
    ?>
	<body class="english">
		<div class="content">

			<?php 
				require_once($root."header.php");
            ?>	
            <div class="videoContent">	            	
	       `	<video loop poster="image01.jpg">
					<source src="video.mp4" type="video/mp4">
					<!-- <source src="video.ogg" type="video/ogg">
					<source src="video.webm" type="video/webm">-->
				</video>
				<img src="image01.jpg">
				<img src="image01.jpg">
				<img src="image01.jpg">
            </div>
			<div class="text">						
				<h3>Enlighten</h3>
				<p>
				    16mm b&amp;w film, loop no sound, 6'45''
				</p>
				<p>
				    The focus of the work is the study of light in and outside the screen, in terms of light shot and emitted between production and postproduction. Light is
				    shown as an abstracted component in its consistence and ephemerality in the ambiguity between what was shot and what is made with other equipment and in
				    postproduction.
				    <br/>
				    The film is developed and printed by hand. A spotlight is recreated manually frame by frame as if the main character is running toward it. Moreover, the
				    printer gate was modified in order to recreate a hole which cuts the frame as if a spotlight is enlightening the space.
				</p>
			</div>
			
			<?php
				require_once($root."footer.php");
            ?>

		</div>
	</body>
</html>