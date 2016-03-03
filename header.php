<p class="lang ita" onclick="Language.changeLanguage();">ENG</p>
<p class="lang eng" onclick="Language.changeLanguage();">ITA</p>

<?php 
	// echo "<h5 id='test-box' style='position: absolute; top: 0;'></h5>";
	echo "<h1><a href='{$path_to_root}index.php'>Giusy Pirrotta</a></h1>";
?>

<p class="navigation">
<?php 	
	// require_once("sql_connection.php");

	$sql = "SELECT name, url FROM `navigation`\n" . "inner join page\n" . " on navigation.page_id = page.id";

	$result = mysqli_query($sql_connection, $sql);
	if(!$result) {
		die("Query failed: " . mysqli_error($sql_connection));
	}
	$i = 0;
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	$i++;
			echo "<a ".($section === $row["url"] ? 'class=active' : '')." href='{$path_to_root}{$row["url"]}'>{$row["name"]}</a><span>" . ($i < mysqli_num_rows($result) ? "/" : "") ."</span>";
			
	    }
	} else {
	    echo "<p>ERROR: NO RESULTE RETURNED</p>";
	}
?>
</p>