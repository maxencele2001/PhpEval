<?php
require_once '../layout/header.php';
require_once '../functions/db.php';
require_once '../functions/redirect.php';

$pdo = getPdo();
$login = ""; // Quoi qu'il arrive, $login sera toujours initialisée à une chaîne vide
$verif = false;

if (!empty($_POST['login']) && !empty($_POST['password'])) {// bien y mettre en post sinon les identifiants apparaissent dans l'url
  session_start(); // formule pour initialiser une session
  $password = $_POST['password'];
  $login = $_POST['login'];
  // Une fois l'utilisateur a rentre ses coordonnees on les assigne a nos variables, la plus importante étant le login qu'on va chercher dans la bdd et qu'on peut afficher sur les pages pour vérifier que c'est bel et bien cet user qui est co

  $query = "SELECT * FROM users WHERE login = :login"; // chercher une correspondance dans la bdd
  $stmt = $pdo->prepare($query);// tjr préparé c'est mieux
  $stmt->execute([
    'login' => $login
  ]);

  $row = $stmt->fetch(PDO::FETCH_ASSOC);// on ne veut que la ligne de mon utilisateur

  if ($row && password_verify($password, $row['password']) && $active == 1) {
    $_SESSION['state'] = 'connected';
    $_SESSION['user_id'] = $row['ID'];
    redirect('/public'); // l'utilisateur est connecté et est redirigé la ou il a les droits
  } else {
    $verif = true; // si il n'a pas reussi a se connecter $verif devient true et active le if qui suit pour l'en informer
  }
}
?>

<h1>Connexion</h1>
<h4>Mets les bons identifiants bogoss</h4>

<?php if ($verif) { ?>
  <div class="alert alert-danger" role="alert">
    Mauvais identifiants bogoss
  </div>
<?php } ?>

<form method="POST">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login..."/>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe..." />
  </div>
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>








<?php require_once '../layout/footer.php';