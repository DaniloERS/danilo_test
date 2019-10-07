<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="/css_files/mystyles.css?version=1">
	<title>Test</title>

</head>
<body>

	<form method="post">
		<label for="name">Enter your name: </label><input type="text" id="name" name="name" autocomplete="off"> &nbsp;&nbsp;&nbsp;
		<label for="job">Enter your job: </label><input type="text" id="job" name="job" autocomplete="off"><br><br>
		<input class="button1" type="submit" value="Submit"><br><br>
	</form>

	<?php

	class Empresa
	{
		private $dono;
		protected $gerente;
		public $empregado;
		public $grupo;
		public $trabalho;

		public function __construct($empregado, $trabalho)
		{
			$this->empregado = $empregado;
			$this->trabalho = $trabalho;
		}
		
		public function atribuir() 
		{
			echo "<br>Um novo trabalho será atribuído a: $this->empregado<br>";
			echo "$this->empregado irá realizar: $this->trabalho<br>";

			return $this->trabalho;
		}

		//Setters

		public function setEmployee($value)
		{
			$this->empregado = $value;
		}

		public function setJob($value)
		{
			$this->trabalho = $value;
		}

		//Getters

		public function getEmployee() 
		{
			return $this->empregado;
		}

		public function getJob() 
		{
			return $this->trabalho;
		}
	}

	$a1 = new Empresa($_POST['name'], $_POST['job']);

	echo "The following employee whill do the service: " . $a1->getEmployee() . "<br><br>";
	echo "The job to be done is: " . $a1->getJob();

	?>

</body>
</html>