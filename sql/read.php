<?php
include 'db.php';

echo "<h3>Users Table</h3>";
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo $row['id']." | ".$row['firstname']." | ".$row['lastname']." | ".$row['email']."<br>";
}

echo "<h3>Products Table</h3>";
$result = $conn->query("SELECT * FROM product");
while ($row = $result->fetch_assoc()) {
    echo $row['id']." | ".$row['name']." | ".$row['quantity']." | ".$row['cost']." | ".$row['Category_id']."<br>";
}

echo "<h3>Category Table</h3>";
$result = $conn->query("SELECT * FROM category");
while ($row = $result->fetch_assoc()) {
    echo $row['cat_id']." | ".$row['cat_name']."<br>";
}

$conn->close();
?>
