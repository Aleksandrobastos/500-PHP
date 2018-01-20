<?php 

$nota = 10;
$frequencia = 1; 

if ($nota >= 7 && $frequencia >= 8) {
	echo "APROVADO";
}else if ($nota >=5  && $nota < 7 && $frequencia >=8) {
	echo "RECUPERAÇÃO";
}else if ($nota < 5  || $frequencia < 8) {
	echo "REPROVADO";
}  




 ?>