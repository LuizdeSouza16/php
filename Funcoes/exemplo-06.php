<?php

$data =  array(
    'nome' => 'Joao',
    'idade' => 20
);

foreach ($data as &$value){
    if (gettype($value) === 'integer') {
        $value +=10;
    }
    
    echo $value. "<br>";
}