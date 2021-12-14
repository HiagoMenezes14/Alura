<?php

$carros = [
    'TRO-1234' => [
        'Marca' => 'Fiat',
        'Modelo' => 'Uno',
    ],
    'EMP-7895' => [
        'Marca' => 'VW',
        'Modelo' => 'Golf',
    ],
    'PLA-4568' => [
        'Marca' => 'Nisan',
        'Modelo' => 'nisan'
    ]
];

foreach ($carros as $placa => $carro){
    echo $placa . " " . $carro['Modelo']. ' ' . $carro['Marca'] . '</br>';
}

