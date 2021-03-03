<?php
require_once __DIR__ . '/../database/database.php';

// se nella chiamata http c'è la chiave genre con un valore filtro l'array discs
if (array_key_exists('genre', $_GET) && !empty($_GET['genre'])) {
  // filtro ogni disco all'interno di $discs e ritorno solo quelli il cui genere ha come valore $_GET['genre'], ossia il genere selezionato dall'utente
  $discs = array_filter($discs, function($disc) {
    return (strpos($disc['genre'], $_GET['genre']) !== false);
  });
  if (count($discs) === 0) {
    http_response_code(400);
  }
}

header('Content-Type: application/json');
// traduco in json l'array discs
$jsonDiscs = json_encode($discs);
echo $jsonDiscs;
