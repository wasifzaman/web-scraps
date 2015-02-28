<?php
	$servername = "localhost";
	$username = "root";
	$password = "test";
	$dbname = "taskdb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$task_id = $_POST["task_id"];
	$task_description = $_POST["task_description"];

	$sql = "INSERT INTO task_entry (task_id, descrip)
			VALUES ('$task_id', '$task_description')";

	$conn->query($sql);



	$conn->close();
?>