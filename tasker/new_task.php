<?php
	$servername = "localhost";
	$username = "root";
	$password = "test";
	$dbname = "taskdb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$task_description = $_POST["task_description"];

	$sql = "INSERT INTO task_list (descrip, status)
			VALUES ('$task_description', 'New')";

	$conn->query($sql);



	$conn->close();
?>