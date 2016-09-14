<?php
	class SectionPage extends Page {
		var $styleSheet = 'sectionPage.css';
		function drawContent() {
		    $sql = "select name, url, mainImage_url
		                from (SELECT id FROM `page`
		                    WHERE url = '" . mysqli_real_escape_string($this->sql_connection, $this->url_end) . "') as parentPage
		                        inner join page
		                            on page.parentPage_id = parentPage.id
		                WHERE visible = true
		                ORDER BY page.position, page.id DESC";

		    $result = mysqli_query($this->sql_connection, $sql);
		    if(!$result) {
		        die("Query failed: " . mysqli_error($this->sql_connection));
		    }

		    if (mysqli_num_rows($result) > 0) {
		        // output data of each row

		        while($row = mysqli_fetch_assoc($result)) {

		            echo "<a href='/{$this->url_end}/{$row['url']}'>
	                    <img data-img='{$this->config->contentDirectory}/{$row['mainImage_url']}' />
	                    <div class='overlay'>
	                        <p>{$row['name']}</p>
	                    </div>
	                </a>";

		        }
		    } else {
		        echo "<h2 class='errorMsg'>SECTION HAS NO PAGES</h2>";
		    }
		}
	}
?>