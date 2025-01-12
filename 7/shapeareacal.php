<?php
class Shape {
    public function calculateArea() {
        return "Area calculation is not defined for this shape.";
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

$circle = new Circle(7);
echo "Area of Circle: " . $circle->calculateArea();
?>
