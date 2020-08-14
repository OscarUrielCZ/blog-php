<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/menubar.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Aprendiendo PHP | Variables y constantes</title>
</head>
<body>
	<?php
		require_once 'header.php';
	?>
	<div class="container">
		<div class="info">
				<h2>Impresión de información</h2>
				<p>
					Las siguientes funciones sirven para imprimir en pantalla
					<ul>
						<li>echo</li>
						<li>var_dump</li>
					</ul>
				</p>
				<p>Las comillas simples sirven para representar strings, y las dobles comillas para poder imprimir variables en la cadena: "texto plano $variable"</p>
				<br>
				Ejemplo
				<div class="example">
					<?php
						$amigos = 50;
						echo 'Hola<br>';
						echo "Yo tengo $amigos amigos";
					?>
				</div>
			</div>
		<div class="info">
			<h2>Variables y constantes</h2>
			<p>Las variables se definen con un <b>signo de dolar</b>, precediendo el nombre: $nombre_variable = valor</p>
			<p>Las constantes se definen con ayuda de la función <b>define</b>: define('nombre_constante', valor)</p>
			<br>
			Ejemplo
			<div class="example">
				<?php
					define('PI', 3.141592);
					$nombre = 'Oscar';
					$edad = 20;

					echo "$nombre tiene $edad años<br>";
					echo 'Constante: '.PI.'<br>';
					echo 'Sistema operativo: '.PHP_OS.'<br>';
					var_dump($nombre);
					echo gettype($edad);
				?>
			</div>
		</div>
	</div>
</body>
</html>