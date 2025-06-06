<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Franchise - Join Us</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class=bg-black> 

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



  <div class="">
  <!-- Hero Section -->
  <section class="text-white py-20 text-center">
    <div class="container mx-auto">
        <h2 class="text-5xl font-bold mb-4">Start Your Gym Franchise Today</h2>
        <p class="text-xl mb-8">Join our global network and become a part of the fitness revolution.</p>
        
<!-- Get Started Button -->
<button onclick="openModal()" class="bg-white text-blue-900 px-8 py-3 rounded-full font-semibold hover:bg-blue-300">
  Get Started
</button>
</div>
</section>

<!-- Modal -->
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
  <div class="bg-white p-6 rounded-lg w-1/2">
    <h2 class="text-2xl font-bold mb-4">Start Your Gym Franchise</h2>

    <?php
// Handle form submission
$submitted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // DB connection
    $conn = new mysqli("localhost", "root", "", "gym_management");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect data from form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $netWorth = $_POST['netWorth'];
    $capital = $_POST['capital'];
    $submitted_at = date('Y-m-d H:i:s');

    // Insert into database
    $sql = "INSERT INTO franchise (first_name, last_name, email, mobile, city, state, net_worth, capital, submitted_at)
            VALUES ('$firstName', '$lastName', '$email', '$mobile', '$city', '$state', '$netWorth', '$capital', '$submitted_at')";

    if ($conn->query($sql) === TRUE) {
        $submitted = true;
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

  <script>
    <?php if ($submitted): ?>
      alert("🎉 Franchise form submitted successfully!");
      window.location.href = "franchise.php";
    <?php endif; ?>
  </script>
  <script>
    function closeModal() {
      window.history.back(); // Go to previous page
    }
  </script>
  



  <form id="franchiseForm" method="post">
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block font-semibold">First Name:</label>
        <input type="text" name="firstName" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label class="block font-semibold">Last Name:</label>
        <input type="text" name="lastName" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label class="block font-semibold">Email:</label>
        <input type="email" name="email" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label class="block font-semibold">Mobile:</label>
        <input type="number" name="mobile" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label class="block font-semibold">City:</label>
        <input type="text" name="city" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label class="block font-semibold">State/Province:</label>
        <select name="state" class="w-full border p-2 rounded" required>
          <option value="">Select State</option>
          <option value="NY">New York</option>
          <option value="CA">California</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold">Current Net Worth:</label>
        <select name="netWorth" class="w-full border p-2 rounded" required>
          <option value="">Select</option>
          <option value="50k">$50,000</option>
          <option value="100k">$100,000</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold">Liquid Capital Available:</label>
        <select name="capital" class="w-full border p-2 rounded" required>
          <option value="">Select</option>
          <option value="10k">$10,000</option>
          <option value="50k">$50,000</option>
        </select>
      </div>
    </div>

    <button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
      Submit
    </button>

    <button type="button" onclick="closeModal()" class="mt-4 ml-4 text-red-600 hover:underline">
      Close
    </button>
  </form>


  </div>
</div>

<script>
  function openModal() {
    document.getElementById("modal").classList.remove("hidden");
  }

  function closeModal() {
    document.getElementById("modal").classList.add("hidden");
  }

  function saveData() {
    // Get input values
    let formData = {
      firstName: document.getElementById("firstName").value,
      lastName: document.getElementById("lastName").value,
      email: document.getElementById("email").value,
      mobile: document.getElementById("mobile").value,
      city: document.getElementById("city").value,
      state: document.getElementById("state").value,
      netWorth: document.getElementById("netWorth").value,
      capital: document.getElementById("capital").value
    };

    // Save to Local Storage
    localStorage.setItem("franchiseFormData", JSON.stringify(formData));

    // Clear the input fields
    document.getElementById("franchiseForm").reset();

    // Close modal
    closeModal();
  }
</script>








  <!-- Why Choose Us Section -->
  <section class="py-16">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12 text-white">Why Choose Us?</h2>
      <div class="flex gap-6 justify-center">
        <div class="bg-purple-800 p-6 rounded-xl w-85 h-85 text-center shadow-lg">
            <div class="flex justify-center items-center w-16 h-16 border-2 border-white rounded-full mx-auto mb-4">PCF</div>
            <h3 class="text-lg font-bold">GLOBAL STRENGTH</h3>
            <p class="text-sm">The world's largest fitness franchise on all 7 continents, with over 5500 gyms and 5 million+ members worldwide.</p>
        </div>
        <div class="bg-purple-800 p-6 rounded-xl w-85 h-85 text-center shadow-lg">
            <div class="flex justify-center items-center w-16 h-16 border-2 border-white rounded-full mx-auto mb-4">PCF</div>
            <h3 class="text-lg font-bold">ULTIMATE FLEXIBILITY</h3>
            <p class="text-sm">A fixed monthly low royalty fee. You get more profits. A 360 support throughout your gym lifecycle.</p>
        </div>
        <div class="bg-purple-800 p-6 rounded-xl w-85 h-85 text-center shadow-lg">
            <div class="flex justify-center items-center w-16 h-16 border-2 border-white rounded-full mx-auto mb-4">PCF</div>
            <h3 class="text-lg font-bold">A NEW MEMBER EVERY MINUTE</h3>
            <p class="text-sm">At Anytime Fitness, we have a new member join one of our clubs every minute of every day worldwide.</p>
        </div>
    </div>
    </div>
  </section>
  

  <!-- Franchise Benefits Section -->
   <div class="bg-gradient-to-b from-black to-[#52403a]">
  <section class=" py-16"> <!-- Changed bg-gray-200 to bg-gray-700 -->
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12 text-white">Franchise Benefits</h2> <!-- Added text-white -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <img src="https://cms.exercise.com/wp-content/uploads/2023/06/gym-wall-art-design-1024x505.jpg" alt="Franchise Benefits" class="rounded-lg shadow-lg">
        </div>
        <div>
          <ul class="space-y-6">
            <li class="text-xl font-semibold text-white">Access to cutting-edge gym equipment</li>
            <li class="text-xl font-semibold text-white">Personalized workout and nutrition plans</li>
            <li class="text-xl font-semibold text-white">Group fitness classes and personal training</li>
            <li class="text-xl font-semibold text-white">24/7 gym access for members</li>
            <li class="text-xl font-semibold text-white">Supportive fitness community and events</li>
          </ul>
          
        </div>
      </div>
    </div>
  </section>


  <div class="max-w-6xl mx-auto py-10 px-5">
    <h2 class="text-3xl font-bold text-center text-white mb-8">MEMBER'S CORNER</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="border border-white p-6 rounded-lg bg-black bg-opacity-40">
            <p class="mb-4 text-white">The trainers are genuinely helpful and the crowd is one of the best I have seen in any of the chains. Very decent atmosphere. The music is just right too.</p>
            <h3 class="font-bold text-blue-700">ANDY GUPTA</h3>
            <p class="text-sm text-white">MEMBER -POWER CORE FITNESS GURUGRAM, HARYANA</p>
        </div>
        <div class="border border-white p-6 rounded-lg bg-black bg-opacity-40">
            <p class="mb-4 text-white">Advance level machines are available in this gym. Staff and gym trainers are too good, polite, and knowledgeable. I am satisfied with their training services.</p>
            <h3 class="font-bold text-blue-700">GAURAV GOEL</h3>
            <p class="text-sm text-white">MEMBER -POWER CORE FITNESS DWARKA, DELHI</p>
        </div>
        <div class="border border-white p-6 rounded-lg bg-black bg-opacity-40">
            <p class="mb-4 text-white">Well, I have been a monthly member now getting to get along with the people there. It's a great place for fitness freaks. There is passion in the Gym Fitness Instructors and they work towards getting you towards Fitness.</p>
            <h3 class="font-bold text-blue-700">PAWAN KOTHARI</h3>
            <p class="text-sm text-white">MEMBER - POWER CORE FITNESS MODEL TOWN, DELHI</p>
        </div>
    </div>
</div>




  <!-- Call to Action Section -->
  <section class="py-20">
    <div class="container mx-auto text-center text-white">
      <h2 class="text-5xl font-bold mb-4">Ready to Join Us?</h2>
      <p class="text-xl mb-8">Take the first step towards owning your own gym franchise today.</p>
      <a href="#" onclick="openModal()" class="bg-white text-blue-900 px-8 py-3 rounded-full font-semibold hover:bg-blue-300">Request Information</a>
    </div>
  </section>

  <!-- Modal -->
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white text-gray-900 p-6 rounded-lg w-1/2">
      <h2 class="text-2xl font-bold mb-4">Request Information</h2>
      <form id="infoForm">
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block font-semibold">First Name:</label>
            <input type="text" id="firstName" class="w-full border p-2 rounded" required>
          </div>
          <div>
            <label class="block font-semibold">Last Name:</label>
            <input type="text" id="lastName" class="w-full border p-2 rounded" required>
          </div>
          <div>
            <label class="block font-semibold">Email:</label>
            <input type="email" id="email" class="w-full border p-2 rounded" required>
          </div>
          <div>
            <label class="block font-semibold">Phone:</label>
            <input type="tel" id="phone" class="w-full border p-2 rounded" required>
          </div>
        </div>
        <div class="mt-4">
          <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-800">Submit</button>
          <button type="button" onclick="closeModal()" class="bg-gray-400 text-white px-6 py-2 rounded hover:bg-gray-600 ml-2">Cancel</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Function to open modal
    function openModal() {
        document.getElementById('modal').classList.remove('hidden');
    }

    // Function to close modal
    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    // Function to handle form submission
    document.getElementById('infoForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Get input values
        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;

        // Validation
        if (!firstName || !lastName || !email || !phone) {
            alert("All fields are required!");
            return;
        }

        // Store data in local storage
        let formData = {
            firstName: firstName,
            lastName: lastName,
            email: email,
            phone: phone
        };

        localStorage.setItem("franchiseRequest", JSON.stringify(formData));

        // Clear input fields
        document.getElementById('infoForm').reset();

        // Close modal
        closeModal();

        // Show success message
        alert("Your request has been saved!");
    });

  </script>

  <hr style="color:#999494"> 

  <!-- Footer Section -->
 
  <footer class="bg-gradient-to-b from-[#52403a] to-black">
    
      <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="flex justify-center text-teal-600">
          
           
        </div>
    
        
    
        <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
          <li>
            <a class="text-gray-700 transition hover:text-gray-700/75" href="home.html"> About </a>
          </li>
    
          <li>
            <a class="text-gray-700 transition hover:text-gray-700/75" href="../Franchise/franchise.html"> Careers </a>
          </li>
    
          <li>
            <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> History </a>
          </li>
    
          <li>
            <a class="text-gray-700 transition hover:text-gray-700/75" href="../services/services.html"> Services </a>
          </li>
    
          
    
          <li>
            <a class="text-gray-700 transition hover:text-gray-700/75" href="https://www.glofox.com/blog/fitness-blogs/"> Blog </a>
          </li>
        </ul>
    
        <ul class="mt-12 flex justify-center gap-6 md:gap-8">
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">Facebook</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
    
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">Instagram</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
    
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">Twitter</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
          </li>
    
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">GitHub</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
    
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">Dribbble</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </footer>


</body>
</html>