<?php
header("Content-Type: application/json");

if (!isset($_GET['region'])) {
    echo json_encode(["error" => "Region not specified"]);
    exit;
}

$region = $_GET['region'];

include '../db2.php';  // Make sure this file includes your database connection logic

// Check for database connection
if ($conn->connect_error) {
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

$sql = "SELECT * FROM gyms WHERE location = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $region);
$stmt->execute();
$result = $stmt->get_result();

$gyms = [];

while ($row = $result->fetch_assoc()) {
    $gyms[] = $row;
}

echo json_encode($gyms);

$stmt->close();
$conn->close();
?>
