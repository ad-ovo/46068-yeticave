<?php

$page_title = 'DC Ply Mens 2016/2017 Snowboard';

$bids = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

function getTime($ts) {
    $time_diff = (time() - $ts) / 3600;

    switch ($time_diff) {
        case $time_diff >= 24:
            $bid_time = date('d.m.y' . ' в ' . 'H:i', $ts);
            break;
        case $time_diff < 1:
            $bid_time = date('i' . ' минут назад');
            break;
        default:
            $bid_time = date('H' . ' часов назад');
    }

    return $bid_time;
}

$data = [
    'page_title' => $page_title,
    'bids' => $bids
];

include_once('functions.php');

?>

<?php

echo createTemplate('templates/header.php', $data);
echo createTemplate('templates/main-lot.php', $data);
echo createTemplate('templates/footer.php', $data);

?>
