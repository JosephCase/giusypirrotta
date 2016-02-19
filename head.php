<?php 
    require_once("sql_connection.php");
    if (basename($_SERVER['PHP_SELF'], '.php') == 'index') {
        $sql_url = $table = mysqli_real_escape_string($sql_connection, basename(dirname($_SERVER['PHP_SELF'])));
    } else {
        $sql_url = $table = mysqli_real_escape_string($sql_connection, basename($_SERVER['PHP_SELF'], '.php'));
    }
?>
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
        echo "<link rel='stylesheet' type='text/css' href='{$path_to_root}css/reset.css'>";
        echo "<link rel='stylesheet' type='text/css' href='{$path_to_root}css/style.css'>";
        echo "<link rel='stylesheet' type='text/css' href='{$path_to_root}css/{$style}.css'>";

        if ($style == "workPage" or $style == "videoPage") {
            echo "<script src='{$path_to_root}js/workPage.js'></script>";
        }       
        echo "<script src='{$path_to_root}js/images.js'></script>"; 
        echo "<script src='{$path_to_root}js/language.js'></script>";
        echo "<script src='{$path_to_root}js/video.js'></script>"; 
    ?>


</head>