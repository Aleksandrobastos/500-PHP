<?php  

	echo "<pre>";


	$temperaturas = [

		'2008' => [
			'JANEIRO' => 32,
			'FEVEREIRO' => 31,


		],
		'2009' => [
			'JANEIRO' => 32,
			'FEVEREIRO' => 31,


		],
		'2010' => [
			'JANEIRO' => 32,
			'FEVEREIRO' => 31,


		],




	];

	foreach ($temperaturas  as $ano => $meses){
      echo "<strong>$ano<strong>: <br>";

      foreach ($meses as $mes => $temp) {
      	echo "$mes : $temp <br>";
      }
	
	}


?>