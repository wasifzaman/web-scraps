<?php
	$servername = "localhost";
	$username = "root";
	$password = "test";
	$dbname = "taskdb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "CREATE TABLE task_entry (
			id INT(15) AUTO_INCREMENT PRIMARY KEY,
			task_id INT(15) NOT NULL,
			start TIMESTAMP NOT NULL,
			end TIMESTAMP NOT NULL,
			descrip VARCHAR(1500),
			reg_date TIMESTAMP NOT NULL
			)";

	$conn->query($sql);
	
	$sql = "CREATE TABLE task_list (
			task_id INT(15) AUTO_INCREMENT PRIMARY KEY,
			due_date TIMESTAMP NOT NULL,
			descrip VARCHAR(1500),
			status VARCHAR(25),
			reg_date TIMESTAMP NOT NULL
			)";
	
	$conn->query($sql);

	$conn->close();
?>