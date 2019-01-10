
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
<!-- in the beginning it will be showing error
once we submit it will show you the ans -->
<form action="7.php" method="GET">


Name: <input type="text" name="This_name_should_be_GET_Value">

<input type="submit" value="Submit">

</form>

<br> 

Your name is:<?php echo $_GET["This_name_should_be_GET_Value"] ?>
</body>
</html>
