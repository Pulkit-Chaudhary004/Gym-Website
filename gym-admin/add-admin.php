<?php
require_once('db.php');

$username = 'admin';
$password = password_hash('adminpassword', PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Admin user added successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
