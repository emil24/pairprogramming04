<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style>
		#description {
			width: 50%;
			height: 250px;
		}
		#submit {
			width: 150px;
		}
	</style>
</head>
<body>
	<div class="container">
		
		<form action="" method="POST" class="form-group" id="inputForm">
			<input type="text" name="description" class="form-control" id="description">
			<input type="file" name="image" class="form-control" id="submit">
			<input type="submit" name="submit" value="Submit" class="form-control btn btn-success" id="submit">
		</form>
		
	</div>
</body>
</html>

<?php 
	include '../config.php';
	if (isset($_POST['submit'])) {
		$text = $_POST['description'];
		$sectionName = $_GET['section'];
		$sql = "UPDATE admin SET text='$text' WHERE sectionName='$sectionName'";
		$query = mysqli_query($conn, $sql);
		var_dump($query);
	}

?>