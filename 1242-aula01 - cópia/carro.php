<?php

$carros1 = [
    'Marca' => 'Fiat',
    'Modelo' => 'Uno',
    'Placa' => 'DEL1234'
];
$carros2 = [
    'Marca' => 'VW',
    'Modelo' => 'Golf',
    'Placa' => 'BAR1830'
];
$carros3 = [
    'Marca' => 'Nisan',
    'Modelo' => 'nisan',
    'Placa' => 'TER1258'
];

$todosOsCarros = [$carros1, $carros2, $carros3];

for ($i = 0; $i < count($todosOsCarros); $i++) {
    echo $todosOsCarros[$i]['Marca'] . PHP_EOL . $todosOsCarros[$i]['Modelo'] .'<br/>';
}

