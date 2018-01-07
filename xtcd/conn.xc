<?php

//MySQLi Procedural
$conn = mysqli_connect("127.0.0.1","root","password","eagle");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
