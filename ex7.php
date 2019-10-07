<!DOCTYPE html>
<html>
<head>

	<title>ex 7</title>

</head>
<body>

	<form method="post">

		<label for="name">Insira seu nome: </label><input type="text" name="name"><br><br>	
		<label for="age">Insira sua idade: </label><input type="text" name="age"><br><br>
		<input type="submit" value="Enviar"><br><br>

	</form>
	<?php
		
		$name = $_POST['name'];
		$age = $_POST['age'];

		if($age < 18) echo "$name é menor de 18 anos e tem $age anos";
		elseif($age >= 18) echo "$name é maior que 18 anos e tem $age anos";

	?>

</body>
</html>