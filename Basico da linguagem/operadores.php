<?php 
    //Atribuição
    $nome = "Luiz";

    //Concatenação
    echo $nome . " exemplo de concatenação </br>";

    //Operador composto de concatenação
    $nome .=" Ubiratan";
    echo $nome."</br>";

    //Valor de atribuição acresentativa
    $valorTotal = 0;

    $valorTotal += 100;

    $valorTotal += 25;

    echo $valorTotal . "</br>";
     //Valor de atribuição descontativa
    $valorTotal -= 25;

    $valorTotal *= .7;
    
    echo $valorTotal. "</br>";

    //Operadores Aritiméticos
    $numero = 10;
    $numero2 = 2;

    //Soma 
    echo $numero + $numero2. "</br>";
    
    //Subtração
    echo $numero - $numero2. "</br>";

    //Divisao
     echo $numero / $numero2. "</br>";

    //Multiplicação 
    echo $numero * $numero2. "</br>";
    
    //Modulo 
    echo $numero % $numero2. "</br>";

    //Potencia 
    echo $numero ** 2 . "</br>";

    $a = 55.0;
    $b = 55;
    //Comparação Maior 
    var_dump($a > $b);

    //Comparação Menor 
    var_dump($a < $b);


    //Comparação igualdade 
    var_dump($a == $b);

    //Comparação igualdade de tipo de variavel 
    var_dump($a === $b);

    //Comparação diferente 
    var_dump($a != $b);

    $a = 35;
    $b = 60;

    //Comparação spacechip 
    var_dump($a <=> $b);

    $a = null;
    $b = 9;
    $c = 10;
    echo $a ?? $b ?? $c;
    //Operador de incremento
    $a = 10;
    echo '</br>'.$a++ . '</br>';
    echo $a. '</br>';

   
?>
    <?= "olá mundo"; ?>