<?php  


	$soma =  function(){
		return 2 +2; 
	};

$msn = "Olá";

$func = function($a) use ($msn){
	$msn = "hello";
	echo $msn.$a;
};

echo $msn;
echo "<hr>";

$func('Mundo');
echo "<hr>";




?>