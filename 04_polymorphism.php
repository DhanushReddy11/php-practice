<?php
class Math {
    public function add($a, $b, $c = 0) {
        $sum = $a + $b + $c;
        return $sum;
    }
}

$mathObject = new Math();

$result1 = $mathObject->add(2, 3);
echo $result1 . "<br>";   // 5

$result2 = $mathObject->add(2, 3, 4);
echo $result2 . "<br>";   // 9


class Animal {
    public function sound() {
        echo "Some sound<br>";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Bark<br>";
    }
}

$dog = new Dog();
$dog->sound();
