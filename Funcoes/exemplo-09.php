<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio : Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio : Gerente de vendas
                    'nome_cargo' => 'Gerente de Vendas',
                ) //Termino : Gerente de vendas
            ),
            //termino : Diretor Comercial
            //Inicio : Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                        //Inicio : Diretor Financeiro
                        'nome_cargo' => 'Gerente de contas Pagar',
                        'subordinados' => array(
                            //Inicio : Supervisor de paagamentos
                            'nome_cargo' => 'Supervisor de Pagamentos'
                        )
                        //Inicio : Supervisor de paagamentos
                    )   
                )
            //Termino : Diretor Financeiro
        ) 
    )
);

