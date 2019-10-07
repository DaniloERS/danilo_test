<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="/css_files/mystyles.css?version=1">
	<title>New 2</title>

</head>
<body>

	<form method="post">
		
		<div class="text1">Collecting user info</div><hr><br>
		<label for="name" class="text1">Enter your name: </label><input type="text" name="name" id="name"/><br><br>
		<input class="button2" type="submit" name="submit2" value="Enviar"><br><br>
		<input type="submit" name="submit" class="button1" value="Erase"><br><br>

	</form>

	<?php

		session_start();

		error_reporting(0);

		$_SESSION["name"] = $_POST["name"];
		$_SESSION["reload"] = $_POST["submit"];

		if($_SESSION['reload'] == 'Erase') session_unset();

		echo 	"<br>" .  $_SESSION['name'] . "<br>";

		session_destroy();

	?>

</body>
</html>