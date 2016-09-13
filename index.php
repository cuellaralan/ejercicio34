<html>
<head>
	<title>ejercicio 34</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/animacion.css">
</head>
	<body>


		<div class="CajaEnunciadoIzquierda animated bounce">
			Se quiere realizar una aplicación que lea un archivo (../misArchivos/palabras.txt) 
			y ofrezca estadísticas sobre cuantas palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. 
			No tener en cuenta los espacios en blanco ni saltos de líneas como palabras.
			Los resultados mostrarlos en una tabla.

		</div>



		<div class="CajaUno animated flash">
			<?php 

				include "clases/miClase.php";
				miClase::Leer();
			 ?>


		</div>
		
	</body>
</html>