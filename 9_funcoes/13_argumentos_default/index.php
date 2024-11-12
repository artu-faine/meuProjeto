<?php

# Parâmetros default são parâmetros padronizados, que já possuem um vaslor padrão semprecisar declará-lo na chamada da função.
# Quando um parâmetro é declarado na chamada, e esse parâmetro é um default, o valor declaro será retornado preferencialmente.

function teste($a = "teste <br>") {
    echo $a;
}

teste();

teste("asd <br>"); # Valor declarado teve preferência.

function testando ($b, $a = "x") {

    echo "O valor de a é: $a e o de b é: $b <br>";
}

testando("1");# Quando há 2 parâmetros e um é default, o único parâmetro declarado será o valor do parâmetro não definido.
testando("1","2"); # Quando os 2 parâmetros sõa declarados na chamada, as duas declarações terão preferência.

# Uma boa prática é sempre deixar os argumentos default por último na função ppois só assim o PHP vai entender.

