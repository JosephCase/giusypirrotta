<?php
	if (strpos($_SERVER['DOCUMENT_ROOT'], 'josephcase.net') !== false) {
		$rootHelper = "/giusypirrotta/";
	} else {
		$rootHelper = "/";
	}
	
    $root = $_SERVER['DOCUMENT_ROOT'].$rootHelper;
?>