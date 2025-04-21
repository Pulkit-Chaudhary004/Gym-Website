<?php
// Database configuration
$servername = "localhost";
$username = "root"; // your DB username
$password = "";     // your DB password
$dbname = "admin"; // your gym-related DB

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error message variable
$error_message = '';
$login_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $password = $_POST['password']; // Don't sanitize password before verification

    // Validation
    if (empty($username) || empty($password)) {
        $error_message = "Username and password are required.";
    } else {
        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            // echo "<pre>";
            // print_r($username);
            // print_r($password);
            // echo "</pre>";
            if ($result && $result->num_rows > 0) {
                // Fetch the user data
                $row = $result->fetch_assoc();
                echo "<pre>";
                print_r($row);
                echo "</pre>";
                // Verify password using password_verify if stored as hashed
                if ($password == $row['password']) {
                    $login_success = true;
                    // If login successful, redirect to manage gyms page
                    // header("Location: manage-gyms.php?admin_id=" . $row['id']);
                    
                    header("Location: admin-dashboard.php");

                    exit;
                } else {
                    $error_message = "Invalid credentials. Please try again.";
                }
            } else {
                $error_message = "Invalid credentials. Please try again.";
                // Use same error message to not reveal which part was incorrect
            }
            $stmt->close();
        } else {
            $error_message = "Database error. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Admin Login</h1>

        <?php if (!empty($error_message)): ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                <p><?= htmlspecialchars($error_message) ?></p>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input
                    type="text"
                    name="username"
                    id="username"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    required
                    value="<?= isset($username) ? htmlspecialchars($username) : '' ?>">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div>
                <button
                    type="submit"
                    class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>