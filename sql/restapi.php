<?php
header("Content-Type: application/json");
include 'db.php';

$method = $_SERVER['REQUEST_METHOD'];
$data   = json_decode(file_get_contents("php://input"), true);

if ($method == "GET") {
    $result = $conn->query("SELECT * FROM users");
    $users = [];
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode($users);
}

if ($method == "POST") {
    $firstname = $data['firstname'];
    $lastname  = $data['lastname'];
    $email     = $data['email'];

    $conn->query("INSERT INTO users (firstname, lastname, email)
                  VALUES ('$firstname', '$lastname', '$email')");
    echo json_encode(["message" => "User added"]);
}

if ($method == "PUT") {
    $id        = $data['id'];
    $firstname = $data['firstname'];
    $lastname  = $data['lastname'];
    $email     = $data['email'];

    $conn->query("UPDATE users 
                  SET firstname='$firstname', lastname='$lastname', email='$email' 
                  WHERE id=$id");
    echo json_encode(["message" => "User updated"]);
}

if ($method == "DELETE") {
    $id = $data['id'] ?? ($_GET['id'] ?? null);

    if ($id) {
        $conn->query("DELETE FROM users WHERE id=$id");
        echo json_encode(["message" => "User deleted"]);
    } else {
        echo json_encode(["error" => "No ID provided"]);
    }
}

$conn->close();
?>
