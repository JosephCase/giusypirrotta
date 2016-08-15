<?php
	use \Michelf\Markdown;
	$sql = "SELECT childPage.name, type, content, size, language
					FROM page as childPage
        			inner join content
        				on content.page_id = childPage.id
        				and childPage.url = '{$this->url_end}'
        				ORDER BY content.position";

	
	
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
			    case "img":
			        echo "<img data-img='http://gp-cms.local:8888/content/{$row['content']}' class='s{$row['size']}";
			        if ($row['language'] != 'NULL') {
			        		echo " {$row['language']}' ";
			        	} else {
			        		echo "' ";			        		
			        	}
		        	echo "/>";
			        break;
			    case "video":
			        echo "<video autoplay controls class='s{$row['size']}";
			        if ($row['language'] != 'NULL') {
			        		echo " {$row['language']}' ";
			        	} else {
			        		echo "' ";			        		
			        	}
		        	echo "/>";
		        	echo "<source src='http://gp-cms.local:8888/content/{$row['content']}.webm' type='video/webm' />
			        	<source src='http://gp-cms.local:8888/content/{$row['content']}.mp4' type='video/mp4' />
			        	</video>";
			        break;
		        case "text":
		        		echo "<div class='s{$row['size']}";
		        		if ($row['language'] != 'NULL') {
			        		echo " {$row['language']}' ";
			        	} else {
			        		echo "' ";			        		
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