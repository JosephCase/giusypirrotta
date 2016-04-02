<?php
	class WorkPage extends Page {
		var $styleSheet = 'workPage.css';
		function drawContent() {			
			require_once('drawWorkPageContent.php');
		}
	}
?>