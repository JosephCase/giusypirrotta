<!--Helpers-->
<?php 
    $style = 'homepage';
    $section = '';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    require_once 'head.php';
    echo $sql_url;
?>

<body class="eng">
    <div class="content">

        <?php 
            require_once 'header.php';
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

                    echo "<a href='work/{$row['url']}'>
                            <img data-img='/media_content/work/{$row['mainImage_url']}' />
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

         <?php 
            require_once 'footer.php';
        ?>

    </div>
</body>
</html>