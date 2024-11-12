<?php

$arr = [];

for($a = 10; $a <= 20; $a++) {
    array_push($arr, $a);
}

print_r($arr);
echo "<br>";
$b = 0;

for($b = $arr[$b]; $b <= 20; $b++) {
    if($b % 2 != 0){
    echo $b . "<br>";
    }
}
echo "<br>";

// Solução do professor:

$arrr = [];

for($i = 10; $i <= 20; $i++) {
    array_push($arrr, $i);
}

print_r($arrr);
echo "<br>";

for($i = 0; $i < count($arrr); $i++) {
    if($arr[$i] % 2 != 0) {
        echo "Número ímpar: $arr[$i] <br>";
    }
}