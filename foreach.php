<!DOCTYPE html>
<html>
<head>

	<title>new site</title>
	<link rel="stylesheet" type="text/css" href="/css_files/mystyles.css?version=1">

</head>
<body>
<form method="post">

	<input type="text" name="name" id="name" placeholder="Nome"/><br><br>
	<input type="date" name="date" id="date"/><br><br>
	<input type="password" name="psswd" id="psswd" placeholder="Senha"/><br><br>
	<input class="button1" type="submit" value="Enviar"/><br><br>
	<input class="button1" type="reset" name="Reset data"><br><br>

</form>

<?php

session_start();

if(isset($_POST)) {

	foreach ($_POST as $key => $value) {
		
		echo "O nome do campo é: " . $key;

		echo "<br>O campo foi preenchido com as seguintes informações: " . $value . "<hr>";
	}
}

?>

</body>
</html>