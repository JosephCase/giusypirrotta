<?php 
	class Page {

		var $url;
		var $url_array;
		var $url_end;
		var $noHeader;
		var $sql_connection;
		var $section = '';
		var $styleSheet = '';

		function __construct($url, $url_array, $url_end, $noHeader) {
		   $this->url = $url;
		   $this->url_array = $url_array;
		   $this->url_end = $url_end;
		   $this->noHeader = $noHeader;
		   $this->sql_connection = $this->getSQLConnection();
		}

		function getSQLConnection() {
			$servername = "50.62.209.149:3306";
			$username = "JosephCase";
			$password = "Ls962_aj";
			$database = "giusy_test";

			$conn = mysqli_connect($servername, $username, $password, $database);
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

			echo "<body class='eng'><div class='content'>";

			$this->drawHeader();
			$this->drawContent();
			$this->drawFooter();

		    // require_once 'head.php';
			// require_once("header.php");
   			//workPageContent::draw($this->url, $this->url_array, $this->url_end, $this->sql_connection, $this->noHeader);
			// require_once("footer.php");

			echo "</div></body></html>";
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