<?php
/* O require insere um outro arquivo em outro. Pode ser php, html ou outra linguagem.
/* Podendo usar tudo que está declarado no arquivo incluído;
/* Faz o mesmo que o include, com a diferença que gera erro fatal se o arquivo não existir, parando o script
*/
require "teste.php"
?>


<p> Arquivo do include</p>

<?php
# para acessar a pasta "funcao.php" foi preciso por o caminho da pasta até o arquivo. 
require "arquivos/funcao.php"

?>