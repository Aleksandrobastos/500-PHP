<?php  

echo "<pre>";

if(!empty($_POST)){
	$request = filter_input(INPUT_SERVER, 'RESQUEST_METHOD')
}

$num1 = (int) $_POST['num1'];
$num2 = (int) $_POST['num2'];


if (empty($num1) || empty($num2)) {

	echo "Numero em branco";
	

}


	function soma($num1, $num2){

		return $num1 + $num2;
		 

	};


	function subtracao($num1, $num2){
		return $num1 - $num2;
	};

	function multiplicacao($num1, $num2){
		return $num1 * $num2;
	};
	 function divisao($num1, $num2){
	 	 if ($num1 ===0) {
	 	 	echo "Numero 1 nao pode ser zero ";
	 	 }

	 	return $num1 / $num2;
	 } 
	

 echo soma($num1, $num2);

 echo "<hr>";

 echo subtracao($num1, $num2);

 echo "<hr>";

 echo multiplicacao($num1, $num2);

 echo "<hr>";

 echo divisao($num1, $num2);
?>