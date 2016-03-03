<!--Helpers-->
<?php 
    $path_to_root = '../';
    $style = 'homepage';    
    $section = 'images';
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

            <div class="portfolio_links images">
                <a href="analogue_print">
                    <img data-img="<?=$path_to_root?>media_content/images/analogue_print/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>Analogue Prints</p>
                    </div>
                </a> 
                <a href="drawing">
                    <img data-img="<?=$path_to_root?>media_content/images/drawing/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>Drawings</p>
                    </div>
                </a>       
            </div>

             <?php 
                require_once($path_to_root.'footer.php');
            ?>

        </div>
    </body>
</html>