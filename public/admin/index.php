<?php 
require_once '../../layout/header.php'; 
require_once '../../functions/liste.php';

$listes = listeAll();
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listes as $liste) { ?>
      <tr>
        <td><?php echo $liste['id']; ?></td>
        <td><?php echo $liste['login']; ?></td>
        <td><?php echo $liste['email']; ?></td>
        <td><a href="/admin/modif.php?id=<?php echo $liste['id']; ?>" class="btn btn-dark">Modifier</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>


<?php // pas besoin de mettre de footer un admin n'a pas besoin de s'inscrire a une newsletter