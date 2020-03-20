<?php require_once '../../layout/header.php';
require_once '../../functions/db.php' ?>

<form method="POST">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login" value="<?php echo $liste['login']; ?>" />
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Année de sortie..." value="<?php echo $liste['email']; ?>" />
  </div>
  <div class="form-group">
    <label for="password">Ancien mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe"/>
  </div>
  <div class="form-group">
    <label for="password2">Nouveau mot de passe</label>
    <input type="password" class="form-control" id="password2" name="password2" placeholder="Mot de passe"/>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<?php
function modifUser($liste):bool{
    $pdo=getPdo();
    $id = $liste['id'];
    $login = $liste['login'];
    $email = $liste['email'];
    $password = $liste['password'];

    $query = "UPDATE users SET login = :login, email = :email, password = :password WHERE id = :id";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([
        ':login' => $login,
        ':email' => $email,
        ':password' => $password,
        ':id' => $id
    ]);
}

if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])){
    $modif = modifUser($liste);
}