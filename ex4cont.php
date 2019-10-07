<?php

	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$operation = $_GET['option'];


	if($n1 && $n2) {
		switch ($operation) {
			case 'ad':
				$result = $n1 + $n2;

				break;

			case 'sub':
				$result = $n1 - $n2;

				break;

			case 'mult':
				$result = $n1 * $n2;

				break;

			case 'divi':
				$result = $n1 / $n2;

				break;
			
			default:
				
				break;
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>

	<title>Result</title>

</head>
<body>

	<div style="font-family: Arial">O resultado vale: <?= $result?></div><br><br>
	<button onclick="window.location.href='http://localhost/ex4.php'">Tentar outra operação</button>

</body>
</html>