<?php
 
$val = $_POST['value']; //Valor de entrada
$resultado = "";

if(isset($val)) {
	 
	if($val > 0){
	  $resultado = "Valor Positivo";
	}elseif($val < 0){
	  $resultado = "Valor Negativo";
	}else{
	  $resultado = "Igual a Zero";
	}
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Result</title>
	<style type="text/css">

		h1 {
			font-family: Arial;
		}

	</style>
	
</head>
<body>

	<h1><?=$resultado;?></h1>
	<button onclick="window.location.href='http://localhost/ex1.php'">Inserir outro número</button>

</body>
</html>