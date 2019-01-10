<?php

class first{

	var $cloths;
	var $food;
	var $school;

function __construct($name){
// echo "<br>New <br>";
	echo "<br>$name";
}
}
$first1= new first("kota=>");

$first1->cloths="Red";
$first1->food="pink";
$first1->school="Spice";

echo $first1->cloths;
echo $first1->school;

$first2= new first("rek");

$first2->cloths="Red2";
$first2->food="pink2";
$first2->school="Spice2";

echo $first2->cloths;
echo $first2->school;
?>