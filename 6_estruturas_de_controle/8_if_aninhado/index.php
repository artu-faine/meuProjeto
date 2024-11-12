<?php


if (10 < 20) {
    echo "Entrou no primeiro if <br>";

    if ("teste" == "teste") {
        echo "Entrou no segundo if. <br>";
    }
}

if (10 < 20) {
    echo "Entrou no primeiro if <br>";

    if ("teste" != "teste") {
        echo "Entrou no segundo if. <br>";
    } else {
        echo "Entrou no else 2. <br>";
    }
}

$escopo = "variável global";


if (10 < 20) {
    echo "Entrou no primeiro if <br>";

    if ("teste" == "teste") {
        echo "Entrou no segundo if. <br>";
        echo $escopo;
    } else {
        echo "Entrou no else 2.";
    }
}
