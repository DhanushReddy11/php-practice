<?php
include 'db.php';

$conn->query("DROP PROCEDURE IF EXISTS add_user");

$sql = "CREATE PROCEDURE add_user(
    IN fname VARCHAR(30),
    IN lname VARCHAR(30),
    IN emailid VARCHAR(50)
)
BEGIN
    INSERT INTO users (firstname, lastname, email)
    VALUES (fname, lname, emailid);
END";

if ($conn->query($sql) === TRUE) {
    echo "Procedure 'add_user' created successfully<br>";
} else {
    echo "Error creating procedure: " . $conn->error . "<br>";
}

$sql = "CALL add_user('Charlie', 'Chaplin', 'charlie@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "User added using procedure<br>";
} else {
    echo "Error calling procedure: " . $conn->error . "<br>";
}

echo "<h3>Users Table</h3>";
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo $row['id']." | ".$row['firstname']." | ".$row['lastname']." | ".$row['email']."<br>";
}

$conn->close();
?>
