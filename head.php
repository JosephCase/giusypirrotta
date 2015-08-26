<head>
    <title>artist: Giusy Pirrotta</title>

    <!--Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google" content="notranslate" /> <!--stops google trying to translate -->

    <link rel="shortcut icon" href="favicon.ico">

    <!--Google Fonts-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'> -->

    <!--CSS-->
    <?php
        echo "<link rel='stylesheet' type='text/css' href='{$rootHelper}/CSS/reset.css?version=1.0'>";
        echo "<link rel='stylesheet' type='text/css' href='{$rootHelper}/CSS/style.css?version=1.2'>";
        echo "<link rel='stylesheet' type='text/css' href='{$rootHelper}/CSS/{$style}.css?version=1.1'>";

        if ($style == "workPage" or $style == "videoPage") {
            echo "<script src='{$rootHelper}/js/workPage.js'></script>";
        }       
        echo "<script src='{$rootHelper}/js/images.js'></script>"; 
        echo "<script src='{$rootHelper}/js/language.js'></script>";
        echo "<script src='{$rootHelper}/js/video.js'></script>"; 
    ?>


</head>