
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
<!-- in the beginning it will be showing error
once we submit it will show you the ans -->
<form action="8.php" method="GET">


Name<br>
 <input type="text" name="username">
<br>

Age<br>
<input type="text" name="age">

<br>
<br>
<input type="submit" value="Submit">

</form>

<br> 

Your name is:<?php echo $_GET["username"] ?>
<br>
Your age is: <?php echo $_GET["age"]?>
</body>
</html>
