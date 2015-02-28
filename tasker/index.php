<!DOCTYPE html>

<html>
	<head>
		<link type="text/css" rel="stylesheet" src="stylesheet.css"/>
		<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>
		<form action="build_db.php" method="post">
			<input type="submit" value="Build DB">
		</form>

		<form action="new_task.php" method="post">
			Task Name: <input type="text" name="task_name"><br>
			Task Description: <input type="text" name="task_description"><br>
			<input type="submit">
		</form>

		<form action="new_task_entry.php" method="post">
			Task Id: <input type="text" name="task_id"><br>
			Task Note: <input type="text" name="task_description"><br>
			<input type="submit">
		</form>

		<form class="show_task_form">
			Task Id: <input type="text" name="task_id"><br>
			<input type="submit" onclick="show_task()">
		</form>

		<div id="response"></div>

	</body>

</html>