<?php
# Exibição de conteúdo mais curta, que serve apenas para impressão de algo de forma rápida e prática
/* "<?= 'Conteúdo'; ?> */
$nome = "Matheus";
$sobrenome = "Battisti";
?>

<form action = "">
    <div>
        <input type="text" value ="<?= $nome; ?>">
    </div>
    <div>
        <input type= "text" value="<?= $sobrenome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

