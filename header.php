<p class="lang italian" onclick="Language.changeLanguage();">ENG</p>
<p class="lang english" onclick="Language.changeLanguage();">ITA</p>

<?php 
	echo "<h1><a href='{$rootHelper}'>Giusy Pirrotta</a></h1>";
?>

<p class="navigation">
<?php 
	echo "<a ".($pageType == 'homepage' ? 'class=active' : '')." href='{$rootHelper}'>Works<span class='underline'></span></a><span>/</span>";
	echo "<a href='{$rootHelper}moving-image'>Moving Image<span class='underline'></span></a><span>/</span>";
	echo "<a href='{$rootHelper}images'>Images<span class='underline'></span></a><span>/</span>";
	echo "<a href='{$rootHelper}cv.php'>CV<span class='underline'></span></a><span>/</span>";
	echo "<a href='{$rootHelper}statement.php'>Statement<span class='underline'></span></a><span>/</span>";	
	echo "<a href='{$rootHelper}bio.php'>Bio<span class='underline'></span></a><span>/</span>";
	echo "<a href='{$rootHelper}contact.php'>Contact<span class='underline'></span></a>";
?>
</p>