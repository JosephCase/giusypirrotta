<?php
$servername = "50.62.209.149:3306";
$username = "JosephCase";
$password = "Ls962_aj";
$database = "giusy_test";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
	$sql_connection = $conn;
}

?>