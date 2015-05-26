<!--Helpers-->
<?php 
    include_once '../helpers/rootResolver.php';
?>
<?php 
    $root = $_SERVER['DOCUMENT_ROOT'].$rootHelper;
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>artist: Giusy Pirrotta</title>

    <!--Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../CSS/reset.css?version=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css?version=1.2">        
    <link rel="stylesheet" type="text/css" href="../CSS/homepage.css?version=1.1">

    <!-- JS -->
    <script src="../js/language.js"></script>

</head>
<body class="english">
    <div class="content">

        <?php 
            include_once($root.'header.php');
        ?>

        <div class="portfolio_links">
            <a>
                <img src="the-quality-of-scale/mainImage.jpg" />
                <p>The Quality of "Scale"</p>
            </a> 
            <a>
                <img src="rgb/mainImage.jpg" />
                <p>RGB</p>
            </a>   
            <a>
                <img src="vanishing-point/mainImage.jpg" />
                <p>Vanishing Point</p>
            </a>   
            <a>
                <img src="chroma/mainImage.jpg" />
                <p>Chroma</p>
            </a>   
            <a>
                <img src="enlighten/mainImage.jpg" />
                <p>Enlighten</p>
            </a>   
            <a>
                <img src="secret/mainImage.jpg" />
                <p>Secret</p>
            </a>          
        </div>

         <?php 
            include_once($root.'footer.php');
        ?>

    </div>
</body>
</html>