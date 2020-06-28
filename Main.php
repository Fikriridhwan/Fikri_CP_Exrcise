<?php 
include ('Shape.php');
include ('Square.php');
include ('Rectangle.php');
include ('Triangle.php');
include ('Circle.php');
include ('Trapezoid.php');
include ('Rhombus.php');
include ('Kite.php');
include ('Parallelogram.php');

$square = new Square(4,4);
$rectangle = new Rectangle(4,6);
$circle = new Circle(4,4);
$triangle = new Triangle(4,8);
$trapesium = new Trapezoid(4,8,12);
$kite = new Kite(4,12);
$rhombus = new Rhombus(4,8);
$parallelogram = new Parallelogram(12,4);

echo $square->result()."<br>".
$rectangle->result()."<br>".
$circle->result()."<br>".
$triangle->result()."<br>".
$trapesium->result()."<br>".
$kite->result()."<br>".
$rhombus->result()."<br>".
$parallelogram->result()."<br>";

?>