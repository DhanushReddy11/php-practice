<?php
$servername = "localhost";
$username   = "treddy";     // your MariaDB username
$password   = "";           // password (empty if none)
$dbname     = "my_first_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully! <br>";
?>
