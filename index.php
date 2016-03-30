<?php
    
    $sections = ['work', 'moving-image', 'images'];

    $url = $_SERVER['REQUEST_URI'];
    $url_array = explode('/', $url);

    //if the URL is nothing or a single slash go to the index
    if(count($url_array) == 1 || (count($url_array) == 2 && $url_array[1] == '')) {
        include_once("sectionPage.php");
    } elseif (in_array($url_array[1], $sections)) {
        if(count($url_array) == 2 || (count($url_array) == 3 && $url_array[2] == '')){
            include_once("sectionPage.php");
        } elseif(count($url_array) == 3 || (count($url_array) == 4 && $url_array[3] == '')) {
            include_once("workPage.php");
        } else {
            echo "<p>Go to 404</p>";
        }
    } else {
        echo "HELLO";
        include_once("workPage.php");
    }

    

?>