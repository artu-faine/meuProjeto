<?php

// O foreach é um loop que interage apenas com arrays. Ele faz um iteração com os elementos do array.
$nomes = ["Matheus", "João", "Pedro", "Maria"];

$a = 10;

foreach($nomes as $nome) {
    echo "O índice está no $nome <br>";
    if($nome == "Matheus") {
        echo "Opa $a <br>";
    }
}