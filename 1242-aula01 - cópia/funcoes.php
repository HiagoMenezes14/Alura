<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '</br>';
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("O valor não pode ser menor que zero");
    }
    return $conta;
}

function sacar(array $conta, float $valorASacar) : array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não tem saldo o suficiente!");
    }else{
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

 function titularComLetrasMaiusculas(array $titular)
{
    $conta['titular'] = mb_strtoupper($titular['titular']);    
}

function exibirContas(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}