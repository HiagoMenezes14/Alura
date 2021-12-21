<?php

$conta1 =[
    'Titular' => 'Vinicius',
    'Saldo' => 1000,
];

$conta2 = [
    'Titular' => 'Maria',
    'Saldo' => 10000
];

$conta3 = [
    'Titular' => 'Alberto',
    'Saldo' => 300
];

$contasCorrrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrrentes); $i++){
    echo $contasCorrrentes[$i]['Titular'] . PHP_EOL;
}