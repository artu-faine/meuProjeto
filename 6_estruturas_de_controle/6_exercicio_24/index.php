<?php

$a = 21;
$b = "Teste";
$c = true;

if (is_int($a)) {
    echo "É inteiro <br>";
} else {
    echo "Não é inteiro <br>";
}

if (is_int($b)) {
    echo "É inteiro <br>";
} else {
    echo "Não é inteiro <br>";
}

if (is_int($c)) {
    echo "É inteiro <br>";
} else {
    echo "Não é inteiro <br>";
}

$peso = 20;

if ($peso > 80) {
    echo "Pesado demais. <br>";
} else {
    echo "Peso dentro do limite";
}
