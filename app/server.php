<?php
require_once __DIR__ . '/../database/database.php';

// traduco in json l'array php discs
$jsonDiscs = json_encode($discs);
header('Content-Type: application/json');

var_dump($jsonDiscs);
