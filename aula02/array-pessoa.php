<?php 

		$pessoas = [

			 [

				'nome' =>  'Sandro',
				'sobrenome' => 'Bastos',
				'idade' => 40,
				'peso' => 80,
			],
			
			[

				'nome' =>  'Karina',
				'sobrenome' =>  'Bastos',
				'idade' => 37,
				'peso' => 55,
			],

			[

				'nome' =>  'Fernanda',
				'sobrenome' => 'Bastos',
				'idade' => 9,
				'peso' => 28,
			],

			 [

				'nome' =>  'Isabelle',
				'sobrenome' => 'Bastos',
				'idade' => 5,
				'peso' => 18,
			],

		];

		echo "Nome das Pessoas";
		echo "<br>";
		echo "<br>";

		foreach ($pessoas as $pessoa) {
			
				echo $pessoa['nome'] . " ". $pessoa['sobrenome'];
			echo "<br>";
			
			
		}
		echo "<hr>";
		echo "Idades das Pessoas";
		echo "<br>";
		echo "<br>";

		foreach ($pessoas as $pessoa) {
			
				echo $pessoa['idade'] ;
			echo "<br>";
			
			
		}

echo "<hr>";
		echo "Maior que 18 anos";
		echo "<br>";
		echo "<br>";

		foreach ($pessoas as $pessoa) {
			if ($pessoa['idade'] > 18 ) {
				echo $pessoa['nome'] . " ". $pessoa['sobrenome']. " " . $pessoa['idade'];
			echo "<br>";

			}
			
		}

echo "<hr>";

		echo "Peso menor igual a 18";
		echo "<br>";
		echo "<br>";

		foreach ($pessoas as $pessoa) {
			if ($pessoa['peso'] <= 18) {
			echo $pessoa['nome'] . " ". $pessoa['sobrenome']. " " . $pessoa['peso'];
			echo "<hr>";

			
			}
		}


		




 ?>