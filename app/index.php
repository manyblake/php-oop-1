<?php

include __DIR__ . "/data.php";

$data = [
  'success' => true,
  'response' => $movies
];

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($data);
