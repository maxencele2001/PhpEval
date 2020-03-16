<?php require_once 'layout/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification formulaire</title>
</head>
<body>
<header>
<?php require_once 'layout/header.php' ?>
</header>

<form method="POST">
<div class="container mt-4">
  <div class="form-group">
    <label for="voiture">Nom de la voiture</label>
    <input type="text" class="form-control" id="voiture" aria-describedby="voitureHelp" placeholder="Marque">
  </div>
  <div class="form-group">
    <label for="annee">Année</label>
    <input type="text" class="form-control" id="annee" placeholder="Mise en circulation">
  </div>
  <div class="form-group">
    <label for="km">Nombre de kilomètres</label>
    <input type="text" class="form-control" id="km" placeholder="... en km">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="visible">
    <label class="form-check-label" for="exampleCheck1">Visible</label>
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</div>



<footer>
<?php require_once 'layout/footer.php' ?>
</footer>
</body>
</html>