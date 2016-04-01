<?php 
    $styleSheet = 'workPage.css';
    if (!isset($section)) {
    	$section = '';
    }  
    require_once("sql_connection.php");
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

			$sql = "SELECT childPage.name, type, content, size, language
									FROM page as childPage
			            			inner join content
			            				on content.page_id = childPage.id
			            				and childPage.url = '{$url_end}'";

			if(count($url_array) == 2) {
				// if the page has a parent directory, make sure to match that as well
				$sql = $sql . " left join page as parentPage
							on parentPage.id = childPage.parentPage_id            
            				AND parentPage.url = '{$url_array[0]}'";
			}

			
			
			$result = mysqli_query($sql_connection, $sql);
            if(!$result) {
                die("Query failed: " . mysqli_error($sql_connection));
            }

            if (mysqli_num_rows($result) > 0) {

            	//check to see whether to show the heading
            	if(!in_array($url_end, $noHeader)) {
	            	echo "<h3>" . mysqli_fetch_assoc($result)['name'] . "</h3>";
	            	mysqli_data_seek($result, 0);	
            	}            	

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
					        echo "<img data-img='/media_content/{$url}/images/{$row['content']}' />";
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