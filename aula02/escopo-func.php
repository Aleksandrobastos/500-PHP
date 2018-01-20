<?php  

	$pessoa = ['nome' => 'Sandro', 'idade' => 24 ];

	function exibeNome(){
		global $pessoa;
		$pessoa['idade'] = 32;
		return $pessoa['idade'];


	}

	echo exibeNome();
	echo "<hr>";

	echo $pessoa['idade'];

?>