<p class="lang italian" onclick="Language.changeLanguage();">ENG</p>
<p class="lang english" onclick="Language.changeLanguage();">ITA</p>

<?php 
	echo "<h1><a href='{$rootHelper}'>Giusy Pirrotta</a></h1>";
?>

<p class="navigation">
<?php 
	echo "<a href='{$rootHelper}'>Works</a><span>/</span>";
	echo "<a href='{$rootHelper}moving-image'>Moving Image</a><span>/</span>";
	echo "<a href='{$rootHelper}images'>Images</a><span>/</span>";
	echo "<a href='{$rootHelper}cv.php'>CV</a><span>/</span>";
	echo "<a href='{$rootHelper}statement.php'>Statement</a><span>/</span>";	
	echo "<a href='{$rootHelper}bio.php'>Bio</a><span>/</span>";
	echo "<a href='{$rootHelper}contact.php'>Contact</a>";
?>
</p>