<?php

# O func_get_arg cria um array com o nome dos argumentos passados na função
# O func_num_args retorna o número de parâmetros numa função.
function soma($a, $b) {

    print_r(func_get_argS());
    echo "<br>";

    echo func_num_args() . "<br>";

    return $a + $b;
}

soma(2, 4);