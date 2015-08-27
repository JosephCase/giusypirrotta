<p class="lang italian" onclick="Language.changeLanguage();">ENG</p>
<p class="lang english" onclick="Language.changeLanguage();">ITA</p>

<?php 
	// echo "<h5 id='test-box' style='position: absolute; top: 0;'></h5>";
	echo "<h1><a href='{$path_to_root}index.php'>Giusy Pirrotta</a></h1>";
?>

<p class="navigation">
<?php 
	echo "<a ".($section === 'works' ? 'class=active' : '')." href='{$path_to_root}index.php'>Works</a><span>/</span>";
	echo "<a ".($section === 'moving-image' ? 'class=active' : '')." href='{$path_to_root}moving-image'>Moving Image</a><span>/</span>";
	echo "<a ".($section === 'images' ? 'class=active' : '')." href='{$path_to_root}images'>Images</a><span>/</span>";
	echo "<a ".($section === 'cv' ? 'class=active' : '')." href='{$path_to_root}cv.php'>CV</a><span>/</span>";
	echo "<a ".($section === 'statement' ? 'class=active' : '')." href='{$path_to_root}statement.php'>Statement</a><span>/</span>";	
	echo "<a ".($section === 'bio' ? 'class=active' : '')." href='{$path_to_root}bio.php'>Bio</a><span>/</span>";
	echo "<a ".($section === 'contact' ? 'class=active' : '')." href='{$path_to_root}contact.php'>Contact</a>";
?>
</p>