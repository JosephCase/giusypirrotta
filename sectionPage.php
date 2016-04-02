<?php
	class SectionPage extends Page {
		var $styleSheet = 'sectionPage.css';
		function drawContent() {			
			require_once('drawSectionPageContent.php');
		}
	}
?>