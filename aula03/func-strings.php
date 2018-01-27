<?php

    echo "<prev>";

    var_dump(empty(0));

    var_dump(empty(1));


        $nome = '4Linux';


        if (!empty($nome)) {
            
            echo $nome;

        }else{
            echo "Preencha o nome: ";

        }

        echo "<hr>";

        var_dump(isset($idade));


        $pessoa = ['nome' => 'Igor'];

        var_dump(isset($pessoa['idade']));

        var_dump(is_int('$num'));

        echo "<hr>";

        
        



 ?>
func-string.php


<?php

echo "<prev>";


$artilheiro = "Ronaldo";
$gols = 9;

$texto = 'O artilheiro do campionato, %s tem %d gols';

printf($texto,$artilheiro,$gols);

echo "<hr>";

$selecao = 'Brasil';
        var_dump(isset(($selecao)));
        unset($selecao);
        var_dump(isset($selecao));

        echo "<hr>";

        $msg = sprintf($texto,$artilheiro,$gols);

        echo $msg;

        echo "<hr>";

        $texto = 'Ola mundo';

        echo str_replace('Olá', 'Tchau', $texto);

        echo "<hr>";

        $msg = "Olá";

        echo str_replace('á', 'a', $msg);

        echo "<hr>";

        //$msg = "olá menino $pessoa[nome]";

        /*if($pessoa['sexo'] == 'f'){
            $msg =    str_replace('menino', 'menina', $msg);

        }

        echo $msg;*/


        $string = '    PHP      ';
        var_dump($string);
        var_dump(trim($string));

        echo "<hr>";
        $string = 'ola mundo';
        echo ucfirst($string);

        echo "<hr>";
        $string = 'ola mundo';
        echo ucwords($string);

        echo "<hr>";
        $string = 'ola mundo';
        echo lcfirst($string);
        echo "<hr>";
        


        $email = 'linux@linux.com';
        $domino = strstr($email,'@');
        echo $domino;
        
        echo "<br>";
        $user = strstr($email, '@' , true);
        echo $user;

        echo "<hr>";
        $string = 'Ola Mundo!!     ';
        echo strlen(trim($string));

        echo "<hr>";

        $string = "123456789";
        $procurar = "a";

        $pos = strpos($string, $procurar);

        var_dump($pos);

        echo "<hr>";
        echo "<br>";
        $string = '123456789';
        $qtd = strlen($string) - 2;
        echo substr($string,0,-strlen($string) - 2);

        


?>