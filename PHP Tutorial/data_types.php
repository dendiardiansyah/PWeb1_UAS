<!DOCTYPE html>
<html>
<body>

<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<?php  
$x = 5985;
var_dump($x);
?>  

<?php  
$x = 10.365;
var_dump($x);
?>  

<?php 
$x = true;
var_dump($x);
?>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<?php
$x = 5;
$x = (string) $x;
var_dump($x);
?>

</body>
</html>
