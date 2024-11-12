<?php


// Imprimir o número de letras a.


$stri = "O rato roeu a roupa do rei de roma";
$numdeA = 0;

for($i = 0; $i < strlen($stri); $i++) {
    if ($stri[$i] == 'a') {
        $numdeA++;
    }
}

echo $numdeA;