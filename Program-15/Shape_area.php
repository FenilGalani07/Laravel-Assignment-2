<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Area counter </title>
</head>
<body>
    
</body>
</html>

<?php

abstract class Shape {


    abstract public function calculateArea();
}




class Circle extends Shape {
    private $radius;


    public function __construct($radius) {
        $this->radius = $radius;
    }


    public function calculateArea() {
        return pi() * pow($this->radius, 2); // Area = π * r^2
    }
}



class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
$circleArea = $circle->calculateArea();


$rectangle = new Rectangle(4, 7);
$rectangleArea = $rectangle->calculateArea();


echo "<h2>Area Calculations:</h2>";
echo "Area of Circle with radius 5: " . number_format($circleArea, 2) . " square units<br>";
echo "Area of Rectangle with width 4 and height 7: " . number_format($rectangleArea, 2) . " square units<br>";


?>
