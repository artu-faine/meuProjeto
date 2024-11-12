<?php
/* Função com parâmetro:
Os parÂmetrso são como variáveis, que são utilizados dentro da função para moldar uam execução.
Não há número máximo de parâmetros.

Ex: function teste($param, $param2) {
// código
}

*/

function velocidadeMaxima($vel) {
    if(is_int($vel)) {
    echo "O carro atinge a velocidade máxima de $vel km/h. <br>";

} else {
    echo "Por favor, insira um número inteiro. <br>";
}
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

# O PHP retorna erro fatal se chamar uma função sem o parâmetro estabelecido.
# Ex: velocidadeMaxima()

echo "Teste continuando <br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

# O PHP ignora o parâmetro desbecessário que não foi pré-estabelecido.
velocidadeMaxima(250, "Teste");

velocidadeMaxima("teste");

# Dois parâmetros:
function descreverAnimal($nome, $raca) {
    echo " O $nome é da raça $raca. <br>";
}

descreverAnimal('Bob', 'Pastor');