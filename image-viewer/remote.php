<?php

// 自行準備圖片集
$image_set = [
    'images/set_1/*.jpg',
    'images/set_2/*.png'
];

$files = glob($image_set[1]);
sort($files);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($files);
return false;