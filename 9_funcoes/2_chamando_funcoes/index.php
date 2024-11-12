<?php

//Para chamar uma função basta colocar seu nome e abrir e fechar parênteses.
/* Exemplo: funcaoTeste()
O PHP tem diversas funções nativas dele como; strlen, strtoupper, strtolower, print_r, var_dump
*/
#Uma boa prátice é sempre definir as funções no com eço do arquivo PHP.


# Definindo uma função:
function soma() {

    $a = 5;
    $b = 9;
    echo $a + $b . "<br>";

}

# Chamando / Invocando uma função.
soma();

# função do PHP:
echo strtoupper("testando função");