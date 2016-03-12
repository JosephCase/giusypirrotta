<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Image Resizer</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
            img {
                width: 350px;
                float: left;
            }
            img:nth-of-type(2n - 1) {
                clear: left;
            }
        </style>
    </head>
    <body>
        <h1>Image Resizer</h1>
        <?php 

            function resizeImages ($dir) {
                $files = glob($dir.'/*_o.jpg');                
                $dirs = glob($dir."/*", GLOB_ONLYDIR);
                if (count($files) > 0) {
                    foreach($files as $file) {
                        resizeImage($file, 1400, "_l");
                        resizeImage($file, 900, "_m");
                        resizeImage($file, 600, "_s");
                    }
                } 
                if (count($dirs) > 0) {
                    // echo count($dirs) . " - ";
                    foreach($dirs as $sub_dir) {
                        // echo $sub_dir . "</br>";
                        resizeImages($sub_dir);
                    }
                }            
            }
            

            function resizeImage($file, $newWidth, $extension) {

                $image = new Imagick(realpath($file));
                $new_file = str_replace("_o.jpg", $extension.".jpg", realpath($file));

                list_name($new_file);

                // if(file_exists($new_file)) {
                //     unlink($new_file);     //remove old version of file
                // }
                
                if ($image->getImageWidth() < $newWidth) { //if the image is smaller than it needs to be, do not scale up
                    $newWidth = $image->getImageWidth();
                }

                $image->resizeImage($newWidth,0,Imagick::FILTER_LANCZOS,1);

                if(!$image->writeImage($new_file)) {
                    echo "Unable to save image";
                }

                               
            }

            function sharpen($image) {
                // define the sharpen matrix 

                // quite good (tiny bit too sharp)
                // $sharpen = array(
                //     array(-1.2, -1, -1.2), 
                //     array(-1, 20, -1), 
                //     array(-1.2, -1, -1.2)
                // );

                // ~perfect
                $sharpen = array( 
                    array(-0.5,-0.5,-0.5), 
                    array(-0.5,16,-0.5), 
                    array(-0.5,-0.5,-0.5)
                );


                // calculate the sharpen divisor
                $divisor = array_sum(array_map('array_sum', $sharpen));

                // apply the matrix
                imageconvolution($image, $sharpen, $divisor, 0);

                return $image;
            }

            function clean ($dir) {
                $files = glob($dir.'/*.jpg');                
                $dirs = glob($dir."/*", GLOB_ONLYDIR);
                if (count($files) > 0) {
                    foreach($files as $file) {            
                        if (strpos($file,'_o.jpg') == false) {
                            unlink($file);
                        }
                    }
                } 
                if (count($dirs) > 0) {
                    foreach($dirs as $sub_dir) {
                        clean($sub_dir);
                    }
                }            
            }

            function list_name($file) {
                echo "<p>".$file."</p>";
            }

            // clean("media_content/work/lusterware_pineapple");
            resizeImages("media_content/work/lusterware_pineapple");
        ?>
    </body>
</html>

