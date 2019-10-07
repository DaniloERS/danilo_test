<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="/css_files/mystyles.css?version=1">
	<title>new 1</title>

</head>
<body>

	<form method="post">

		<label class="text1" for="number">Insira um número: </label><input type="text" id="number" name="number">
		<input class="button1" type="submit" value="Enviar"><br><br>

	</form>
	<div class="text1">
			
		<?php

			$number = $_POST['number'];

			if($number % 2 == 0 && $number % 5 == 0 && $number % 10 == 0) echo "$number é divisível por 2, 5 e 10. . .<br><br>";

			else {

				if($number % 2 == 0) echo "$number é divisível por 2. . .<br><br>";

				if($number % 5 == 0) echo "$number é divisível por 5. . .<br><br>";

				if($number % 10 == 0) echo "$number é divisível por. . .10<br><br>";
			}

			if($number % 2 != 0 && $number % 5 != 0 && $number % 10 != 0) echo "$number não é divisível por 2, 5 nem 10. . .<br><br>"
				
		?>

	</div>

</body>
</html>