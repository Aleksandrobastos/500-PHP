<?php  

	$nome = "Sandro";
	$sobrenome = "Bastos";
	$idade = 40;
	$email = "aleksandrobastos@gmail.com";

	$pessoa = array('Sandro', 'Bastos', 40 , 'aleksandrobastos@gmail.com');

	print_r($pessoa);

	for ($i=0; $i < 4; $i++) {
	echo  $pessoa[$i]."<br>"; 
		
	}


?>