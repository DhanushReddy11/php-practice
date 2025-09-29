<?php
interface Shape {
    public function draw();
}

class Circle implements Shape {
    public function draw() {
        echo "Drawing Circle\n";
    }
}

class Rectangle implements Shape {
    public function draw() {
        echo "Drawing Rectangle\n";
    }
}

$c = new Circle();
$r = new Rectangle();

$c->draw();
$r->draw();
?>
