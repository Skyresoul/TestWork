<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test4</title>
</head>
<body>
	
	<?php
		$sql = 'SELECT user.id, user.firstName, user.lastName, city.city FROM `user` JOIN `city` ON user.city = city.id';
	?>

</body>
</html>