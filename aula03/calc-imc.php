<?php  

echo "<pre>";

$peso = (int) $_POST['peso'];
$altura = (float) $_POST['altura'];
		
	function imc($peso, $altura){
		$imc = $peso / ($altura * $altura);
   

   switch (true) {
 	case ($imc < 17 ):
 		echo "Muito abaixo do peso";
 		break;

 	case ($imc >= 17 && $imc <=18.49):
 		echo "Abaixo do peso";
 		break;

 	case ($imc >= 18.50 && $imc <=24.99):
 		echo "Peso normal";
 		break;
 	case ($imc >= 25 && $imc <=29.99):
 		echo "Acima do peso";
 		break;
 	case ($imc >= 30 && $imc <=34.99):
 		echo "Obesidade I";
 		break;
 	case ($imc >= 35 && $imc <=39.99):
 		echo "Obesidade II (severa)";
 		break;	
 	case ($imc >40):
 		echo "Obesidade III (mórbida)";
 		break;								
 	
 	default:
 		echo "Morreu";
 		break;
 }
 	//return $imc;

	}

	echo imc($peso, $altura);

?>