<?php

$x = 1;

while($x <= 10) {
    echo "Loop EXTERNO $x <br>";
    // segundo contador
    $j = 1;
    while($j <= 5) {
        echo "loop interno $j <br>";
        $j++;
    }
    $x++;
}