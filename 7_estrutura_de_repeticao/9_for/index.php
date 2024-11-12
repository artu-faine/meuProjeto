<?php

$j = 0;

$nome = "Matheus";


// O for ja tem seu contador, condição e incremeento definidos em seu parâmetro.
for($i = 0; $i < 10; $i++) {
    if($i == 4) {
        echo "$nome <br>";
    }
    echo "Testando for $i <br>";
}