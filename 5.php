<?php

$bmw = [
    'model'  => 'X5',
    'speed'  => 120,
    'doors'  => 5,
    'yaer'   => '2015',
];

$toyote = [
    'model'  => 'Corolla',
    'speed'  => 140,
    'doors'  => 4,
    'yaer'   => '2020',
];

$opel = [
    'model'  => 'Astra',
    'speed'  => 180,
    'doors'  => 3,
    'yaer'   => '2010',
];

$cars = [
    'bmw' => [
        'model'  => 'X5',
        'speed'  => 120,
        'doors'  => 5,
        'yaer'   => '2015',
    ],

    'toyota' => [
        'model'  => 'Corolla',
        'speed'  => 140,
        'doors'  => 4,
        'yaer'   => '2020',
    ],

    'opel' => [
        'model'  => 'Astra',
        'speed'  => 180,
        'doors'  => 3,
        'yaer'   => '2010',
    ],
];

foreach ($cars as $model => $brand) {
    echo 'CAR ' . $model . '<br>';
    if (is_array($brand)) {
        foreach ($brand as $key) {
            echo $key . ' ';
        }
    }
    echo '<br>';
}