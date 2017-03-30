<!DOCTYPE html>
<html>
<head>
  <title>index</title>
  <meta charset="utf-8">
</head>
<body>


<div class="container">
  <table border="1">
    <tr>
      <th>#</th>
      <th>Voornaam</th>
      <th>Achternaam</th>
      <th>Geslacht</th>
      <th colspan="2">Actie</th>
    </tr>
    
    <?php foreach ($calendar as $birthday) { ?>
    <tr>
      <td><?= $birthday['birthday_id']; ?></td>
      <td><?= $birthday['birthday_person']; ?></td>
      <td><?= $birthday['birthday_day']; ?></td>
      <td><?= $birthday['birthday_month']; ?></td>
      <td><?= $birthday['birthday_year']; ?></td>
      <td><a href="<?= URL ?>birthday/edit/<?= $birthday['birthday_id'] ?>">Edit</a></td>
      <td><a href="<?= URL ?>birthday/delete/<?= $birthday['birthday_id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>

  </table>

    <a href="<?= URL ?>../calendar/view/birthday/create">Toevoegen</a>
</div>

</body>
</html>