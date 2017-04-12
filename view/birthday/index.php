<title>Calendar</title>
<link rel="stylesheet" type="text/css" href="../../public/css/css_all.css">	
	<div class="container">
		<table border="1">
			<tr>
				<th id="table">#</th>
				<th id="table">Naam</th>
				<th id="table">Dag</th>
				<th id="table">Maand</th>
				<th id="table">Jaar</th>
				<th colspan="2">Actie</th>
				
			</tr>	
				
			<?php 
			 $birthdays = array();
			 foreach ($birthdays as $birthday) { ?>
			<tr>
				<td><?= $birthday['id']; ?></td>
				<td><?= $birthday['person']; ?></td>
				<td><?= $birthday['day']; ?></td>
				<td><?= $birthday['month']; ?></td>
				<td><?= $birthday['year']; ?></td>
				<td><a href="<?= URL . 'birthday/edit/' .$birthday['id'] ?>">Edit</a></td>
				<td><a href="<?= URL . 'birthday/delete/' . $birthday['id'] ?>">Delete</a></td>
			</tr>
			<?php } ?>

		</table>
		<a href="../birthday/create" class="button_index">Toevoegen</a>

	</div>
	</body>
	</html>