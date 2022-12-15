<?php

require __DIR__.'/vendor/autoload.php';

$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];

$data2 = [
    'parent' => [
        'child' => [
            'field' => 1,
            'field2' => 2,
        ],
    ],
    'parent2' => [
        'child' => [
            'name' => 'test',
        ],
        'child2' => [
            'name' => 'test',
            'position' => 10,
        ],
    ],
    'parent3' => [
        'child3' => [
            'position' => 10,
        ],
    ],
];


$util = new \App\ArrayUtil();

$result1 = $util->decodeData($data1);

var_dump($data1, $result1);

$result2 = $util->encodeData($data2);

var_dump($data2, $result2);
