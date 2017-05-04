<?php

include_once ('data.php');
include_once ('functions.php');

$lot_item = [
    'name' => $_POST['name'],
    'category' => $_POST['category'],
    'description' => $_POST['description'],
    'rate' => $_POST['rate'],
    'img' => $_FILES['img'],
    'step' => $_POST['step'],
    'due-date' => $_POST['due-date']
];

$add_error = [

];


    /*foreach ($lot_item as $key) {
        if (isset($_POST[$key])) {
            $lot_item[$key] = $_POST[$key];
            if ($lot_item[$key] == '') {
            }
        }
    }*/



if (isset($_POST['lot-send'])) {

  //  $lot_item = validateXSSData($lot_item);

    foreach ($lot_item as $key) {
        if (empty($lot_item[$key])) {

        }

       // var_dump($_POST[$key]);

        $lot_item[$key] = validateXSSData($lot_item[$key]);
        $lot_item[$key] = $_POST[$key];

        // var_dump($lot_item);
    }

    if (isset($lot_item['img'])) {
        $upload_dir = 'img/$lot_item[\'img\'][\'name\']';
        move_uploaded_file($lot_item['img']['tmp_name'], $upload_dir);
    }


}


$data = [
    'lot_item' => $lot_item
];

$lot_item = array_filter($lot_item);

?>

<?=createTemplate("templates/globals/header.php", []);?>

<?php if (!empty($lot_item)): ?>
<?=createTemplate("templates/content/lot.php", $data);?>
<?php else: ?>
<?=createTemplate("templates/content/add-lot.php", []);?>
<?php endif; ?>

<?=createTemplate("templates/globals/footer.php", []);?>

