<?php

//Funçoes exclusivas do php
function soma(int ...$valores)
{
    return array_sum($valores);
}

echo soma(4,6,9,7,5,8,9,9,3,4,1,5);
echo "<br>";
echo soma(4,5);
echo "<br>";
echo soma(4.5,5, 5);
echo "<br>";
