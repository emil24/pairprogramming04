<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbName = "pairprogramming";

	//Verilenler bazasina qosulma

	$conn = mysqli_connect($host, $username, $password, $dbName);

	if (!$conn) {
		echo "Errorlari duzelt";
	}

?>