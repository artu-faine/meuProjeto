<?php

// $nom = ['carro' => 600, 'roda' => 69];

// print_r($nom);



function menosq10($carro) {

    $arr = [$carro => 7000, 'brin' => 9];
    $arr2 = [];
    foreach($arr as $item => $preço) {
        if ($preço < 10) {
            array_push($arr2, $item);
        }
    }
    return $arr2;

}

print_r(menosq10('carro'));