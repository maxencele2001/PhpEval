<?php require_once 'db.php';

function listeAll(): array{
    $pdo = getPdo();
    $query = 'SELECT * FROM users';
    $stmt = $pdo->prepare($query);// tjr préparé
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}