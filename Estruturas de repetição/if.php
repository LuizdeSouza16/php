<?= '<title>Estrutura IF</title>' ?>

<?php
    
    $minhaidade = 16;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $melhorIdade = 65;
    //Estrutura basica do if
    
    if($minhaidade < $idadeCrianca){
        echo "Criança";
    }else if($minhaidade < $idadeMaior){
        echo "adolescente";
    }else if($minhaidade < $melhorIdade){
        echo "Adulto";
    }else{
        echo "Idoso";
    }
    echo "</br>";
    //Operador ternário
    echo ($minhaidade < $idadeMaior) ? "Menor de idade" : "Maior de idade";