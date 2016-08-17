<?php 
	class Page {

		var $url;
		var $url_array;
		var $url_end;
		var $config;
		var $sql_connection;
		var $section = '';
		var $styleSheet = '';

		function __construct($url, $url_array, $url_end, $config) {
		   $this->url = $url;
		   $this->url_array = $url_array;
		   $this->url_end = $url_end;
		   $this->config = $config;
		   $this->sql_connection = $this->getSQLConnection();
		}

		function getSQLConnection() {

			$conn = mysqli_connect($this->config->databaseLogin->host, $this->config->databaseLogin->user, $this->config->databaseLogin->password, $this->config->databaseLogin->database);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			} else {
				return $conn;
			}
		}

		function draw() {
		    if (!isset($section)) {
		    	$section = '';
		    }  

			echo "<!DOCTYPE html><html>";

			$this->drawHead();

			echo "<body class='eng'>";

			$this->drawHeader();
			echo "<div class='content'>";
			$this->drawContent();
			echo "</div>";
			$this->drawFooter();

			echo "</body></html>";
		}

		function drawHead() {
			require_once('drawHead.php');
		}
		function drawHeader() {
			require_once('drawHeader.php');
		}
		function drawContent() {
			// this will be defined by the children
		}
		function drawFooter() {
			require_once('drawFooter.php');
		}

	}
?>