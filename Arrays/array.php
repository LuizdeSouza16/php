<?= '<title>Arrays</title>' ?>
<?php 
    $frutas = array("Laranja", "Abacaxi" , "Melancia");
    //Print_r exibe arrays
    //print_r($frutas);

    //Array de uma dimensão é um vetor
    //Array bidemensional
    $carros[0][0]  = "GM";
    $carros[0][1]  = "Cobalt";
    $carros[0][2]  = "Onix";
    $carros[0][3]  = "Camaro";
echo "</br>";
    $carros[1][0]  = "Ford";
    $carros[1][1]  = "Fiesta";
    $carros[1][2]  = "Fusion";
    $carros[1][3]  = "EcoSport";

    //print_r($carros);
    //echo end($carros[0]);

    $pessoas = array();
    array_push($pessoas, array(
        'nome' => 'Joao',
        'idade' => 20
    ));

    array_push($pessoas, array(
        'nome' => 'Marcelo',
        'idade' => 25
    ));

    array_push($pessoas, array(
        'nome' => 'Jonas',
        'idade' => 30
    ));
print_r($pessoas);
    echo $pessoas[1]['nome'];