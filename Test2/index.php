<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Test2</title>
</head>
<body>
	<div class="container">
		<h2>Форма загрузки и вывода csv</h2>
		<form action="" method="post">
			<label>Выберите csv файл:</label><br>
			<input type="file" value="1" name="file" accept=".csv" class="form-control required"><br>
			<input value="Отправить" type="submit" name="submit" class="btn btn-success"><br>
		</form>
	</div>
	<div class="container">
		<?php 
			if(isset($_POST['submit'])){
				$userFile = $_POST['file'];
				$res = [];
				if(($file = fopen($userFile, 'r')) !== false){
					$table = '<table class="table table-bordered table-responsive">';
					while(($data = fgetcsv($file, 1000, ";")) !== false){
						$res[] = $data;
						$table .= '<tr>';
						for($i = 0; $i < count($data); $i++){
							if($i === 0 || $res[1] < 1){
								$table .= '<th scope="row">'.$data[$i].'</th>';
							}else{
								$table .= '<td>'.$data[$i].'</td>';
							}
						}
						$table .= '</tr>';
					}
					$table .= '</table>';
					echo $table;
					fclose($file);
				}
			}
		?>
	</div>
</body>
</html>

