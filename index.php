<?php
// устанавливаем часовой пояс в Московское время
date_default_timezone_set('Europe/Moscow');

// записать в эту переменную оставшееся время в этом формате (ЧЧ:ММ)
$lot_time_remaining = "00:00";

// временная метка для полночи следующего дня
$tomorrow = strtotime('tomorrow midnight');

// временная метка для настоящего времени
$now = time();

// далее нужно вычислить оставшееся время до начала следующих суток и записать его в переменную $lot_time_remaining
$lot_time_remaining = gmdate('H:i:s', $tomorrow - $now);

$lot_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$lot_items = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '10999',
        'imgUrl' => 'img/lot-1.jpg'
    ], [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '159999',
        'imgUrl' => 'img/lot-2.jpg'
    ], [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => '8000',
        'imgUrl' => 'img/lot-3.jpg'
    ], [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => '10999',
        'imgUrl' => 'img/lot-4.jpg'
    ], [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => '7500',
        'imgUrl' => 'img/lot-5.jpg'
    ], [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => '5400',
        'imgUrl' => 'img/lot-6.jpg'
    ]
];

$data = [
    'lot_time_remaining' => $lot_time_remaining,
    'lot_categories' => $lot_categories,
    'lot_items' => $lot_items
];

include_once('functions.php');

?>

<?php

echo createTemplate('templates/header.php', $data);
echo createTemplate('templates/main-index.php', $data);
echo createTemplate('templates/footer.php', $data);

?>

