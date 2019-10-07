<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css_files/mystyles.css?version=1">
	<title>Array</title>

</head>
<body>

	<form method="post">

		<input type="text" name="nota[]"><br><br>
		<input type="text" name="nota[]"><br><br>
		<input type="text" name="nota[]"><br><br> <!--taking array input by input name array[]-->
		<input class="button1" type="submit" name="Enviar"><br><br>

	</form>

	<div class="text1">
		
		<?php
				
			$nota = $_POST['nota'];

			$ac = 0;

			for ($i = 0; $i < 3; $i++) { 
				$ac = $ac + $nota[$i];
			}

			$media = $ac / 3;
			
			echo "A média das notas é de: $media<br>";

		?>

	</div>

</body>
</html>