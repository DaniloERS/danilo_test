<!DOCTYPE html>
<html>
<head>
	<title>P or U</title>
</head>
<body>
	<form>
		<label for="number">Digite um número: </label><input id="number" type="text" name="number"> &nbsp;
		<input type="submit" Value="Checar"><br><br>
	</form>
	<div style="font-family: Arial">

		<?php
		session_start();

		$number = $_GET['number'];

		if($number%2 == 0) echo "O número $number é par<br>";

		else echo "O número $number é ímpar<br>";

		session_destroy();
		?>
		
	</div>

</body>
</html>
