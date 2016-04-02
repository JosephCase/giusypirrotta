<div class="portfolio_links">

<?php 
    $sql = "select name, url, mainImage_url
                from (SELECT id FROM `page`
                    WHERE url = '" . mysqli_real_escape_string($this->sql_connection, $this->url_end) . "') as parentPage
                        inner join page
                            on page.parentPage_id = parentPage.id";

    $result = mysqli_query($this->sql_connection, $sql);
    if(!$result) {
        die("Query failed: " . mysqli_error($this->sql_connection));
    }

    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {

            echo "<a href='/{$this->url_end}/{$row['url']}'>
                    <img data-img='/media_content/{$this->url_end}/{$row['mainImage_url']}' />
                    <div class='overlay'>
                        <p>{$row['name']}</p>
                    </div>
                </a>";

        }
    } else {
        echo "<p>ERROR: NO RESULTE RETURNED</p>";
    }
?>
    
</div>