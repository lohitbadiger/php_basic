<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="13.php" method="POST">
		Apple:<input type="checkbox" name="fruits[]" value="apples"><br>
		Oranges:<input type="checkbox" name="fruits[]" value="Oranges"><br>
		Pears:<input type="checkbox" name="fruits[]" value="Pears"><br>
		<input type="submit">
		


	</form>

<?php
$fruits=$_POST["fruits"];
echo $fruits[2];

	?>
</body>
</html>