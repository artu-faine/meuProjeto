<?php

//$a = [1, 2, 3, "Arthur"];
//$j = count($a);


$arr = [];
for ($a = 0; $a <= 10; $a++) {
    array_push($arr, $a);
}

// print_r($arr);

// function sumEvenNumbers($f) {

//     $arrRetorno = [];
//     for($k = 1; $k < count($f); $k++) {
//         if ($f[$k] % 2 === 0){
//             array_push($arrRetorno, $f[$k]);
//             }
//     }
//     return $arrRetorno;
// }
// print_r(sumEvenNumbers($arr));



function sumEvenNumbers(int $f) {

    $arrRetorno = [];
    for($k = 1; $k <= $f; $k++) {
        if ($k % 2 === 0){
            array_push($arrRetorno, $k);
            }
    }
    return array_sum($arrRetorno);
}
print_r(sumEvenNumbers(10));