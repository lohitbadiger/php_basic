<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<form action="10.php" method="GET">

<input type="text" name="name"><br>
<input type="text" name="color"><br>
<input type="text" name="actor"><br>
<input type="submit">
</form>
<?php 
$color=$_GET["color"];
$name=$_GET["name"];
$actor=$_GET["actor"];



echo "Lorem ipsum dolor sit $name <br>";
echo "Lorem ipsum dolor sit $color<br>";
echo  "Lorem ipsum dolor sit $actor";
?>
 </body>
</html>