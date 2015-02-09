$(document).ready(function() {

	$(".button").click(function() {
		$.get("db_input.php");

	});

});

function newEntry() {
	$.post("db_input.php");
}