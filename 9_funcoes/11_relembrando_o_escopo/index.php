<?php


# A variável "$a" tem um valor no escopo global e outrpo no escopo local.

$a = 10;

$b = 15;

function testeEscopo() {
    $a = 5;

    global $b;

    static $c = 0;

    $a++;
    $b++;
    $c++;

    echo "ESCOPO LOCAL DE A: $a. <br>";
    echo "ESCOPO BLOBAL B NA FUNÇÃO: $b. <br>";
    echo "ESCOPO STATIC DE C: $c. <br>";
}


testeEscopo();
echo "ESCOPO GLOBAL DE A: $a. <br>";
echo "ESCOPO GLOBAL DE B FORA DA FUNÇÃO: $b <br>";

testeEscopo();
