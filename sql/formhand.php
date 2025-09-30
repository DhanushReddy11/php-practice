
<h3>Add New User</h3>
<form method="post" action="">
    First Name: <input type="text" name="firstname" required><br><br>
    Last Name: <input type="text" name="lastname" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" name="submit" value="Add User">
</form>


<?php
include 'db.php';

$errors = []; 
if(isset($_POST['submit'])) {
    $firstname = ($_POST['firstname']);
    $lastname  = ($_POST['lastname']);
    $email     = ($_POST['email']);

    
    if(empty($firstname)) {
        $errors[] = "First name is required";
    }
    if(empty($lastname)) {
        $errors[] = "Last name is required";
    }
    if(empty($email)) {
        $errors[] = "Email is required";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if(empty($errors)) {
        $sql = "INSERT INTO users (firstname, lastname, email) 
                VALUES ('$firstname', '$lastname', '$email')";
        if($conn->query($sql) === TRUE){
            echo "User added successfully<br>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }
}

$result = $conn->query("SELECT * FROM users");
echo "<h3>All Users</h3>";
while($row = $result->fetch_assoc()){
    echo $row['id']." | ".$row['firstname']." | ".$row['lastname']." | ".$row['email']."<br>";
}

$conn->close();
?>
