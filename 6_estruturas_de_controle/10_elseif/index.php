<?php

// primeiro caso entrou no if
if (10 > 5) {

    echo "Entrou no If <br>";
} else if (10 > 6) {

    echo "Entrou no else if <br>";
}


// segundo caso ntrou no else if
if (10 < 5) {

    echo "Entrou no If <br>";
} else if (10 > 6) {

    echo "Entrou no else if <br>";
}

// terceiro caso entrou no else
if (10 < 5) {

    echo "Entrou no If <br>";
} else if (10 < 6) {

    echo "Entrou no else if <br>";
} else {
    echo "Entrou no else <br>";
}



// terceiro caso entrou no segundo else if
if (10 < 5) {

    echo "Entrou no If <br>";
} else if (10 < 6) {

    echo "Entrou no else if <br>";
} else if (10 > 6) {

    echo "Entrou no segundo else if <br>";
} else {

    echo "Entrou no else <br>";
}
