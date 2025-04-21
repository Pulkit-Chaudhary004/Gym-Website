<?php
// Include the database connection file (one level up)
include('../db2.php');

// Fetch distinct regions (locations) from gyms table
$query = "SELECT DISTINCT location FROM gyms";
$result = mysqli_query($conn, $query);
$regions = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Get selected region from the dropdown
$selectedRegion = isset($_GET['region']) ? $_GET['region'] : '';

// Prepare gyms array
$gyms = [];

if ($selectedRegion) {
    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM gyms WHERE location = ?");
    $stmt->bind_param("s", $selectedRegion);
    $stmt->execute();
    $gymsResult = $stmt->get_result();
    $gyms = $gymsResult->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Gym</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-black border-gray-200 dark:bg-black fixed w-full z-20 top-0 start-0">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
          <a href="#" class="flex items-center space-x-3">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKbson34B58C_8kxUcyVS-Vhd5eDbAUygwvQ&s" class="h-16" alt="Gym Logo" />
              <span class="text-2xl font-semibold text-white">Power Core Fitness</span>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
              <ul class="flex flex-col md:flex-row md:space-x-6 text-white">
                  <li><a href="../home/home.php" class="py-2 px-3 hover:text-blue-400">Home</a></li>
                  <li><a href="../find/find.php" class="py-2 px-3 hover:text-blue-400">Find a Gym</a></li>
                  <li><a href="../whyJoin/whyJoin.html" class="py-2 px-3 hover:text-blue-400">Why Join</a></li>
                  <li><a href="../Franchise/franchise.php" class="py-2 px-3 hover:text-blue-400">Franchise</a></li>
                  <li><a href="../services/services.php" class="py-2 px-3 hover:text-blue-400">Services</a></li>
              </ul>
          </div>
      </div>
  </nav>

    
    <div class="container mx-auto mt-20 p-4">
        <h2 class="text-3xl font-bold mt-10 flex justify-center">Find Gym in your Area</h2>
        <!-- Region Dropdown -->
        <div class="flex justify-center items-center">
    <form method="GET" class="mb-8 mt-5 w-full max-w-lg">
        <label for="region" class="flex justify-center text-lg font-semibold mb-2">Select Region:</label>
        <select name="region" id="region" class="w-full p-2 border border-gray-300 rounded-md">
            <option value="">-- Select a Region --</option>
            <?php foreach ($regions as $region): ?>
                <option value="<?php echo $region['location']; ?>" <?php echo ($region['location'] == $selectedRegion) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($region['location']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md w-full">
            Find Gyms
        </button>
    </form>
</div>


        <!-- Gym Cards -->
        <?php if ($gyms): ?>
            <div class="grid grid-cols-1 gap-6 mx-[10vw] w-[80%]">
    <?php foreach ($gyms as $gym): ?>
        <div class="bg-white p-4 rounded-lg shadow-md transition flex flex-col md:flex-row items-center gap-6 w-full hover:bg-indigo-100 hover:border hover:border-blue-600 hover:shadow-lg">
            
            <!-- Image Left (Narrow Width, Taller Height) -->
            <div class="w-40 md:w-52 flex-shrink-0">
                <img src="<?php echo htmlspecialchars($gym['image']); ?>" alt="Gym Image" class="w-full h-60 object-cover rounded-md">
            </div>

            <!-- Content Right -->
            <div class="flex-1 flex flex-col gap-2">
                <h2 class="text-2xl font-bold"><?php echo htmlspecialchars($gym['name']); ?></h2>

                <p class="font-medium text-gray-700">📍 Address: <?php echo htmlspecialchars($gym['address']); ?></p>
                <p class="text-gray-600 font-semibold"><?php echo htmlspecialchars($gym['services']); ?></p>
                <p class="text-gray-600 font-semibold"><?php echo htmlspecialchars($gym['description']); ?></p>
                <p class="text-gray-800 font-semibold">💰 Price: ₹<?php echo htmlspecialchars($gym['price']); ?></p>

                
                <div class="inline-flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-lg w-max mt-3 shadow-sm">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.093 15.093 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21c1.21.49 2.53.76 3.88.76a1 1 0 011 1v3.5a1 1 0 01-1 1C10.07 21.5 2.5 13.93 2.5 4a1 1 0 011-1H7a1 1 0 011 1c0 1.35.27 2.67.76 3.88a1 1 0 01-.21 1.11l-2.2 2.2z"/>
                    </svg>
                    
                    <span class="font-semibold text-sm tracking-wide cursor-pointer"><?php echo htmlspecialchars($gym['contact_no']); ?></span>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>


        <?php else: ?>
            <p class="text-lg text-gray-700 mt-4">No gyms found for this region.</p>
        <?php endif; ?>
    </div>

</body>
</html>
