<!--Helpers-->
<?php 
    $path_to_root = '../';
    $style = 'homepage';    
    $section = 'moving-image';
?>

<html xmlns="http://www.w3.org/1999/xhtml">

    <?php
        require_once($path_to_root.'head.php');
    ?>

    <body class="english">
        <div class="content">

            <?php 
                require_once($path_to_root.'header.php');
            ?>

            <div class="portfolio_links">
               <?php 
                    $sql = "select name, url, mainImage_url
                                from (SELECT id FROM `page`
                                    WHERE url = '{$sql_url}') as parentPage
                                        inner join page
                                            on page.parentPage_id = parentPage.id";

                    $result = mysqli_query($sql_connection, $sql);
                    if(!$result) {
                        die("Query failed: " . mysqli_error($sql_connection));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row

                        while($row = mysqli_fetch_assoc($result)) {

                            echo "<a href='{$sql_url}/{$row['url']}'>
                                    <img data-img='{$path_to_root}media_content/{$sql_url}/{$row['mainImage_url']}' />
                                    <div class='overlay'>
                                        <p>{$row['name']}</p>
                                    </div>
                                </a>";

                        }
                    } else {
                        echo "<p>ERROR: NO RESULTS RETURNED</p>";
                    }
                ?>         
            </div>

             <?php 
                require_once($path_to_root.'footer.php');
            ?>

        </div>
    </body>
</html>