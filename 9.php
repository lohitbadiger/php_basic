<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Small Calculator</title>
</head>
<body>

	Enter number
	<br>
	<form action="9.php" method="get">
	<input type="number" name="num1">
	<br>
	<input type="number" name="num2">
	<br>

	<input type="submit">
	</form>
	Answer:
	<?php echo $_GET["num1"] + $_GET["num2"];

	?>
	
</body>
</html>