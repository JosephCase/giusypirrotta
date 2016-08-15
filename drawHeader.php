<p class="lang ita" onclick="Language.changeLanguage();">ENG</p>
<p class="lang eng" onclick="Language.changeLanguage();">ITA</p>

<?php 
	echo "<h1 class='title'><a href='/'>Giusy Pirrotta</a></h1>";
?>

<p class="navigation">
<?php 	

	$sql = "SELECT name, url FROM `navigation`\n" . "inner join page\n" . " on navigation.page_id = page.id";

	$result = mysqli_query($this->sql_connection, $sql);
	if(!$result) {
		die("Query failed: " . mysqli_error($this->sql_connection));
	}
	$i = 0;
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	$i++;
			echo "<a ".(($this->url_end === $row["url"] || $this->url_array[0] === $row["url"]) ? 'class=active' : '')." href='/{$row["url"]}'>{$row["name"]}</a><span>" . ($i < mysqli_num_rows($result) ? "/" : "") ."</span>";
			
	    }
	} else {
	    echo "<p>ERROR: NO RESULTE RETURNED</p>";
	}
?>
</p>