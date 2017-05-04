<?php

function createTemplate($file_path, $data) {
    if(!!file_exists($file_path)) {
        $data = validateXSSData($data);

        ob_start();
        extract($data);
        require_once($file_path);
        ob_get_flush();
    }

    return '';
}

function validateXSSData($data) {
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            $data[$key] = validateXSSData($value);
        }
        return $data;
    }

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

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
