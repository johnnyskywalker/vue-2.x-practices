<?php

$files = glob("images/set_1/*.jpg");
sort($files);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($files);
return false;