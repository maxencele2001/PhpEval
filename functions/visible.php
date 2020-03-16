<?php


function getVisible(): array
{
  require_once "pdo.php";
  $stmt = $pdo->query("SELECT * FROM voiture WHERE visible=1");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
