<?php

$x = 0;

while($x < 10) {
    echo "O x é o " . $x . "<br>";
    $x++;
}
echo "Agora com o break: <br>";

$x = 0;
while($x < 10) {
    echo "O x é o $x" . "<br>";
    if($x === 5) {
        break;
    }
    $x++;
}