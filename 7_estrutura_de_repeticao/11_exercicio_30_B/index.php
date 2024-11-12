<?php

$a = [1,2];

$b = 3;

while($b <= 10) {
    array_push($a, $b);
    $b++;
}

print_r($a);

// solução do professor:

$arr = [];

for($i = 1; $i <= 10; $i++) {
    array_push($arr, $i);
}

print_r($arr);