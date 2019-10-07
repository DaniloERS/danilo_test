<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="/css_files/mystyles.css?version=1">
	<title>ex 8</title>


</head>
<body>

	<form method="post">
		
		<label class="text1" for="month">Insira um número (de 1 a 12): </label><input type="text" id="month" name="month"><br><br>
		<input class="button1" type="submit" name="Enviar"><br><br>

	</form>
	<div class="text1">
		<?php

			$month = $_POST['month'];

			echo "O mês escolhido foi: ";

			switch ($month) {
				case 1:
					echo "Janeiro";

					break;
				
				case 2:
					echo "Fevereiro";

					break;

				case 3:
					echo "Março";

					break;
				
				case 4:
					echo "Abril";

					break;

				case 5:
					echo "Maio";

					break;
				
				case 6:
					echo "Junho";

					break;

				case 7:
					echo "Julho";

					break;
				
				case 8:
					echo "Agosto";

					break;

				case 9:
					echo "Setembro";

					break;
				
				case 10:
					echo "Outubro";

					break;

				case 11:
					echo "Novembro";

					break;
				
				case 12:
					echo "Dezembro";

					break;

				default:
					echo "Este mês não existe";

					break;
			}
		?>
	</div>

</body>
</html>