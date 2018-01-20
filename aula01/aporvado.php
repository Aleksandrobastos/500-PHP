<?php

$nota = 10;
$frequencia = 7; 

switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
		echo "APROVADO";
		break;

	case ($nota >=5  && $nota < 7 && $frequencia >=8):
		echo "RECUPERAÇÃO";
		break;	

	case ($nota < 5 ||  $frequencia < 8):
		echo "REPROVADO";
		break;	
	
	default:
		echo "Não existe aluno";
		break;
}





 ?>