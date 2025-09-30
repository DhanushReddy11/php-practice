<?php
include 'db.php';

$conn->query("DROP TABLE IF EXISTS product_log");
$sql = "CREATE TABLE product_log (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    action VARCHAR(20)
    
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'product_log' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->query("DROP TRIGGER IF EXISTS after_product_insert");

$sql = "CREATE TRIGGER after_product_insert
AFTER INSERT ON product
FOR EACH ROW
BEGIN
    INSERT INTO product_log (product_id, action) 
    VALUES (NEW.id, 'New Product Added');
END";

if ($conn->query($sql) === TRUE) {
    echo "Trigger 'after_product_insert' created successfully<br>";
} else {
    echo "Error creating trigger: " . $conn->error . "<br>";
}

$conn->close();
?>
