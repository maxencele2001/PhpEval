<?php


function getNonVisible(): array
{
  require_once "pdo.php";
  $stmt = $pdo->query("SELECT * FROM voiture WHERE visible=0");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
