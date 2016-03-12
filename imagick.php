<?php
	$media_content_dir = $_SERVER['DOCUMENT_ROOT'] . "/media_content/";
	$img = new Imagick($media_content_dir . 'work/enlighten/mainImage_o.jpg');
	echo $img->getImageWidth();
?>