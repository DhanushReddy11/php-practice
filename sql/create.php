<?php
include 'db.php'; 

$conn->query("DROP TABLE IF EXISTS product");
$conn->query("DROP TABLE IF EXISTS category");
$conn->query("DROP TABLE IF EXISTS users");

$sql1 = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";
$conn->query($sql1);

$sql2 = "CREATE TABLE category (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    cat_name VARCHAR(50) NOT NULL
)";
$conn->query($sql2);

$sql3 = "CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    quantity INT,
    cost FLOAT,
    Category_id INT,
    FOREIGN KEY (Category_id) REFERENCES category(cat_id)
)";
$conn->query($sql3);

$conn->query("INSERT INTO category (cat_name) VALUES ('Electronics'), ('Stationery'), ('Clothing')");
$conn->query("INSERT INTO product (name, quantity, cost, Category_id) VALUES
    ('Laptop', 10, 50000, 1),
    ('Phone', 20, 25000, 1),
    ('Pen', 100, 10, 2),
    ('Shirt', 50, 700, 3),
    ('Pencil', 200, 5, NULL)
");

echo "Tables created and data inserted successfully";

$conn->close();
?>
