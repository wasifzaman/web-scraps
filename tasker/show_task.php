<?php
	$servername = "localhost";
	$username = "root";
	$password = "test";
	$dbname = "taskdb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$task_id = $_GET["task_id"];

	$sql = "SELECT task_id, descrip
			FROM task_list
			WHERE task_id='$task_id'";

	$result = $conn->query($sql)->fetch_assoc();

	echo $result['task_id'], $result['descrip'];



	$conn->close();
?>