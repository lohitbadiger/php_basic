<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<form action="20.php" method="POST">

Grade:<input type="text" name="grade" placeholder="Enter Grade">

<input type="submit">
	</form>

	
<?php
$grade=$_POST["grade"];


switch ($grade) {
	case 'A':
		echo "You Did Well In Exams";
		break;
	
	case 'B':
		echo "You done pretty well";
		break;

	case 'C':
		echo "Need Improvement";
		break;

	case 'F':
		echo "You Failed In Exams";
		break;

	default:
		echo  "Please Enter Valid Grade Again";
		break;
}

	?>
</body>
</html>