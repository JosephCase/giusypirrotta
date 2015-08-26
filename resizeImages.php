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
                // $dirs = glob($dir."/*", GLOB_ONLYDIR);
                if (count($files) > 0) {
                    foreach($files as $file) {
                        if (strpos($file, 'frame') == true) {
                            list_name($file);
                        } else {
                            echo 'false'
                        }
                        // if ($filename == "mainImage_o") {
                            list_name($filename);
                        // }
                    }
                } 
                // if (count($dirs) > 0) {
                //     // echo count($dirs) . " - ";
                //     foreach($dirs as $sub_dir) {
                //         // echo $sub_dir . "</br>";
                //         resizeImages($sub_dir);
                //     }
                // }            
            }
            function resizeImage($file, $newWidth, $extension) {
                $image = @imagecreatefromjpeg($file);
                $new_file = str_replace("_o.jpg", $extension.".jpg", $file);

                if(file_exists($new_file)) {
                    unlink($new_file);     //remove old version of file
                }
                
                if (imagesx($image) > $newWidth) {

                    // Get new dimensions
                    $ratio = imagesy($image) / imagesx($image);
                    $newHeight = round($newWidth * $ratio);

                    //Resize image
                    $resizedImage = imagecreatetruecolor($newWidth, $newHeight);

                    imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, imagesx($image), imagesy($image));

                    //Sharpen Image
                    $resizedImage = sharpen($resizedImage);

                    //Save image
                    if (imagetypes() & IMG_JPG) {
                        imagejpeg($resizedImage, $new_file, 100);
                        imagedestroy($image);
                        imagedestroy($resizedImage);
                    }

                    // return "<img src='".$new_file."' />";
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


            function clean($file) {                
                if (strpos($file,'_o.jpg') == false) {
                    unlink($file);
                }
            }

            function list_name($file) {
                echo "<p>".$file."</p>";
            }

            resizeImages("media_content");
        ?>
    </body>
</html>

