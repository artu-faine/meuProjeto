<?php

$x = [10, 20 ,30 ,40 ,50 ,60 , 70, 80, 90, 100];

$y = 0;

while($y <= 9) {
    if($y == 2 || $y == 3) {
        $y++;
        continue;
    }
    echo $x[$y] . "<br>";
    $y++;
}