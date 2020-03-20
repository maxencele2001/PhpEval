<?php 
require_once '../../layout/header.php'; 
require_once '../../functions/listeNews.php';

$listes = listeEmailAll();
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listes as $liste) { ?>
      <tr>
        <td><?php echo $liste['ID']; ?></td>
        <td><?php echo $liste['email']; ?></td>
        <td><td><a href="/admin/delete.php?id=<?php echo $voiture['ID']; ?>" class="btn btn-danger">Supprimer</a></td></td>
      </tr>
    <?php } ?>
  </tbody>
</table>


<?php // pas besoin de mettre de footer un admin n'a pas besoin de s'inscrire a une newsletter