<?php
require_once 'pdo.php';
 if (!empty($_POST)) {
  $nom = $_POST['nom'];
  $anne_sortie = $_POST['annee_sortie'];
  $nb_km = $_POST['nb_km'];
  $prix = getPrix();


  //$isActive = $_POST['is_active'];

  $query = "INSERT INTO voiture (nom, annee_sortie, nb_km, prix, visible) VALUES ('$nom', '$annee_sortie', '$nb_km', $prix, 0)";

  $stmt = $pdo->query($query);

  if (!$stmt) {
    // Je collecte l'erreur
    $err = $pdo->errorInfo();
    // J'affiche le message contenu dans l'erreur
    echo "Une erreur est survenue lors de l'enregistrement de l'utilisateur : " . $err[2];
  } else {
    echo "Utilisateur enregistré";
  }
}

?>