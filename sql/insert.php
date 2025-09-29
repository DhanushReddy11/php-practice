<?php
include 'db.php'; 

// Insert Users
$conn->query("INSERT INTO users (firstname, lastname, email) VALUES
    ('John', 'Doe', 'john@example.com'),
    ('Jane', 'Smith', 'jane@example.com')");

// // Insert Categories
// $conn->query("INSERT INTO category (cat_name) VALUES
//     ('Electronics'),
//     ('Stationery'),
//     ('Clothing')");

// // Insert Products
// $conn->query("INSERT INTO product (name, quantity, cost, Category_id) VALUES
//     ('Laptop', 10, 50000, 1),
//     ('Phone', 20, 25000, 1),
//     ('Pen', 100, 10, 2),
//     ('Shirt', 50, 700, 3),
//     ('Pencil', 200, 5, NULL)");

echo "Sample data inserted successfully";

$conn->close();
?>
