<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/css_all.css">
</head>
<body>
<?php
require '../../model/BirthdayModel.php'; 
  ?>
  
<div class="container">
	<table border="1">
		<tr>
			<th id="table">#</th>
			<th id="table">Naam</th>
			<th id="table">Dag</th>
			<th id="table">Maand</th>
			<th id="table">Jaar</th>
			
		</tr>
		
		<?php foreach ($birthdays as $birthday) { ?>
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
	<a href="../birthday/create" class="button_index">Toevoegen</a>

</div>
</body>
</html>