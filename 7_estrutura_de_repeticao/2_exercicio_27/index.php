<?php

$a = [1, "dois", 3, "quatro", 5, "seis", 7, "oito", 9, "dez"];

$x = count($a);
$y = 0;

while($y < $x) {
    if(is_string($a[$y])) {
        echo $a[$y] . "<br>";

    }
    $y++;
}