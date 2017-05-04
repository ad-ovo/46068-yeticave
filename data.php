<?php

$bids = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$lot_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$lot_items = [
    [
        'id' => '1',
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '10999',
        'rate' => '',
        'img' => 'img/lot-1.jpg',
        'description' => ''
    ], [
        'id' => '2',
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '159999',
        'rate' => '',
        'img' => 'img/lot-2.jpg',
        'description' => ''
    ], [
        'id' => '3',
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => '8000',
        'rate' => '',
        'img' => 'img/lot-3.jpg',
        'description' => ''
    ], [
        'id' => '4',
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => '10999',
        'rate' => '',
        'img' => 'img/lot-4.jpg',
        'description' => ''
    ], [
        'id' => '5',
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => '7500',
        'rate' => '',
        'img' => 'img/lot-5.jpg',
        'description' => ''
    ], [
        'id' => '6',
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => '5400',
        'rate' => '',
        'img' => 'img/lot-6.jpg',
        'description' => ''
    ]
];

?>
