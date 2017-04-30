<?php

function createTemplate($file_path, $data) {
    if(!!file_exists($file_path)) {
        foreach($data as $key => $value) {
            /*echo var_dump($value);
            echo var_dump($data[$value]);*/
            $data[$key] = validateXSSData($value);
            /*echo var_dump($data[$key]);*/
        }

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

    return htmlspecialchars($data);
}
