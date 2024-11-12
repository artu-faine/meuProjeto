<?php


$arrr = ['alface', 'tomate', 'shampoo'];

function a($b) {
    foreach ($b as $c) {
        if ($c == $b[count($b) - 1]){
            echo $c . "<br>";
        } else {
        echo $c . ', ';
        }   
    }
}

a($arrr);

