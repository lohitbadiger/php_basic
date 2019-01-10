<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<form method="POST" action="19.php">

First Num:<input type="number" step ="0.1" name="num1">
<br><br>
Second Num:<input type="number" step ="0.1"  name="num2"><br><br><br>
OP:<input type="text" name="op"><br><br><br>

<input type="submit">



</form>
<?php
$num1= $_POST["num1"];
$num2= $_POST["num2"];
$op= $_POST["op"];

if($op=="+"){
	echo $num1+$num2;

}
elseif($op=="-"){
	echo $num1-$num2;

}
elseif($op=="*"){
	echo $num1*$num2;

}
elseif($op=="/"){
	echo $num1/$num2;

}
else{
	echo "invalid Operator";
}

?>

</body>
</html>