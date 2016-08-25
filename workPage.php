<?php
	use Michelf\Markdown;
	class WorkPage extends Page {
		var $styleSheet = 'workPage.css';
		function drawContent() {			
			$sql = "SELECT type, content, size, language
					FROM page as childPage
        			inner join content
        				on content.page_id = childPage.id
        				and childPage.url = '{$this->url_end}'";

			if(count($this->url_array) == 2) {
				// if the page has a parent directory, make sure to match that as well
				$sql = $sql . " inner join page as parentPage
							on parentPage.id = childPage.parentPage_id            
		    				AND parentPage.url = '{$this->url_array[0]}'";
			}

			$sql = $sql . " ORDER BY content.position";

			$result = mysqli_query($this->sql_connection, $sql);
		    if(!$result) {
		        die("Query failed: " . mysqli_error($this->sql_connection));
		    }

		    if (mysqli_num_rows($result) > 0) {           	

		        // output data of each row
		        while($row = mysqli_fetch_assoc($result)) {

		            switch ($row['type']) {
					    case "img":
					        echo "<img data-img='{$this->config->contentDirectory}/{$row['content']}' class='s{$row['size']}";
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
				        	echo 	"<source src='{$this->config->contentDirectory}/{$row['content']}.webm' type='video/webm' />
					        		<source src='{$this->config->contentDirectory}/{$row['content']}.mp4' type='video/mp4' />
					        	</video>";
					        break;
				        case "text":
				        		echo "<div class='text s{$row['size']}";
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
		}
	}
?>