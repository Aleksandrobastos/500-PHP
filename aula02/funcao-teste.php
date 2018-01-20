<?php


	echo "<pre>";

	function teste($num){

		if($num % 2 === 0){
			return "O numero e par";
		}else {
			return "O numero e impar";
		}

	} 


echo teste(4);

echo "<hr>";


function teste2($num1, $num2){

	if ($num1 === $num2) {
		return "igual";
		
	} if ($num1 > $num2) {
		$maior = $num1;
	} if ($num1 < $num2){
		$maior = $num1;
	}

	return $maior;

}
echo teste2(30, 50);

echo "<hr>";




function teste3($pessoa){
	return ($pessoa['idade'] >= 18) ? 'Maior de idade' : 'Menor de idade';
}

function teste4($pessoa){
	return ($pessoa['idade'] >= 18 && $pessoa['habilitado']) ? 'Pode dirigir' : 'Não Pode';
}

  $pessoa = 

			 [

				'nome' =>  'Sandro',
				'idade' => 40,
				'habilitado' => true


			 
			
			
			
		];

echo teste3($pessoa);	
echo "<hr>";
echo teste4($pessoa);


?>