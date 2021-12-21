<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$novoEndereco = new Endereco('carapicuiba', 'cohab 2', 'manaus', '54' );
$testewe = new Titular(new CPF('123.125.369-78'),'testewe', $novoEndereco);
$primeiraConta = new Conta($testewe);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . '</br>';
echo $primeiraConta->recuperaCpfTitular() . '</br>';
echo $primeiraConta->recuperarSaldo() . '</br>';

$teste12 = new Titular(new CPF('987.654.321-82'), 'teste12', $novoEndereco);
$segundaConta = new Conta($teste12);
$segundaConta->depositar(800);
$segundaConta->sacar(400);

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$eConta = new Conta($patricia);
var_dump($eConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();


echo $segundaConta->recuperarSaldo() . '</br>';
echo Conta::recuperaNumeroDeContas() . '</br>';
echo $novoEndereco->recuperaBairro() . '</br>';