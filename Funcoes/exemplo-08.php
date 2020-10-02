<?php

//Funçoes exclusivas do php
function soma(float ...$valores) : float  
{
    return array_sum($valores);
}

echo var_dump(soma(4,6,9,7,5,8,9,9,3,4,1,5));
echo "<br>";
echo soma(4,5);
echo "<br>";
echo soma(4.5,5);
echo "<br>";
