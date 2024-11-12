<?php

$a = 4;

while($a < 30) {
    echo "O A é $a <br>";
    if($a === 24) {
        break;
    }
    $a += 2;
}