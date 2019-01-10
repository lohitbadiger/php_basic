<?php

$word="Lohith is soo good in TeACHING";

echo strtoupper($word);

echo "<br>";

echo strtolower($word);

echo "<br>";
echo (strtotime("now") . "<br>");

echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));


echo "<hr>";
echo str_repeat("Lohith ", "10");
echo "<hr>";
echo str_replace("Lohith ", " kota", $word);

echo "<hr>";
echo substr($word, 7); 

echo "<hr>";
echo substr($word, 10  );
echo "<hr>";

echo substr($word, 10, 3 );

echo "<hr>";
echo substr($word, 1,6);

?>