<?php
// manage-gyms.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = "";
$errorMessage = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gym_name = $_POST['gym_name'];
    $gym_location = $_POST['gym_location'];
    $gym_services = $_POST['gym_services'];
    $gym_price = $_POST['gym_price'];
    $gym_address = $_POST['gym_address'];                                   
    $gym_description = $_POST['gym_description'];
    $gym_image = $_POST['gym_image'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO gyms (name, location, services, price, address, description, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $gym_name, $gym_location, $gym_services, $gym_price, $gym_address, $gym_description, $gym_image);

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = "New gym added successfully!";
    } else {
        $errorMessage = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Add Gym</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Add New Gym</h1>
        </div>
    </nav>

    <main class="container mx-auto mt-8 px-4">
        <div class="max-w-lg mx-auto">
            <?php if (!empty($successMessage)): ?>
                <div class="bg-green-200 text-green-800 p-4 rounded-md mb-4"><?= $successMessage ?></div>
            <?php endif; ?>
            <?php if (!empty($errorMessage)): ?>
                <div class="bg-red-200 text-red-800 p-4 rounded-md mb-4"><?= $errorMessage ?></div>
            <?php endif; ?>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form method="POST" action="">
                    <div class="mb-4">
                        <label for="gym_name" class="block text-gray-700 font-semibold">Gym Name:</label>
                        <input type="text" id="gym_name" name="gym_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="gym_location" class="block text-gray-700 font-semibold">Location:</label>
                        <input type="text" id="gym_location" name="gym_location" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="gym_services" class="block text-gray-700 font-semibold">Services:</label>
                        <input type="text" id="gym_services" name="gym_services" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="gym_price" class="block text-gray-700 font-semibold">Price:</label>
                        <input type="number" id="gym_price" name="gym_price" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="gym_address" class="block text-gray-700 font-semibold">Address:</label>
                        <input type="text" id="gym_address" name="gym_address" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="gym_description" class="block text-gray-700 font-semibold">Description:</label>
                        <textarea id="gym_description" name="gym_description" rows="4" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="gym_image" class="block text-gray-700 font-semibold">Image URL or Path:</label>
                        <textarea id="gym_image" name="gym_image" rows="2" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Gym</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="mt-12 py-6 bg-gray-200">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; <?= date('Y') ?> Gym Management System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
