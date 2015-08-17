<!--Helpers-->
<?php 
    require_once 'helpers/rootResolver.php';
    $style = 'homepage';
    $section = 'works';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    require_once $root.'head.php'
?>
<body class="english">
    <div class="content">

        <?php 
            require_once $root.'header.php';
        ?>

        <div class="portfolio_links">
            <a href="work/lightsign_rainbow">
                <img data-img="<?=$media_content_root?>/work/lightsign_rainbow/mainImage.jpg" />
                <div class="overlay">
                    <p>Lightsign_Rainbow</p>
                </div>
            </a>
            <a href="work/the_quality_of_scale">
                <img data-img="<?=$media_content_root?>/work/the_quality_of_scale/mainImage.jpg" />
                <div class="overlay">
                    <p>The Quality of "Scale"</p>
                </div>
            </a>
            <a href="work/rgb">
                <img data-img="<?=$media_content_root?>/work/rgb/mainImage.jpg" />
                <div class="overlay">
                    <p>RGB</p>
                </div>
            </a>
            <a href="work/vanishing_point">
                <img data-img="<?=$media_content_root?>/work/vanishing_point/mainImage.jpg" />
                <div class="overlay">
                    <p>Vanishing Point</p>
                </div>
            </a>
            <a href="work/a_distribution_in_linear_thinking">
                <img data-img="<?=$media_content_root?>/work/a_distribution_in_linear_thinking/mainImage.jpg" />
                <div class="overlay">
                    <p>A disruption in linear thinking</p>
                </div>
            </a>
            <a href="work/enlighten">
                <img data-img="<?=$media_content_root?>/work/Enlighten/mainImage.jpg" />
                <div class="overlay">
                    <p>Enlighten</p>
                </div>
            </a>
              <a href="work/reversed_light">
                <img data-img="<?=$media_content_root?>/work/reversed_light/mainImage.jpg" />
                <div class="overlay">
                    <p>Reversed Light</p>
                </div>
            </a>
            <a href="work/hawaii">
                <img data-img="<?=$media_content_root?>/work/hawaii/mainImage.jpg" />
                <div class="overlay">
                    <p>Hawaii</p>
                </div>
            </a>
            <a href="work/untitled_48">
                <img data-img="<?=$media_content_root?>/work/untitled_48/mainImage.jpg" />
                <div class="overlay">
                    <p>Untitled_48</p>
                </div>
            </a>  
            <a href="work/crystal_ship">
                <img data-img="<?=$media_content_root?>/work/crystal_ship/mainImage.jpg" />
                <div class="overlay">
                    <p>Crystal Ship</p>
                </div>
            </a>
            <a href="work/the_drama_of_a_single_day">
                <img data-img="<?=$media_content_root?>/work/the_drama_of_a_single_day/mainImage.jpg" />
                <div class="overlay">
                    <p>The Drama of a Single day</p>
                </div>
            </a>            
        </div>

         <?php 
            require_once $root.'footer.php';
        ?>

    </div>
</body>
</html>