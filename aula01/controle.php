<?php  

$idade = 0;



 switch (true) {
 	case ($idade > 18 && $idade <=25):
 		echo "jovem";
 		break;

 	case ($idade > 13 && $idade <=18):
 		echo "adolecente";
 		break;

 	case ($idade > 25 ):
 		echo "adulto";
 		break;			
 	
 	default:
 		echo "Não sei a idade";
 		break;
 }
?>