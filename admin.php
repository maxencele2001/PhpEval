
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<header>
<?php require_once 'layout/header.php' ?>
</header>
<form>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="visible">
    <label class="form-check-label" for="exampleCheck1">Visible</label>
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<?php if (!isset($_POST['visible'])) {
    $visible = 0;
    getNonVisible();
  } else {
    $visible = 1;
    getVisible();
  }
?>

<footer>
<?php require_once 'layout/footer.php' ?>
</footer>
</body>
</html>