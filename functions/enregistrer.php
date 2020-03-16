<?php

function insertContact(
  string $nom,
  INT $annee_sortie,
  INT $nb_km
) {
    require_once 'prix.php';
    require_once 'pdo.php';
    $nom=$_POST['nom'];
    $annee_sortie=$_POST['annee_sortie'];
    $nb_km=$_POST['nb_km'];
    $prix=getPrix();
  $query = "INSERT INTO voiture (nom, annee_sortie, nb_km, prix, visible) VALUES ('$nom', '$annee_sortie', '$nb_km', '$prix', 0)";

  $stmt = $pdo->prepare($query);

  // On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE
  return $stmt->execute([
    'nom' => $nom,
    'annee_sortie' => $annee_sortie,
    'nb_km' => $nb_km,
    'prix' => getPrix()
  ]);
}