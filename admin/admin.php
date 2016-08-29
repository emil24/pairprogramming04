<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="container text-center">
		<h2>Admin Panel</h2>

		<table class="table table-bordered">
			<thead>
				<th class="text-center">Section Name</th>
				<th class="text-center">Action</th>
			</thead>
			<tbody>
				<?php
					$sections = ['home', 'logo', 'startup', 'technology', 'statistics', 'features', 'updates', 'prices', 'feedback', 'team', 'launch', 'contacts'];
					for ($i = 0; $i < sizeof($sections); $i++) {
						?>
						<tr class="text-center">
							<td><?= strtoupper($sections[$i])?></td>
							<td>
								<a value="On/Off" class="btn btn-success">On/Off</a>
								<a href="update.php?<?= 'section=' . $sections[$i]?>" value="Update" class="btn btn-success">Update</a>
							</td>

						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>