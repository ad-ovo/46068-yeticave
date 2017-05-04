<?php

include_once ('data.php');
include_once ('functions.php');

$lot_item = '';
$lot_index = $_GET['id'];

foreach ($lot_items as $key => $value) {
    if ($value['id'] == $lot_index) {
        $lot_item = $value;
    }
}

if ($lot_item['id'] != $lot_index) {
    http_response_code(404);
    die();
}

$data = [
    'lot_categories' => $lot_categories,
    'bids' => $bids,
    'lot_item' => $lot_item
];

?>

<?= createTemplate('templates/globals/header.php', $data); ?>
<?= createTemplate('templates/content/lot.php', $data); ?>
<?= createTemplate('templates/globals/footer.php', $data); ?>
