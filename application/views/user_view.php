<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>User View</title>
</head>
<body>

	<?php 

		// echo $results;
		foreach ($results as $object) {
			
			echo $object->username . "<br>";
		}
	?>
</body>
</html>