<?php 
    $styleSheet = 'workPage.css';
    if (!isset($section)) {
    	$section = '';
    }  
    require_once("sql_connection.php");

    // Get the page URL to use in the SQL query
    if(count($url_array) > 2 && $url_array[2] != '') {
		$sql_url = mysqli_real_escape_string($sql_connection, $url_array[2]);
    } else {
    	$sql_url = $url_array[1];
    }
?>
<!DOCTYPE html>
<html>
<?php
    require_once 'head.php';
?>

	<body class="eng">
		<div class="content">

			<?php 

			use \Michelf\Markdown;
			require_once("header.php");

			$sql = "SELECT childPage.name, type, content, size, language, parentPage.url as parentPageUrl FROM page as childPage
						left join page as parentPage
							on parentPage.id = childPage.parentPage_id
            			inner join content
            				on content.page_id = childPage.id
            					WHERE childPage.url = '{$sql_url}'                
            					AND (parentPage.url = '{$url_array[1]}') OR (parentPage.id IS NULL)    ";
			
			$result = mysqli_query($sql_connection, $sql);
            if(!$result) {
                die("Query failed: " . mysqli_error($sql_connection));
            }

            if (mysqli_num_rows($result) > 0) {

            	//get the heading
            	echo "<h3>" . mysqli_fetch_assoc($result)['name'] . "</h3>";
            	mysqli_data_seek($result, 0);

                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {

                    switch ($row['type']) {
					    case "p":
					        echo "<p";
					        if ($row['size'] != 0 || $row['language'] != NULL) {
					        	echo " class='";
					        	if ($row['size'] != 0) {
					        		echo "p{$row['size']} ";
					        	}
					        	if ($row['language'] != NULL) {
					        		echo "{$row['language']}";
					        	}
					        	echo "'";
					        }
					        echo ">{$row['content']}</p>";
					        break;
					    case "img":
					        echo "<img data-img='/media_content/{$row['parentPageUrl']}/{$url_array[2]}/images/{$row['content']}' />";
					        break;
				        case "text":
                                $text = Markdown::defaultTransform($row['content']);
                                echo $text;
                                break;
					    default:
					        echo "invalid type";
					}

                }
            } else {
                echo "<p>ERROR: NO RESULTS RETURNED</p>";
            }
            

			require_once("footer.php");

            ?>

		</div>
	</body>
</html>