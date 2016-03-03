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
                <a href="the-quality-of-scale">
                    <img data-img="<?=$path_to_root?>media_content/moving-image/the-quality-of-scale/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>The Quality of "Scale"</p>
                    </div>
                </a> 
                <a href="rgb">
                    <img data-img="<?=$path_to_root?>media_content/moving-image/rgb/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>RGB</p>
                    </div>
                </a>   
                <a href="vanishing-point">
                    <img data-img="<?=$path_to_root?>media_content/moving-image/vanishing-point/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>Vanishing Point</p>
                    </div>
                </a>   
                <a href="chroma">
                    <img data-img="<?=$path_to_root?>media_content/moving-image/chroma/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>Chroma</p>
                    </div>
                </a>   
                <a href="enlighten">
                    <img data-img="<?=$path_to_root?>media_content/moving-image/enlighten/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>Enlighten</p>
                    </div>
                </a>   
                <a href="secret">
                    <img data-img="<?=$path_to_root?>media_content/moving-image/secret/mainImage_o.jpg" />
                    <div class="overlay">
                        <p>Secret</p>
                    </div>
                </a>          
            </div>

             <?php 
                require_once($path_to_root.'footer.php');
            ?>

        </div>
    </body>
</html>