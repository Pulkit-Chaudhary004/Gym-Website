<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4   "></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Gym Management System</h1>
            <div class="flex items-center gap-4">
                <span>Welcome, Admin</span>
                <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm">Logout</a>
            </div>
        </div>
    </nav>
    <main class="container mx-auto mt-8 px-4">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Admin Dashboard</h2>
            <p class="mb-6 text-gray-700">Welcome to your dashboard. Here you can manage the gym data, users, and more.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <a href="manage-gyms.php" class="block p-6 bg-blue-50 hover:bg-blue-100 rounded-lg border border-blue-200 transition duration-300">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Manage Gyms</h3>
                    <p class="text-gray-600">Add, edit, or delete gym listings and details</p>
                </a>

                <a href="manage-members.php" class="block p-6 bg-green-50 hover:bg-green-100 rounded-lg border border-green-200 transition duration-300">
                    <h3 class="text-xl font-semibold text-green-700 mb-2">Manage Members</h3>
                    <p class="text-gray-600">View and manage gym memberships</p>
                </a>

                <a href="reports.php" class="block p-6 bg-purple-50 hover:bg-purple-100 rounded-lg border border-purple-200 transition duration-300">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Reports</h3>
                    <p class="text-gray-600">View membership statistics and reports</p>
                </a>
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