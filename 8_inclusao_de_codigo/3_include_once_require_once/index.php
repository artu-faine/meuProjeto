<?php

# O require_once e include_once funcionam da mesma maneira, aenas impedem que o mesmo arquivo seja adicionado outra vez.


require_once "teste2.php";
require_once "teste2.php";

?>

<p> Testando o código </p>