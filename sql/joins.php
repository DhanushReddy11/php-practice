<?php
include 'db.php'; 

echo "<h3>INNER JOIN (Products with Category)</h3>";
$sql = "SELECT p.name, c.cat_name 
        FROM product p 
        INNER JOIN category c ON p.Category_id = c.cat_id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['cat_name'] . "<br>";
}

echo "<h3>LEFT JOIN (All Products, with/without Category)</h3>";
$sql = "SELECT p.name, c.cat_name 
        FROM product p 
        LEFT JOIN category c ON p.Category_id = c.cat_id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['cat_name'] . "<br>";
}

echo "<h3>RIGHT JOIN (All Categories, with/without Products)</h3>";
$sql = "SELECT p.name, c.cat_name 
        FROM product p 
        RIGHT JOIN category c ON p.Category_id = c.cat_id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['cat_name'] . "<br>";
}

echo "<h3>FULL JOIN (All Products + All Categories)</h3>";
$sql = "SELECT p.name, c.cat_name 
        FROM product p 
        LEFT JOIN category c ON p.Category_id = c.cat_id
        UNION
        SELECT p.name, c.cat_name 
        FROM product p 
        RIGHT JOIN category c ON p.Category_id = c.cat_id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['cat_name'] . "<br>";
}

$conn->close();
?>
