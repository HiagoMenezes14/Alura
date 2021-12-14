<?php

require_once 'SRC/Conta.php';
require_once 'SRC/Titular.php';
require_once 'SRC/CPF.php';


$testewe = new Titular(new CPF('123.125.369-78'),'testewe');
$primeiraConta = new Conta($testewe);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . '</br>';
echo $primeiraConta->recuperaCpfTitular() . '</br>';
echo $primeiraConta->recuperarSaldo() . '</br>';

$teste12 = new Titular(new CPF('987.654.321-82'), 'teste12');
$segundaConta = new Conta($teste12);
$segundaConta->depositar(800);
$segundaConta->sacar(400);

echo $segundaConta->recuperarSaldo() . '</br>';
echo Conta::recuperaNumeroDeContas();