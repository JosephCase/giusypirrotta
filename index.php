<!--Helpers-->
<?php 
    $path_to_root = "";
    $style = 'homepage';
    $section = 'works';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    require_once 'head.php'
?>
<body class="english">
    <div class="content">

        <?php 
            require_once 'header.php';
        ?>

        <div class="portfolio_links">
            <a href="work/lightsign_rainbow">
                <img data-img="<?=$path_to_root?>media_content/work/lightsign_rainbow/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Lightsign_Rainbow</p>
                </div>
            </a>
            <a href="work/the_quality_of_scale">
                <img data-img="<?=$path_to_root?>media_content/work/the_quality_of_scale/mainImage_o.jpg" />
                <div class="overlay">
                    <p>The Quality of "Scale"</p>
                </div>
            </a>
            <a href="work/rgb">
                <img data-img="<?=$path_to_root?>media_content/work/rgb/mainImage_o.jpg" />
                <div class="overlay">
                    <p>RGB</p>
                </div>
            </a>
            <a href="work/vanishing_point">
                <img data-img="<?=$path_to_root?>media_content/work/vanishing_point/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Vanishing Point</p>
                </div>
            </a>
            <a href="work/a_distribution_in_linear_thinking">
                <img data-img="<?=$path_to_root?>media_content/work/a_distribution_in_linear_thinking/mainImage_o.jpg" />
                <div class="overlay">
                    <p>A disruption in linear thinking</p>
                </div>
            </a>
            <a href="work/enlighten">
                <img data-img="<?=$path_to_root?>media_content/work/enlighten/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Enlighten</p>
                </div>
            </a>
              <a href="work/reversed_light">
                <img data-img="<?=$path_to_root?>media_content/work/reversed_light/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Reversed Light</p>
                </div>
            </a>
            <a href="work/hawaii">
                <img data-img="<?=$path_to_root?>media_content/work/hawaii/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Hawaii</p>
                </div>
            </a>
            <a href="work/untitled_48">
                <img data-img="<?=$path_to_root?>media_content/work/untitled_48/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Untitled_48</p>
                </div>
            </a>  
            <a href="work/crystal_ship">
                <img data-img="<?=$path_to_root?>media_content/work/crystal_ship/mainImage_o.jpg" />
                <div class="overlay">
                    <p>Crystal Ship</p>
                </div>
            </a>
            <a href="work/the_drama_of_a_single_day">
                <img data-img="<?=$path_to_root?>media_content/work/the_drama_of_a_single_day/mainImage_o.jpg" />
                <div class="overlay">
                    <p>The Drama of a Single day</p>
                </div>
            </a>            
        </div>

         <?php 
            require_once 'footer.php';
        ?>

    </div>
</body>
</html>