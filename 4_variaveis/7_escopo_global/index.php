<?php

$teste = "asd";

echo "$teste global 1 <br>";

if (5 > 2) {
    $teste = "dsa";

    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function funcao()
{
    $teste = "xsxx";

    echo "$teste local <br>";
}

funcao();

function testandoGlobal()
{
    global $teste;

    $teste = 2;

    echo "$teste global função <br>";
}

testandoGlobal();

echo "$teste global 3 <br>"; //o valor da variável global foi mudado dentro de uma função local.
