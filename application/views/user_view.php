<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>User View</title>
</head>
<body>

	<?php 

		foreach ($results as $object) {
			
			echo $object->id . "<br>";
		}
	?>
</body>
</html>