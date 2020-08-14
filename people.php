<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Aprendiendo PHP | Personas</title>
</head>
<body>
	<?php require_once 'header.php'; ?>
	<div class="container">
		<h2>Personas</h2>
		<?php
			$people = array('Oscar', 'Angy', 'Luis', 'Katia', 'Andy', 'Manuel');
			$employees = [
				'Oscar' => array(
					'company' => 'net',
					'salary' => 10000
				),
				'Manuel' => array(
					'company' => 'abarrotes',
					'salary' => 8250
				)
			];
			echo '<h3>Listado de personas</h3>';
			foreach ($people as $index => $person) {
				echo $index.' - '.$person.'<br>';
			}
			$may_salary = 0;
			echo '<h3>Listado de empleados</h3>';
			foreach ($employees as $employee => $data) {
				$company = $data['company'];
				$salary = $data['salary'];
				echo "$employee ($company $salary)<br>";
				if($salary > $may_salary)
					$may_salary = $data['salary'];
			}
			echo "<h3>Mejor pago $may_salary</h3>";
		?>
	</div>
</body>
</html>