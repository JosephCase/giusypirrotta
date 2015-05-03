<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>artist: Giusy Pirrotta</title>

        <!-- The below is a copied HTML5 shiv from https://code.google.com/p/html5shiv/ that allows pre IE9 to understand the HTML5 elements -->

        <!--[if lt IE 9]>
        <script src="dist/html5shiv.js"></script>
        <![endif]-->

        <!--Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- <meta name="description" content="A portfolio of some of the work I have completed.">
        <meta name="author" content="Joseph Case">

        <!--Google Fonts-->
        <!-- <link href="http://fonts.googleapis.com/css?family=Oxygen:700,400,300" rel="stylesheet" type="text/css"> -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="/CSS/reset.css?version=1.1">
        <link rel="stylesheet" type="text/css" href="/CSS/style.css?version=1.1">        
        <link rel="stylesheet" type="text/css" href="/CSS/work.css?version=1.1">
        <!-- <link rel="stylesheet" type="text/css" href="Portfolio.css"> -->

        <!-- JS -->
        <script src="/js/language.js"></script>


    </head>
    <body class="english">
        <div class="content">

            <?php 
                $root = $_SERVER['DOCUMENT_ROOT'];
                include_once($root."/header.php");
            ?>

            <div class="text english">
                <h3>The Quality of &quot;Scale&quot;</h3>
                <p><i>exhibition view at Muratcentoventidue Gallery</br>Steel trunk of pyramids, magnifying lens, 35mm and medium format slides. 16mm color film, no sound, 5'45'' transferred DVD, loop, back projection on glass slide show 80 slides,loop, video projection 4'45'' color, loop</i></p>
                <p>The quality of Scale explores the relationship between the notion of public/intimacy and monument/object especially referring to the quality of sculpture and its relationship with exhibition space, viewer and light.</p>
                <p>&ldquo;The quality of intimacy is attached to an object in a fairly direct proportion as its size diminished in relation to oneself. The quality of publicness is attached in proportion as the size increases in relation to oneself&rdquo; ( Robert Morris , Continuous Project Altered Daily, The Writings of Robet Morris, in Note on Sculpture Part 2, p13, October Book, the MIT Press, Cambridge, Massachusetts, 1995)</p>
            </div>

            <div class="text italian">
                <h3>The Quality of Scale</h3>
                <p><b>Stanza 1</b> due tronchi du piramide in metallo, illuminati dall&rsquo;interno con lampadine colorate che rivelano un immagine visualizzata attarverso una lente posizionata sul vertice delle piramide, le immagini sono costituite da diapositive. retro proiezione su vetro 16mm colore film, no sonoro, 5'45'' trnasferita su DVD, loop,</br><b>Stanza 2</b> Panneli di legno, video proiezione 4&rsquo;45&rsquo;&rsquo;, colore, no sonoro, loop proiezione di diapositive , 80 diapositive loopslide show 80 slides,loop.</p> 
                <p><i>&ldquo;The quality of intimacy is attached to an object in a fairly direct proportion as its size diminished in relation to oneself. The quality of publicness is attached in proportion as the size increases in relation to oneself.&rdquo;</i> (Robert Morris(1995) Continuous Project Altered Daily, The Writings of Robert Morris, in Note on Sculpture Part 2, p13, October Book, the MIT Press, Cambridge, MassachusettsRobert Morris,1995)</p>
            </div>
            

            <div class="images">
                <?php                           
                    $files = glob('images/*.jpg');
                    foreach($files as $file) {
                        echo "<img src='".$file."' />";
                    }
                ?>      
            </div>

            <?php 
                include_once($root."/footer.php");
            ?>

        </div>
    </body>
</html>