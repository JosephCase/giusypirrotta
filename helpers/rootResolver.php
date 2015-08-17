<?php
	if (strpos($_SERVER['DOCUMENT_ROOT'], 'josephcase.net') !== false) {
		$rootHelper = "/giusypirrotta/";
	} else {
		$rootHelper = "/";
	}

    $root = $_SERVER['DOCUMENT_ROOT'].$rootHelper;
	
	//Set root folder of all media content
	$media_content_root = $rootHelper."media_content";
	$absolute_media_content_root = $_SERVER['DOCUMENT_ROOT'].$media_content_root;
?>