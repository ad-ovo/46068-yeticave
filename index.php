<?php

include_once('data.php');
include_once('functions.php');

date_default_timezone_set('Europe/Moscow');
$lot_time_remaining = "00:00";
$tomorrow = strtotime('tomorrow midnight');
$now = time();
$lot_time_remaining = gmdate('H:i:s', $tomorrow - $now);

$lot_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$data = [
    'lot_time_remaining' => $lot_time_remaining,
    'lot_categories' => $lot_categories,
    'lot_items' => $lot_items
];

?>

<?php

echo createTemplate('templates/header.php', $data);
echo createTemplate('templates/main-index.php', $data);
echo createTemplate('templates/footer.php', $data);

?>

