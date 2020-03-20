<?php require_once 'db.php';

function listeEmailAll(): array{
    $pdo = getPdo();
    $query = 'SELECT * FROM newsletter';
    $stmt = $pdo->prepare($query);// tjr préparé
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}