<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widht=divice-width, initial-scale=1.0">
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$name = $_POST['nama'];
		echo $name;
		$addres = $_POST ['alamat'];
		echo "</br>";
		echo $addres;
	}
	?>
</body>
</html>