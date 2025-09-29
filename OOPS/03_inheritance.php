<?php
class Vehicle {
    public $brand;

    public function setBrand($brandName) {
        $this->brand = $brandName;
    }
}

class Bike extends Vehicle {
    public $model;

    public function setModel($modelName) {
        $this->model = $modelName;
    }
}

$bike = new Bike();
$bike->setBrand("Yamaha");
$bike->setModel("R15");

$brand = $bike->brand;
$model = $bike->model;

echo "Bike: " . $brand . ", Model: " . $model . "<br>";
