
<form action="14.1.php" method="POST">
<input type="text" name="student">
<input type="submit">
</form>

<?php 
$grades=array("jim"=>"A+", "Pam"=>"B-", "Mike"=>"Z-","Jim"=>"b+",);
echo $grades[$_POST["student"]];
?>