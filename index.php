<?php
    
    spl_autoload_register(function($class){
        include(__DIR__ . '\\' . $class . '.php');
        // require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
    });

    //get the config
    $str = file_get_contents('config.json');
    $config = json_decode($str, false);

    // Array of the section pages
    $sectionPages = ['work', 'moving-image', 'images'];

    $url = trim($_SERVER['REQUEST_URI'], '/');
    $url_array = explode('/', $url);

    if(count($url_array) <= 2) {

        //check to see if the it's the homepage;
        $url_end = end($url_array);
        if($url_end == '' || $url_end == 'index' || $url_end== 'index.html' || $url_end == 'index.php') {
            $url_end = 'work';
        }

        //Check if it's a section page or a work page
        if(in_array($url_end, $sectionPages)){
            $page = new SectionPage($url, $url_array, $url_end, $config);
        } else {
            $page = new WorkPage($url, $url_array, $url_end, $config);
        }

        $page->draw();

    } else {
        echo "GO TO 404";   //if it's not a good URL redirect to 404
    } 

?>