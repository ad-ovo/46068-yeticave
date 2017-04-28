<?php

    function createTemplate($file_path, $data) {
        if(!!file_exists($file_path)) {
            foreach($data as $key) {
                $data[$key] = htmlspecialchars($key);
            }

            ob_start();
            extract($data);
            include_once($file_path);
            ob_get_flush();
        }

        return '';
    }

?>
