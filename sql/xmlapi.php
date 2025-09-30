<?php
include 'db.php'; 
$xml = simplexml_load_file('ex.xml') or die("Error: Cannot load XML file");

echo "<h3>Users from XML File</h3>";
foreach($xml->user as $user){
    echo "ID: ".$user->id." | Name: ".$user->firstname." ".$user->lastname." | Email: ".$user->email."<br>";
}

$conn->close();
?>
