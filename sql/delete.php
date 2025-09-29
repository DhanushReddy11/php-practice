<?php
include 'db.php';

$sql = "DELETE FROM users WHERE id=1";

if ($conn->query($sql) === TRUE){
    echo "Record deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
