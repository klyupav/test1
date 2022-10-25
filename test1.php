<?php

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

/*
 * Реализовать интерфейс для пребразования data1 <=> data2
 */
interface IArrayUtil {

    /*
     * Преобразования ключ/значение в многомерный ассоциативный массив
     */
    public static function data_decode(array $data): array;

    /*
     * Кодирование ассоциативного многомерного массива в key/value
     */
    public static function data_encode(array $data): array;
}
