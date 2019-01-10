<?php

// echo max(3,5); I have already this function in php 
function getMax($num1, $num2, $num3)

{
	if($num1 >= $num2 ==$num3)
	{
		return $num1;
	}
elseif($num2>= $num1 && $num2 !=$num3)
{
return $num2;
}

else{
	return $num3;
}
}

echo getMax(10,200,2100);
?>