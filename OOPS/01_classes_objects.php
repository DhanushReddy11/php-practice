<?php
class Car {
    public $brand;
    public $color;

    public function display() {
        echo "Brand: $this->brand, Color: $this->color<br>";
    }
}
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";
$myCar->display();
?>