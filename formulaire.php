<?php require_once 'layout/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
</head>
<body>
<header>
    <?php require_once 'layout/header.php' ?>
</header>

<form method="POST">
<div class="container mt-4">
  <div class="form-group">
    <label for="nom">Nom de la voiture</label>
    <input type="text" class="form-control" id="nom" aria-describedby="nomHelp" placeholder="Marque">
  </div>
  <div class="form-group">
    <label for="annee_sortie">Année</label>
    <input type="text" class="form-control" id="annee_sortie" placeholder="Mise en circulation">
  </div>
  <div class="form-group">
    <label for="nb_km">Nombre de kilomètres</label>
    <input type="text" class="form-control" id="nb_km" placeholder="... en km">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>
<?php require_once 'functions/enregistrer.php';?>
<footer>
    <?php require_once 'layout/footer.php' ?>
</footer>
</body>
</html>