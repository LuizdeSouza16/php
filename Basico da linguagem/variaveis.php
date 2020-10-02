<?php 

    $nome = 'Luiz';
    $sobrenome = 'Souza';
    echo "Nome - {$nome}, Sobrenome - {$sobrenome} </br>";

    
    $nome .= " ". $sobrenome;
    echo "$nome </br>";

    $frutas = array ("abacaxi", "laranja", "manga", "Uva");
    //echo $frutas[3];

    $nascimento = new DateTime();

    //var_dump($nascimento);
    /////////////////////////////////

    $arquivo = fopen("index.php", "r");

    //var_dump($arquivo);

    $nulo = null;

    $vazio  = '';

    var_dump($null);
    var_dump($vazio);