<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "gym_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from `franchise` table
$sql = "SELECT * FROM franchise ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Franchise Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-10 bg-gray-100">
  <h1 class="text-2xl font-bold mb-6">📋 Franchise Submission Reports</h1>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
      <thead class="bg-blue-600 text-white">
        <tr>
          <th class="py-3 px-4 text-left">ID</th>
          <th class="py-3 px-4 text-left">Name</th>
          <th class="py-3 px-4 text-left">Email</th>
          <th class="py-3 px-4 text-left">Mobile</th>
          <th class="py-3 px-4 text-left">City</th>
          <th class="py-3 px-4 text-left">State</th>
          <th class="py-3 px-4 text-left">Net Worth</th>
          <th class="py-3 px-4 text-left">Capital</th>
          <th class="py-3 px-4 text-left">Submitted At</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        <?php if ($result->num_rows > 0): ?>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr class="border-b">
              <td class="py-2 px-4"><?= $row['id'] ?></td>
              <td class="py-2 px-4"><?= $row['first_name'] . ' ' . $row['last_name'] ?></td>
              <td class="py-2 px-4"><?= $row['email'] ?></td>
              <td class="py-2 px-4"><?= $row['mobile'] ?></td>
              <td class="py-2 px-4"><?= $row['city'] ?></td>
              <td class="py-2 px-4"><?= $row['state'] ?></td>
              <td class="py-2 px-4"><?= $row['net_worth'] ?></td>
              <td class="py-2 px-4"><?= $row['capital'] ?></td>
              <td class="py-2 px-4"><?= $row['submitted_at'] ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="9" class="py-4 px-4 text-center text-red-500">No data found.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

</body>
</html>

<?php $conn->close(); ?>
