<?= '<title>String</title>' ?>

<?php

    $nome  = "luiz de souza";

    $sobrenome = 'UBIRATAN';

    //Diferença de aspas duplas e aspas simples
    echo "meu nome é $nome </br>";
    echo 'meu nome é $nome </br>';

    //Mudar tudo para maiúsculo
    echo strtoupper($nome . '</br>');

    //Mudar tudo para minúsculo
    echo strtolower($sobrenome) . "</br>";

    //Mudar para maiúsculo primeira letra de cada palavra
    echo ucwords($nome) . "</br>";

    //Mudar para maiúsculo primeira letra da frase
    echo ucfirst($nome) . "</br>";
    //Trocar caractéres da string
    $nome = str_replace("e", "3", $nome);
    $nome = str_replace("a", "@", $nome);
    echo $nome; 
    //Descobrir posição palavra
    $frase = "A repetição e mãe da retenção";
    $palavra = strpos($frase , "mãe");
    var_dump($palavra);
    //Capturar  parte da frase
    $texto = substr($frase , 0 , $palavra);
    var_dump ($texto);

    $texto2 = substr($frase, $palavra + strlen($palavra), strlen($frase));
    var_dump ($texto2);


