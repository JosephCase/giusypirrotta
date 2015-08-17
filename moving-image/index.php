<!--Helpers-->
<?php 
    require_once '../helpers/rootResolver.php';
    $style = 'homepage';    
    $section = 'moving-image';
?>

<html xmlns="http://www.w3.org/1999/xhtml">

    <?php
        require_once($root.'/head.php');
    ?>

    <body class="english">
        <div class="content">

            <?php 
                require_once($root.'/header.php');
            ?>

            <div class="portfolio_links">
                <a href="the-quality-of-scale">
                    <img data-img="<?=$media_content_root?>/moving-image/the-quality-of-scale/mainImage.jpg" />
                    <div class="overlay">
                        <p>The Quality of "Scale"</p>
                    </div>
                </a> 
                <a href="rgb">
                    <img data-img="<?=$media_content_root?>/moving-image/rgb/mainImage.jpg" />
                    <div class="overlay">
                        <p>RGB</p>
                    </div>
                </a>   
                <a href="vanishing-point">
                    <img data-img="<?=$media_content_root?>/moving-image/vanishing-point/mainImage.jpg" />
                    <div class="overlay">
                        <p>Vanishing Point</p>
                    </div>
                </a>   
                <a href="chroma">
                    <img data-img="<?=$media_content_root?>/moving-image/chroma/mainImage.jpg" />
                    <div class="overlay">
                        <p>Chroma</p>
                    </div>
                </a>   
                <a href="enlighten">
                    <img data-img="<?=$media_content_root?>/moving-image/enlighten/mainImage.jpg" />
                    <div class="overlay">
                        <p>Enlighten</p>
                    </div>
                </a>   
                <a href="secret">
                    <img data-img="<?=$media_content_root?>/moving-image/secret/mainImage.jpg" />
                    <div class="overlay">
                        <p>Secret</p>
                    </div>
                </a>          
            </div>

             <?php 
                require_once($root.'/footer.php');
            ?>

        </div>
    </body>
</html>