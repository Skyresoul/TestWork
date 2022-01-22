<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Test3</title>
</head>
<body>
	<div class="container">
		<h1>Сумма натуральных чисел кратные 3 или 5</h1><br>
		<form action="" method="post">
			<label>Введите число:</label><br>
			<input name="number"  type="number" class="form-control required"><br>
			<input value="Открыть" type="submit" name="submit" class="btn btn-success"><br>
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$num = $_POST['number'];
		$sum = 0;
		for ($i = 0; $i < $num; $i++){
			if($i % 3 == 0 || $i % 5 == 0){
				$sum = $sum + $i;
			}
		}
		echo "<br><div class='container'><h3>Сумма чисел равна: $sum</h3></div>";
	}
?>