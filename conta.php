<?php

function criarConta(string $cpf, string $nomeTitular, floate $saldo) : array
{
    return [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo
        ]
    ];
}