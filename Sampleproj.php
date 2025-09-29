<!-- <?php

$name = "Alice";
$age = 20;
$marks = [85, 90, 78, 92, 88];

define("SCHOOL", "Greenwood High");




echo "<h2>Report Card</h2>";
echo sprintf("I study at %s", SCHOOL);
echo "Name: $name <br>";
echo "Age: $age <br>";

$isPass = true;
echo "Boolean Example: " . ($isPass ? "True" : "False") . "<br>";

echo "Uppercase Name: " . strtoupper($name) . "<br>";

$total = array_sum($marks);
$count = count($marks);
$average = $total / $count;
echo "Total Marks: $total <br>";
echo "Average: $average <br>";
echo "Square Root of Average: " . sqrt($average) . "<br>";
echo "The Random Number is" .rand()."<br>";


if ($average >= 90) {
    $grade = "A+";
} elseif ($average >= 75) {
    $grade = "A";
} elseif ($average >= 60) {
    $grade = "B";
} else {
    $grade = "C";
}
echo "Grade: $grade <br>";

switch($grade) {
    case "A+": echo "Excellent!<br>"; break;
    case "A": echo "Very Good!<br>"; break;
    case "B": echo "Good<br>"; break;
    default: echo "Needs Improvement<br>";
}

echo "<h3>Marks in each subject:</h3>";
foreach ($marks as $index => $mark) {
    echo "Subject " . ($index + 1) . ": $mark <br>";
}

function getResult($avg) {
    return $avg >= 50 ? "Pass" : "Fail";
}

echo "<br>Final Result: " . getResult($average);
?> -->
<!-- <form method="post">
  Enter name: <input type="text" name="username">
  <input type="submit">
</form>

<?php
if ($_REQUEST["username"]) {
    echo "Hello, " . $_REQUEST["username"];
}
?> -->
