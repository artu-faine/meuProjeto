<?php

// $str = 48;

// $j = str_split($str);



// var_dump($j);

function sumDigits(int $num) {

    $arr = [];
    $arrayNum = str_split($num); 

    foreach($arrayNum as $eleArrayNum) {
        $int = (int) $eleArrayNum;
        array_push($arr, $int);

   }
   return array_sum($arr);

}

echo sumDigits(55);

// $a = 48;

// $b = str_split($a);

// $c = [];

// foreach($b as $bb) {
//     $d = (int) $bb;
//     array_push($c, $d);
// }

// var_dump($c);