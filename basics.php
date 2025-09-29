<?php

$name = "Buddy";
$age = 25;
$height = 5.9;
$isStudent = true;

echo "<h2>Variables & Data Types</h2>";
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Is Student? " . ($isStudent ? "Yes" : "No") . "<br><br>";

define("SITE_NAME", "My PHP Learning Site");

echo "<h2>Constants</h2>";
echo "Welcome to " . SITE_NAME . "<br><br>";

$a = 10;
$b = 3;

echo "<h2>Operators</h2>";
echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br><br>";

echo "<h2>Conditions</h2>";
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

echo "<h2>Loops</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}

$fruits = ["Apple", "Banana", "Orange"];
$person = ["name" => "Buddy", "age" => 25, "city" => "Chennai"];

echo "<h2>Arrays</h2>";
echo "Fruits:<br>";
foreach ($fruits as $fruit) {
    echo "- $fruit <br>";
}

echo "<br>Person Info:<br>";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": $value <br>";
}

echo "<h2>Functions</h2>";
echo "Length of 'Hello World' = " . strlen("Hello World") . "<br>";

function greet($who) {
    return "Hello, $who!";
}
echo greet("Buddy") . "<br><br>";

echo "<h2>Variable Scope</h2>";
$x = 5;

function testScope() {
    global $x;
    echo "Inside function, x = $x <br>";
}
testScope();
echo "Outside function, x = $x <br><br>";

echo "<h2>Superglobals</h2>";
echo "Your PHP script name is: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request method: " . $_SERVER['REQUEST_METHOD'] . "<br>";

?>
