<?php
// Include the database connection file
require_once('db.php'); // Ensure that this file contains your database connection

// SQL to create the admin table
$sql = "CREATE TABLE admin (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'admin' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
