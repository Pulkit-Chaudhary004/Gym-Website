<?php
// db2.php — this file should connect to your gym_management database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Fetch all members from free_trial table
$query = "SELECT * FROM free_trial ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Members</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Manage Members</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Phone</th>
                        <th class="py-3 px-4 text-left">Membership Plan</th>
                        <th class="py-3 px-4 text-left">Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4"><?php echo htmlspecialchars($row['name']); ?></td>
                            <td class="py-3 px-4"><?php echo htmlspecialchars($row['email']); ?></td>
                            <td class="py-3 px-4"><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td class="py-3 px-4"><?php echo htmlspecialchars($row['membership_plan']); ?></td>
                            <td class="py-3 px-4"><?php echo htmlspecialchars($row['submitted_at']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
