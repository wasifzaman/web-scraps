<?php
	$servername = "localhost";
	$username = "root";
	$password = "test";
	$dbname = "test";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];

	$sql = "INSERT INTO names (firstname, lastname)
			VALUES ('$firstname', '$lastname')";

	$conn->query($sql);



	$conn->close();
?>