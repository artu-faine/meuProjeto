<?php

$str = "Alo";


//echo $str[0] . "<br>";

function vogais(string $a) {

    $arrVogais = [];

    foreach (str_split($a) as $arra) {

        if($arra == 'a' || $arra == 'e' || $arra == 'i' || $arra == 'o' || $arra == 'u' || $arra == 'A' || $arra == 'E' || $arra == "I" || $arra == 'O' || $arra == 'U') {
            array_push($arrVogais, $arra);

        }

    }
    return count($arrVogais);
}


$resultado = vogais("Andorinha");

echo $resultado;