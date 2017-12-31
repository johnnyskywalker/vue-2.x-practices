<?php

$lucky_number = mt_rand(1, 10000);
sleep(2);

if ($lucky_number % 6 == 0) {
    header('HTTP/1.1 403 Forbidden');
    die('403');
} else {
    echo json_encode([
        'result' => true,
        'str' => $lucky_number,
        'timestamp' => date('c')
    ]);
}