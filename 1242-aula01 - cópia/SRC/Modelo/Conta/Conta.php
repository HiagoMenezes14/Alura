<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) : void 
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferencia(float $valorATransferir, Conta $contaDestino) : void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }

    public function recuperarSaldo() : float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}