<!--Helpers-->
<?php 
    $path_to_root = "/";
    $style = 'textPage';
    $section = 'cv';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <?php 
        require_once 'head.php';
    ?>  
    <body class="eng">
        <div class="content"> 
            <?php 
                require_once 'header.php';

                use \Michelf\Markdown;

                getContent();

                function getContent() {
                    global $sql_url, $sql_connection, $path_to_root;
                    $sql = "SELECT type, content, size, language FROM page
                                inner join content
                                    on content.page_id = page.id
                                        WHERE url = '{$sql_url}'";
                    
                    $result = mysqli_query($sql_connection, $sql);
                    if(!$result) {
                        die("Query failed: " . mysqli_error($sql_connection));
                    }

                    if (mysqli_num_rows($result) > 0) {
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
                                    echo "<img data-img='{$path_to_root}media_content/work/{$sql_url}/images/{$row['content']}' />";
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
                }                

                require_once 'footer.php';
            ?>
        </div>
    </body>
</html>