<?php
require_once __DIR__ . '/../database/database.php';

// se nella chiamata http c'è la chiave genre con un valore filtro l'array jsonDiscs
if (array_key_exists('genre', $_GET) && !empty($_GET['genre'])) {
  $query = strtolower($_GET['genere']);
  $dischi = array_filter($dischi, function ($keyValue) use ($query) {
        return (strpos(strtolower($keyValue['genre']),$query)!== false);
    });
}

header('Content-Type: application/json');
// traduco in json l'array discs
$jsonDiscs = json_encode($discs);
echo $jsonDiscs;
