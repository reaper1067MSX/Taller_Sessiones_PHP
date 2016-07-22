<?php


	$tabla = 2;
	$indice = 1;

	$aux = 0;


	for ($tabla = 2 ; $tabla <=10 ; $tabla++){
		echo "<table border='2px'>";
				
		


		for ($indice = 1 ; $indice <= 12 ; $indice++){
			echo "<tr>";

			$aux = $tabla * $indice ;

			
			echo "<td>".$tabla ."*" .$indice ."=" .$aux . "</td>"; //. Sirve para concatenar

			echo "</tr>"; //End Fila


		}//END FOR INDEX

		echo "<br>" ;


		$indice = 1;



	}//END FOR TABLA

	echo "</table>";


?>




