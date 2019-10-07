<!DOCTYPE html>
<html>
<head>
	<title>Ex 4</title>
	<style type="text/css">
		label {
			font-family: Arial;
		}
	</style>
</head>
<body>
	<form action="ex4cont.php">
		<label for="option">
			<b style="font-family: Arial">Escolha uma das opções: </b>
			<select name="option">
				<option value="ad">Adição</option>
				<option value="sub">Subtração</option>
				<option value="mult">Multiplicação</option>
				<option value="divi">Divisão</option>
			</select><br><br>
		</label>
		<label for="n1">Insira o 1º número: </label><input type="text" name="n1" id="n1"/><br><br>
		<label for="n2">Insira o 2° número: </label><input type="text" name="n2" id="n2"/><br><br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>