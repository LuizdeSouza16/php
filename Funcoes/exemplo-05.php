<?php
$a = 10;

//passagem do valor por referência
function trocaValor(&$a)
{
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo "$a";