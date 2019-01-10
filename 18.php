<?php

// echo max(3,5); I have already this function in php 
function getMax($num1, $num2)
{
	if($num1 >$num2)
	{
		return $num1;
	}


else{
	return $num2;
}
}

echo getMax(100,20);
?>