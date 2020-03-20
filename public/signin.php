<?php require_once '../layout/header.php'; 
require_once '../functions/db.php';?>


<form method="POST">
    <div class="container">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login ..." />
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" />
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe ..." />
  </div>
  <div class="form-group">
    <label for="password">Confirmation mot de passe</label>
    <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmation ..." />
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</div>
</form>
<?php
function inscrire(string $login, string $password, string $email): bool
{
  $pdo = getPdo();// recup de ma bdd
  
  $query = "INSERT INTO users (login, password, email) VALUES (:login, :password, :email)";// formule pour l'ajout
  $stmt = $pdo->prepare($query);
  return $stmt->execute([
    'login' => $login,
    'password' => password_hash($password, PASSWORD_BCRYPT, ['cost'=> 10]),
    'email' => $email
  ]);
}
?>
<?php if(!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])){// si l'utilisateur a tout rempli, ajout à la bdd
    if ($_POST['password'] == $_POST['password2']){// verif que les 2 mdp coincident
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $ajout= inscrire($login,$password,$email);
    }
}
?>



<?php require_once '../layout/footer.php'; ?>