<?php

//condição verdadeira
if (5 > 2) {

    echo "Deu certo! Entrou no if 1. <br>";
}

//condição falsa
if (5 < 2) {

    echo "Não vai entrar no if. <br>";
}


//utilizar op. lógico
if (10 === 10 && 9 > 3) {
    echo "Deu certo! Entrou no if 2. <br>";
}

// Variáveis
$a = 10;
$b = 5;

$c = "Deu certo! Entrou no if 3. <br>";

if ($a >= $b) {
    echo $c . "<br>";
}
