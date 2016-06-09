<?php
	use \Michelf\Markdown;
	$sql = "SELECT childPage.name, type, content, size, language
					FROM page as childPage
        			inner join content
        				on content.page_id = childPage.id
        				and childPage.url = '{$this->url_end}'";

	if(count($this->url_array) == 2) {
		// if the page has a parent directory, make sure to match that as well
		$sql = $sql . " left join page as parentPage
					on parentPage.id = childPage.parentPage_id            
    				AND parentPage.url = '{$this->url_array[0]}'";
	}

	
	
	$result = mysqli_query($this->sql_connection, $sql);
    if(!$result) {
        die("Query failed: " . mysqli_error($this->sql_connection));
    }

    if (mysqli_num_rows($result) > 0) {

    	//check to see whether to show the heading
    	if(!in_array($this->url_end, $this->noHeader)) {
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
			        echo "<img data-img='/media_content/{$this->url}/images/{$row['content']}' />";
			        break;
		        case "text":
		        		echo "<div";
		        		if ($row['language'] != NULL) {
			        		echo " class='{$row['language']}' ";
			        	}
		        		echo ">";
                        $text = Markdown::defaultTransform($row['content']);
                        echo $text;
                        echo "</div>";
                        break;
			    default:
			        echo "invalid type";
			}

        }
    } else {
        echo "<p>ERROR: NO RESULTS RETURNED</p>";
    }
		
	
?>