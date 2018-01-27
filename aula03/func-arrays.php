<?php

    echo "<pre>";

    $senha = '123';

    print_r(md5($senha));
    echo "<br>";

    print_r(md5($senha));
    echo "<br>";
    
    print_r(md5($senha));
    echo "<br>";
    
    print_r(md5($senha));
    echo "<br>";
    
    print_r(md5($senha));
    echo "<br>";


    echo "<hr>";

    $senha = '123';


    print_r(sha1($senha));
    echo "<br>";

    print_r(sha1($senha));
    echo "<br>";
    
    print_r(sha1($senha));
    echo "<br>";
    
    print_r(sha1($senha));
    echo "<br>";
    
    print_r(sha1($senha));
    echo "<br>";


    echo "<hr>";

    $senha = '123';


    print_r(hash( 'md5', $senha));
    echo "<br>";

    print_r(hash( 'md5', $senha));
    echo "<br>";
    
    print_r(hash( 'md5', $senha));
    echo "<br>";
    
    print_r(hash( 'md5', $senha));
    echo "<br>";
    
    print_r(hash( 'md5', $senha));
    echo "<br>";


    echo "<hr>";



    $pass = '202cb962ac59075b964b07152d234b70';
    $senha = '123';

    if ($pass === md5($senha)) {
        echo "logado";


    }

    $pass = md5($senha);
    $cesar = $pass;





?>




<?php

 $data = "27/01/2018";
 var_dump(explode('/', $data));
 echo "<br>";

 echo "<hr>";
 $arrData = explode('/', $data);
 var_dump(implode('', $arrData));
 

 echo "<br>";

 echo "<hr>";
 
$array = ['a' , 'c' , 'g' , 'b' , 'd'];
print_r($array);
echo "<br>";
asort($array);
echo "<br>";
print_r($array);
echo "<hr>";


$array = ['a' => 0 , 'c' => 1, 'g'=> 2, 'b' => 3 , 'd' => 4];

print_r($array);
echo "<br>";
ksort($array);
echo "<br>";
print_r($array);
echo "<hr>";

$array = ['a' , 'c' , 'g' , 'b' , 'd'];
print_r($array);
echo "<br>";
sort($array);
echo "<br>";
print_r($array);
echo "<hr>";


$nomes = ['Maria' , 'Igor' , 'Josefina'];
sort($nomes);
echo "<br>";
print_r($nomes);
echo "<hr>";


function cubo($num){
    return $num * $num * $num;
}


$nums = [1,2,3];


foreach ($nums as $num) {
    echo cubo($num);
    echo "<br>";
}


$cubo = array_map('cubo' , $nums);

/*$quadrado = array_map(function($num){

    return $num * $num;

}, $num);*/

print_r($cubo);
//print_r($quadrado);
echo "<hr>";


function par($num){
    return ($num % 2 == 0) ? $num : '';

}

function impar($num){
    return ($num % 2 != 0) ? $num : '';

}

$vetor = [1,2,3,4];

echo "Pares: <br>";
print_r(array_filter($vetor,'par'));
echo "<br>";
echo "Impares : <br>";
print_r(array_filter($vetor,'impar'));

echo "<hr>";



$chaves = [1,2,3];
$valores = ['a','b','c'];
$array = array_combine($chaves, $valores);

print_r($array);

echo"<hr>";

$arr1 = ['a','b','v'];
$arr2 =['b','a','c'];

$diff = array_diff($arr1, $arr2);

print_r($diff);


$arr1 = [
        "cor",
        "0" => 2,
        "1" => 5
    
    ];
    $arr2 = ["nome" => 'Igor', 10];


    $merger = array_merge($arr1 ,$arr2);

    print_r($merger);

    echo"<hr>";

    $pessoa = ['nome' => '4linux' , 'idade' => 11];

    if (in_array(11, $pessoa)) {
        echo 'encontrou';
    }

    echo"<hr>";

    $arr = [1,2,3,2,5,4];
    $unico = array_unique($arr);
    print_r($unico);

    echo"<hr>";


    $arr = ['aaaaa' => 'a' , 'bbbbbb' => 'b'];
    $unico = array_unique($arr);
    print_r($unico);

    echo"<hr>";
    $arr = [1,2,3,2,5,4];
    echo count($arr);

    echo"<hr>";
    foreach ($arr as $num) {
        echo $num . '<br>';
    }
    echo"<hr>";
    for ($i=0; $i < count($arr); $i++) {
        echo $arr[$i]."<br>";
    }
    echo"<hr>";

    /*$arr = [

            'Luke'
            'Leia',
            'Han Solo',
            ['Vader' , 'Kylo Ren']

    ];*/

