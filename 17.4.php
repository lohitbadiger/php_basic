<?php 

$isMale=True;
$isTall=fALSE;


if($isTall && $isMale)
{
echo "your are Tall Boy *";
}
elseif ($isMale && $isTall) {
echo "You are Male But not Tall guy **";
}
elseif ($isMale || !$isTall) {
echo "You are tall boy ***";
}

else{
	echo "Your neigther Tall nor Boy ****";
	
}
?>