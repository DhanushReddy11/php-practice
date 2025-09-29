<?php

echo "<br>6. Constructor & Destructor<br>";

class User {
    public $name;

    function __construct($name) {
        $this->name = $name;
        echo "User $name created<br>";
    }

    function __destruct() {
        echo "User $this->name destroyed<br>";
    }
}

$user = new User("Alice");


echo "<br>7. \$this pointer<br>";

class Person {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$person = new Person();
$person->setName("Bob");
echo $person->getName() . "<br>";


echo "<br>8. Static members<br>";

class Counter {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$counter1 = new Counter();
$counter2 = new Counter();
echo "Total objects: " . Counter::getCount() . "<br>";


echo "<br>9. Friend function<br>";

class Box {
    private $content = "Secret";

    public function reveal() {
        return $this->content;
    }
}

$box = new Box();
echo $box->reveal() . "<br>";
