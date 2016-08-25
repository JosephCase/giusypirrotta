<head>
    <title>artist: Giusy Pirrotta</title>

    <!--Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google" content="notranslate" /> <!--stops google trying to translate -->

    <link rel="shortcut icon" href="favicon.ico">

    <!--Google Fonts-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'> -->

    <!--CSS-->
    <link rel='stylesheet' type='text/css' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
<?php

    echo "<link rel='stylesheet' type='text/css' href='css/{$this->styleSheet}'>";
    if(in_array($this->url_end, ['statement', 'bio', 'contact'])) {
        echo "<link rel='stylesheet' type='text/css' href='css/altTextPage.css'>";        
    }
    if(file_exists("css/{$this->url_end}.css")) {
        echo "<link rel='stylesheet' type='text/css' href='css/{$this->url_end}.css'>";
    }

?>
    <script type='text/javascript' src='js/images.js'></script>
    <script type='text/javascript' src='js/language.js'></script>
    <script type='text/javascript' src='js/video.js'></script>


</head>