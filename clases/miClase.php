<?php 
	
	class miClase 
	{

		public static function Leer()
		{
			$uno=0;
			$dos=0;
			$tres=0;
			$cuatro=0;
			$mas4=0;
			$archivo = fopen("misArchivos/palabras.txt", "r");

			while(!feof($archivo))
			{
				$renglon = fgets($archivo);

				$palabra = explode(" ", $renglon);


				foreach ($palabra as $pal ) 
				{
					$letras = strlen($pal);
					/*echo $letras;
					die();*/


					switch ($letras) 
					{
						case '1':
							$uno ++;
							break;
						case '2':
							$dos ++;
							break;
						case '3':
							$tres ++;
							break;
						case '4':
							$cuatro ++;
							break;
						default:
							$mas4++;
							break;
					}
					
				}
			}

			echo "una letra".$uno."<br>";
			echo "palabras de dos letras".$dos."<br>"; 
			echo "palabras de tres letras".$tres."<br>"; 
			echo "palabras de cuantro letras".$cuatro."<br>"; 
			echo "palabras de mas de cuatro letras".$mas4;
		}




	}


 ?>