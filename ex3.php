<?php 

	$number = 12;

	if($number == 0) $fat = 1;

	else {

		$fat = $number;

		for($i = ($fat - 1); $i > 0; $i--) {
			
			$fat = $fat * $i;

		}

	}

	echo "O fatorial de $number é: $fat";

?>