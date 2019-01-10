<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
class Book{
var $title;
var $author;
var $pages;
}

$book1= new Book;
$book1->title="Harry Potter";
$book1->author="Not Potter";
$book1->pages=400;

echo $book1->author ."<br>";
echo $book1->pages ."<br>";
echo $book1->title ."<br>";
?>


<?php
 class Cinema{

	var $name;
	var $year;
	var $collection;


}
$film1=new Cinema;

$film1->name="joly rid ";
$film1->year=1900;
$film1->collecton="jdsadsaoly rid"; 

echo $film1->name."<br> <hr>";
echo $film1->year."<br>";
echo $film1->collecton."<br>";


?>
</body>
</html>