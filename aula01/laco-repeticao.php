<?php  
/*
$i = 0;


	while ( $i <= 10) {
		if($i%2== 0){
			echo "O valor é  par: $i";
		echo "<hr>";


		}if( $i%2 !=0){
			continue;
			echo "O valor é  impar: $i";
		echo "<hr>";
		}if ($i % 5 == 0){
			
			echo "O valor é  mutiplo de 5: $i";
		echo "<hr>";
		}

		$i++;
		
	}


	do {
		echo "O valor é : $i";
		echo "<hr>";

		$i++;

		} while ( $i <= 10);	

*/

for ($i=1; $i <= 10; $i++) { 
	if($i % 3 == 0){
		continue;
	}
	if( $i == 77){
		break;
	}

	if($i%2== 0){
			echo "O valor é  par: $i";
		echo "<hr>";


		}if( $i%2 !=0){
			continue;
			echo "O valor é  impar: $i";
		echo "<hr>";
		}if ($i % 5 == 0){
			
			echo "O valor é  mutiplo de 5: $i";
		echo "<hr>";
		}
		
}


?>

