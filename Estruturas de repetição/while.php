<?= '<title>Estrutura While</title>' ?>
<?php
$condicao = true;
while ($condicao) {
    $numero = rand(1, 10);
    if ($numero === 3) {
        echo "Número TRÊS </br>";
        $condicao = false;
    }else{
        echo "Número é {$numero} <br>";
        $condicao = true;
    }
}
?>