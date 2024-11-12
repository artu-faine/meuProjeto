<?php

function parImpar ($a) {
    if($a % 2 === 0) {
        echo "$a é par.";
    } else {
        echo "$a é ímpar.";
    }
}

parImpar(7);