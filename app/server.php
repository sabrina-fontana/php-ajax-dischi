<?php
require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json');
// traduco in json l'array php discs
$jsonDiscs = json_encode($discs);

echo $jsonDiscs;
