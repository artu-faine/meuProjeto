<?php


$x = 10; //global

echo "$x global <br>";


function teste()
{
    $x = 5; //local

    echo "$x local <br>";
}

teste();

echo "$x global <br>";

teste();

function testando()
{
    $x = 12;

    echo "$x local 2 <br>";
}



$x = 99;

testando();

teste();

echo "$x global <br>";
