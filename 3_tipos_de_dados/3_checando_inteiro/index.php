<?php


if (is_int(5)) { //true
    echo "É um número inteiro 2 <br>";
}


if (is_int("Não é um número inteiro")) { //false
    echo "É um número inteiro <br>";
}


$a = 10;


if (is_int($a)) { //true
    echo "É um número inteiro 3 <br>";
}
