<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getArchiByID = getArchiByID($pdo, $_GET['architectID']); ?>
	<form action="core/handleForms.php?architectID=<?php echo $_GET['architectID']; ?>" method="POST">

		<div class="archiContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getArchiByID['firstName']; ?></p>
			<p>Last Name: <?php echo $getArchiByID['lastName']; ?></p>
			<p>Email Address: <?php echo $getArchiByID['emailAddress']; ?></p>
			<p>Contact Number: <?php echo $getArchiByID['contactNumber']; ?></p>
			<p>Gender: <?php echo $getArchiByID['gender']; ?></p>
			<p>License Number: <?php echo $getArchiByID['licenseNumber']; ?></p>
			<p>Specialization: <?php echo $getArchiByID['specialization']; ?></p>
			<input type="submit" name="deleteArchiBtn" value="Delete">
		</div>
	</form>
</body>
</html>