<?php  


	echo "<pre>";

		$data =  "27/01/2018";

		var_dump(explode('/', $data));
		echo "<br>";

		$arrData = explode('/', $data);
		var_dump(implode('-', $arrData));

		echo "<hr>";

		$array = ['a', 'c', 'g', 'b', 'd'];
        print_r($array);

        asort($array);
        print_r($array);



        function cubo($nums){
        	return $nums * $nums * $nums;
        }


        $nums = [1,2,3];

        foreach ($nums as $nums) {
        	echo cubo($nums);
        	echo "<br>";
        }

        $cubo = array_map('cubo', $nums);

        print_r($cubo);


?>