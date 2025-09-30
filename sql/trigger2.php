<?php
include 'db.php';

$sql = "INSERT INTO product (id, name, quantity, cost, Category_id) 
        VALUES (NULL, 'Laptop', 10, 55000, 1)";
if ($conn->query($sql) === TRUE) {
    echo "New product inserted successfully<br>";
} else {
    echo "Error inserting product: " . $conn->error . "<br>";
}

echo "<h3>Products Table</h3>";
$result = $conn->query("SELECT * FROM product");
while ($row = $result->fetch_assoc()) {
    echo $row['id']." | ".$row['name']." | ".$row['quantity']." | ".$row['cost']." | ".$row['Category_id']."<br>";
}

echo "<h3>Product Log Table</h3>";
$result = $conn->query("SELECT * FROM product_log");
while ($row = $result->fetch_assoc()) {
    echo $row['log_id']." | ".$row['product_id']." | ".$row['action']."<br>";
}

$conn->close();
?>
