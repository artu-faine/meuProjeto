<?php

$idade = 12;

echo "A idade é $idade <br>";

#Não foi necessário fechar a tag php pois neste arquivo só existe php.
# Para acessar um arquivo que está numa pasta anterior é preciso informar o firetório como o "__DIR__" e o "." e o caminho para o arquivo.
include __DIR__ . "/../testando.php";