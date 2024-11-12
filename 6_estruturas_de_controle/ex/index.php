<?php
function compararNumeros($a, $b)
{

    if ($a > $b) {
        echo "O primeiro número é maior. <br>";
    } else if ($a < $b) {
        echo "O segundo número é maior <br>";
    } else
        echo "Os números são iguais";
}

compararNumeros(7, 2);
