<!DOCTYPE html>
<html>
<head>
	
	<title>Ex 2</title>
	<style type="text/css">

		.text {
			font-family: Arial;
			text-align: center;
			margin-top: 100px;
		}

	</style>

</head>
<body>
	
	<div class="text"> 
		
		<?php
		
			$number = 100;

			for($i = 0; $i <= 10; $i++) {

				$result = $number * $i;
			
				echo "$number x $i vale: $result<br><br>";
			}

		?>
		 	
	</div>

</body>
</html>