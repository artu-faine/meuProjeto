<?php

#do while faz o mesmo q o while, só muda a estrutura.
$j = 0;
$teste = "Matheus";

do {
    echo "Testando do while $j <br>";
    if($j == 2) {
        echo "$teste <br>";
    }
    $j++;
} while ($j < 10);

