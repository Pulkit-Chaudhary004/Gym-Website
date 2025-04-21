<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Power Core Fitness</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body class="bg-black">
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
                  <li><a href="" class="py-2 px-3 hover:text-blue-400">Home</a></li>
                  <li><a href="../find/find.php" class="py-2 px-3 hover:text-blue-400">Find a Gym</a></li>
                  <li><a href="../whyJoin/whyJoin.html" class="py-2 px-3 hover:text-blue-400">Why Join</a></li>
                  <li><a href="../Franchise/franchise.php" class="py-2 px-3 hover:text-blue-400">Franchise</a></li>
                  <li><a href="../services/services.php" class="py-2 px-3 hover:text-blue-400">Services</a></li>
              </ul>
          </div>
      </div>
  </nav>

    <!-- Hero Section -->
    <div class="relative flex justify-center items-center">
      <img
        src="https://images.pexels.com/photos/3076510/pexels-photo-3076510.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
        alt="Gym Image"
        class="w-full h-[100vh] object-cover opacity-80"
      />

      <!-- Inverted Triangle Text -->
      <div class="absolute text-center text-white w-full px-4">
        <h1 class="text-5xl font-extrabold leading-tight">Crush your health</h1>
        <h2 class="text-4xl font-bold mt-2">and fitness goals</h2>
        <h3 class="text-3xl font-semibold mt-2">in no time</h3>
        <p class="text-lg mt-4 max-w-2xl mx-auto">
          It doesn’t matter if your goal is to get stronger, burn fat, or just
          stay fit. Our world-class coaches will guide you every step of the
          way.
        </p>

        <!-- Call to Action Button -->
        <button 
          class="mt-6 px-6 py-3 bg-black text-white font-bold rounded-full shadow-lg hover:text-blue-700 transition cursor-pointer"
        ><a href="#free-trial">
          Claim your 7-day free trial
</a>
        </button>

        <!-- Stars for Visual Effect -->
        <div class="flex justify-center mt-8 space-x-4">
          <i class="fa-solid fa-star text-white text-l"></i>
          <i class="fa-solid fa-star text-white text-l"></i>
          <i class="fa-solid fa-star text-white text-l"></i>
          <i class="fa-solid fa-star text-white text-l"></i>
          <i class="fa-solid fa-star text-white text-l"></i>
        </div>

        <div class="flex items-center justify-center space-x-2 mt-2">
          <p class="text-white text-sm font-semibold">83 five-star reviews</p>
        </div>

        <div class="flex items-center justify-center space-x-3 mt-10">
          <img
            src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
            class="w-[2.5vw] h-[5.2vh] rounded-full"
          />
          <p class="text-white text-sm font-medium">
            "6 months after joining, I lost 15 lbs and I'm getting stronger"
          </p>
        </div>
      </div>
    </div>
    <div class="mt-15">
      <h1
        class="text-5xl font-extrabold text-white flex items-center justify-center"
      >
        We offer something for
      </h1>
      <h2
        class="text-4xl font-bold text-white flex items-center justify-center"
      >
        everybody
      </h2>
      <!--------CROSSFIT------->
      <div
        class="container flex justify-center items-center space-x-6 mt-14 mb-[20vh] h-full w-full object-cover"
      >
        <div class="container relative bg-black-300 w-65 h-65 rounded-xl">
          <div class="relative w-full h-full cursor-pointer">
            <img
              src="https://images.pexels.com/photos/931324/pexels-photo-931324.jpeg?auto=compress&cs=tinysrgb&w=600"
              class="w-full h-full object-cover opacity-60 rounded-xl"
            />
            <p
              class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-4xl text-white font-bold"
            >
              CrossFit
            </p>
          </div>
        </div>
        <!--------STRENGTH TRAINING------->

        <div class="container relative bg-black-300 w-65 h-65 rounded-xl">
          <div class="relative w-full h-full cursor-pointer">
            <img
              src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
              class="w-full h-full object-cover opacity-60 rounded-xl"
            />
            <p
              class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-4xl text-white font-bold"
            >
              Strength Training
            </p>
          </div>
        </div>

        <!--------PERSONAL TRAINING------->

        <div class="container relative bg-black-300 w-65 h-65 rounded-xl">
          <div class="relative w-full h-full cursor-pointer">
            <img
              src="https://images.pexels.com/photos/414029/pexels-photo-414029.jpeg?auto=compress&cs=tinysrgb&w=600"
              class="w-full h-full object-cover opacity-60 rounded-xl"
            />
            <p
              class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-4xl text-white font-bold"
            >
              Personal Training
            </p>
          </div>
        </div>
        <!--------MEMBER ONLY EVENTS------->
        <div class="container relative bg-black-300 w-65 h-65 rounded-xl">
          <div class="relative w-full h-full cursor-pointer ">
            <img
              src="https://images.pexels.com/photos/16966303/pexels-photo-16966303/free-photo-of-men-in-a-weightlifting-competition.jpeg?auto=compress&cs=tinysrgb&w=600"
              class="w-full h-full object-cover opacity-60 rounded-xl"
            />
            <p
              class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-4xl text-white font-bold"
            >
              Member Only Events
            </p>
          </div>
        </div>
      </div>

      <!---------------CTA'S FIRST--------------------->

      <section class="overflow-hidden sm:grid sm:grid-cols-2 flex justify-center items-center">
        <div class="p-8 md:p-12 lg:px-16 lg:py-38 ml-20">
          <div
            class="mx-auto max-w-xl mb-10 text-center ltr:sm:text-left rtl:sm:text-right"
          >
            <span
              class="whitespace-nowrap rounded-full border border-blue-900 border-2 px-3.5 py-1.5 text-md text-white"
            >
             Group Crossfit Classes
            </span>
            <h2 class="font-extrabold text-white text-5xl mt-6">
              Get fit while having fun with our group CrossFit classes
            </h2>

            <ul class="hidden text-white md:mt-10 md:block text-xl ml-3">
              <li class="mt-8">
                <i class="fa-solid fa-circle-check mr-3"></i>Just 30 minutes
                long
              </li>
              <li class="mt-8">
                <i class="fa-solid fa-circle-check mr-3"></i>Warm up & workout
                included
              </li>
              <li class="mt-8">
                <i class="fa-solid fa-circle-check mr-3"></i>Fun is gauranteed
              </li>
            </ul>
          </div>
        </div>
      
        <div class="flex justify-end mx-20">
        <img
          alt="group training crossfit"
          src="https://images.unsplash.com/photo-1661510672691-4f5b6aee237e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGdyb3VwJTIwdHJhaW5pbmclMjBhdCUyMGd5bXxlbnwwfHwwfHx8MA%3D%3D"
          class="h-146 w-126 object-cover rounded-xl"
        />
      </div>
  

             <!------------CTA'S  SECOND------------>

                    <div class="flex justify-end mx-20">
                      <img
                        alt="group training crossfit"
                        src="https://images.pexels.com/photos/4720760/pexels-photo-4720760.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="h-156 w-126 object-cover rounded-xl"
                      />
                    </div>

      <div class="p-8 md:p-12 lg:px-16 lg:py-40 ml-16 mt-40 mr-20 ">
        <div
          class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right"
        >
          <span
            class="whitespace-nowrap rounded-full border border-blue-900 border-2 px-3.5 py-1.5 text-md text-white"
          >
           Strength Training
          </span>
          <h2 class="font-extrabold text-white text-5xl mt-6">
          Crush any strength program with our suite of strength equipment
          </h2>

          <ul class="hidden text-white md:mt-10 md:block text-xl ml-3">
            <li class="mt-8">
              <i class="fa-solid fa-circle-check mr-3"></i>Fully fitted powerlifting and strongman section
            </li>
            <li class="mt-8">
              <i class="fa-solid fa-circle-check mr-3"></i>Olympic lifting platforms,weight, and bars
              
            </li>
            <li class="mt-8">
              <i class="fa-solid fa-circle-check mr-3"></i>Dumbells ranging 5lbs-250lbs
            </li>
          </ul>
        </div>
      </div>
                <!--------------CTA'S THIRD---------------->


                <div class="p-8 md:p-12 lg:px-16 lg:py-38 ml-16 ">
                  <div
                    class="mx-auto max-w-xl mb-10 text-center ltr:sm:text-left rtl:sm:text-right ml-20"
                  >
                    <span
                      class="whitespace-nowrap rounded-full border border-blue-900 border-2 px-3.5 py-1.5 text-md text-white"
                    >
                     Personal Training
                    </span>
                    <h2 class="font-extrabold text-white text-5xl mt-6">
                      Be guided every step of the way with one of our world class coaches
                    </h2>
        
                    <div class="bg-stone-800 px-4 py-3 text-white mt-5 rounded-md w-[28vw]">
                      <p class="text-center text-md font-medium">
                        We have coaches in each of the following categories:
                      </p>
                    </div>

                    <ul class="hidden text-white md:mt-10 md:block text-xl ml-3">
                      <li class="mt-8">
                        <i class="fa-solid fa-circle-check mr-3"></i>Weightloss
                        </li>
                      <li class="mt-8">
                        <i class="fa-solid fa-circle-check mr-3"></i>Competetive Crossfit
                      </li>
                      <li class="mt-8">
                        <i class="fa-solid fa-circle-check mr-3"></i>Powerlifting
                      </li>
                    </ul>
                  </div>
                </div>
              
                <div class="flex justify-end mx-20">
                <img
                  alt="group training crossfit"
                  src="https://images.unsplash.com/photo-1584466977773-e625c37cdd50?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fHBlcnNvbmFsJTIwdHJhaW5pbmd8ZW58MHx8MHx8fDA%3D"
                  class="h-146 w-126 object-cover rounded-xl"
                />
              </div>
   
                 
                 <!------------------CTA'S FOURTH------------------>

          
                 <div class="flex justify-start mx-30">
                  <img
                    alt="group training crossfit"
                    src="https://images.pexels.com/photos/16966284/pexels-photo-16966284/free-photo-of-competition-in-lifting-weights.jpeg?auto=compress&cs=tinysrgb&w=600"
                    class="h-146 w-126 object-cover rounded-xl"
                  />
                </div>

  <div class="p-8 md:p-12 lg:px-16 lg:py-40 ml-12 mb-26 mr-20  ">
    <div
      class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right"
    >
      <span
        class="whitespace-nowrap rounded-full border border-blue-900 border-2 px-3.5 py-1.5 text-md text-white"
      >
       Member Only Events
      </span>
      <h2 class="font-extrabold text-white text-5xl mt-6">
     Make new friends and get competetive with fun member events
      </h2>

      <ul class="hidden text-white md:mt-10 md:block text-xl ml-3">
        <li class="mt-8">
          <i class="fa-solid fa-circle-check mr-3"></i>Friendly competitions
        </li>
        <li class="mt-8">
          <i class="fa-solid fa-circle-check mr-3"></i>Monthly challenges
          
        </li>
        <li class="mt-8">
          <i class="fa-solid fa-circle-check mr-3"></i>Summer potlucks and games
        </li>
      </ul>
    </div>
  </div>
      
      </section>



      <section style="background-color:#52403a">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
              <span
                class="whitespace-nowrap rounded-full border border-blue-900 border-2 px-3.5 py-1.5 text-md text-white "
              >
               Membership
              </span>
                <h2 class="mb-4 text-5xl tracking-tight font-extrabold text-white mt-6">Crushing your health and fitness goals starts here...</h2>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0 ">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center bg-black rounded-lg border-2 border-white shadow-lg w-[25vw]">
                    <h3 class="mb-4 text-2xl font-semibold text-white">Month to Month</h3>
                      <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-semibold text-white">₹1500</span>
                        <span class="text-gray-400">/month</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left text-gray-300">
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>All classes </span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>All member events</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Full gym access</span>
                        </li>
                    </ul>
                    <p class="font-light text-gray-300 sm:text-lg">Charges every month until you cancel.</p>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-6">Start 7 day free trial</a>
                </div>
                




                <div class="flex flex-col p-6 mx-auto max-w-lg text-center bg-black rounded-lg border-2 border-white shadow-lg w-[25vw]">
                  <h3 class="mb-4 text-2xl font-semibold text-white">6 Month Membership</h3>
                <div class="flex justify-center items-baseline my-8">
                      <span class="mr-2 text-5xl font-extrabold text-white">₹7000</span>
                      <span class="text-gray-400">/6 months</span>
                  </div>
                  <!-- List -->
                  <ul role="list" class="mb-8 space-y-4 text-left text-gray-300">
                      <li class="flex items-center space-x-3">
                          <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>All classess</span>
                      </li>
                      <li class="flex items-center space-x-3">
                          <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>All member events</span>
                      </li>
                      <li class="flex items-center space-x-3">
                          <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>Full gym access</span>
                      </li>
                  </ul>
                  <p class="font-light text-gray-300 sm:text-lg">Charges every 6 months unless you cancel</p>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-6">Start a 7 day free trial</a>
              </div>



              <div class="flex flex-col p-6 mx-auto max-w-lg text-center bg-black rounded-lg border-2 border-white shadow-lg w-[25vw]">
                <h3 class="mb-4 text-2xl font-semibold text-white">6 Month Membership</h3>
              <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold text-white">₹12000</span>
                    <span class="text-gray-400">/12 months</span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left text-gray-300">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>All classess</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>All member events</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Full gym access</span>
                    </li>
                </ul>
                <p class="font-light text-gray-300 sm:text-lg">Charges every 12 months unless you cancel</p>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-6">Start a 7 day free trial</a>
            </div>

        
            <div class=" gap-4 rounded-lg  h-[40vh] w-[25vw] bg-stone-500 ">
              <div class="flex items-center justify-center mt-[10vh]"><i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              </div>
            <div>
             <p class="flex items-center justify-center mt-2 text-white mt-3 lg:px-2">
                  "6 months after joining i lost 15lbs and I'm getting stronger"
                </p>
              </div>

              <div class="flex justify-center mt-3">
                <img
                  src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=2680&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt=""
                  class="size-16 rounded-full object-cover"
                />
              </div>
            </div>


            <div class=" gap-4 rounded-lg  h-[40vh] w-[25vw] " style="background-color:#FFB22C">
              <div class="flex items-center justify-center mt-[10vh]"><i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              </div>
            <div>
             <p class="flex items-center justify-center mt-2 text-white mt-3 lg:px-2">
                  "While I am passionate about health and fitness this gym is more like a community to me than anything"
                </p>
              </div>

              <div class="flex justify-center mt-3">
                <img
                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZSUyMCUyMGltYWdlfGVufDB8fDB8fHww"
                  alt=""
                  class="size-16 rounded-full object-cover"
                />
              </div>
            </div>


            <div class=" gap-4 rounded-lg  h-[40vh] w-[25vw] bg-stone-500 ">
              <div class="flex items-center justify-center mt-[10vh]">
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              <i class="fa-solid fa-star text-white text-l"></i>
              </div>
            <div>
             <p class="flex items-center justify-center mt-2 text-white mt-3 lg:px-2">
                  ""I'VE gotten so much stronger after joining it's insane.My deadlift increased by 65 lbs"
                </p>
              </div>

              <div class="flex justify-center mt-3">
                <img
                  src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cHJvZmlsZSUyMCUyMGltYWdlfGVufDB8fDB8fHww"
                  alt=""
                  class="size-16 rounded-full object-cover"
                />
              </div>
            </div>

          
            
        </div>
          </div>
            </div>
        </div>
    </section>
       

                 <!--------------7 DAY FREE TRIAL FORM------------->
    <div >
   

      <section class="relative flex flex-wrap items-center justify-center bg-black py-12 px-6" id="free-trial">
        <!-- Form Section -->
        <div class="w-full max-w-sm px-6 py-8 bg-gray-900 rounded-lg shadow-lg text-center">
          <h1 class="text-xl font-bold sm:text-2xl text-blue-700">Claim your 7-day free trial!</h1>
          <p class="mt-3 text-gray-300 text-sm">
            Power Core Fitness was started by Alex and Sparky in 2012. Our mission is to help people 
            live a healthy lifestyle and remove fitness as an obstacle.
          </p>
        
          <?php

$servername = "localhost"; 
$username = "root";        
$password = "";          
$dbname = "gym_management"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $membership_plan = $_POST['membership'];
    $submitted_at = date('Y-m-d H:i:s');

    // Insert form data into the database
    $sql = "INSERT INTO free_trial (name, email, phone, membership_plan, submitted_at) 
            VALUES ('$name', '$email', '$phone', '$membership_plan', '$submitted_at')";
    
    if (mysqli_query($conn, $sql)) {
        $success = "Successfully submitted your trial request!";
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>

<!-- HTML Form -->
<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>" class="mt-6 space-y-3">
    <input type="text" name="name" class="w-full rounded-md bg-white text-blue-700 p-3 text-sm shadow-md placeholder-gray-400" placeholder="Your Name" required />
    <input type="email" name="email" class="w-full rounded-md bg-white text-blue-700 p-3 text-sm shadow-md placeholder-gray-400" placeholder="Your Email" required />
    <input type="tel" name="phone" class="w-full rounded-md bg-white text-gray-800 p-3 text-sm shadow-md placeholder-gray-400" placeholder="Phone Number" />
    
    <select name="membership" class="w-full rounded-md bg-white text-gray-800 p-3 text-sm shadow-md" required>
        <option value="" disabled selected>Select membership plan</option>
        <option value="month-to-month">Month to Month</option>
        <option value="6-month">6 Months</option>
        <option value="12-month">12 Months</option>
    </select>
    
    <button type="submit" class="mt-3 w-full rounded-md bg-blue-500 px-5 py-3 text-sm font-medium text-white shadow-md">
        Submit
    </button>
</form>

<!-- Success/Error Messages -->
<?php if (isset($error)): ?>
  <p class="text-red-400 mt-4 text-sm font-semibold"><?= $error ?></p>
    

<?php elseif (isset($error)): ?>
    <p class="text-red-400 mt-4 text-sm font-semibold"><?= $error ?></p>
<?php endif; ?>

<?php
// Close the database connection
mysqli_close($conn);
?>


        </div>
        
        <!-- Image Section -->
        <div class="w-full max-w-xs mx-6 mt-6 lg:mt-0">
          <img alt="Gym" src="https://images.unsplash.com/photo-1630450202872-e0829c9d6172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" 
            class="rounded-lg shadow-md object-cover w-full" />
        </div>
      </section>
      
      
      
      
 <hr style="color:#999494">
      <footer class="">
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
      
    </div>
    
    </div>
  </body>
</html>
