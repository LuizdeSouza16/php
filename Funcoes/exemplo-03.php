<?php

function ola($texto= "Mundo", $periodo = "Bom dia")
{
    return "Olá {$texto}! ${periodo}! <br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola('Luiz', "Boa tarde");
echo ola('Marcelo', '');
