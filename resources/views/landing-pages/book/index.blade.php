<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Book your dream photoshoot at The Bunny Teeth Photography. Let us help you capture unforgettable moments with our professional photography services. Secure your spot today!" />
    <meta name="keywords" content="photoshoot booking, professional photographer, photography services, book a photoshoot, photography studio, photo session booking, dream photoshoot" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="The Bunny Teeth Photography" />
  
    <!-- Open Graph Meta Tags (For social sharing) -->
    <meta property="og:title" content="Book Your Photoshoot | The Bunny Teeth Photography" />
    <meta property="og:description" content="Book your dream photoshoot with The Bunny Teeth Photography. Secure your session today and let us capture beautiful, unforgettable moments." />
    <meta property="og:image" content="{{ asset('storage/homepage/home_bg_1.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
  
    <!-- Twitter Card Meta Tags (For Twitter Sharing) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@yourtwitterhandle" /> <!-- Replace with your Twitter handle -->
    <meta name="twitter:title" content="Book Your Photoshoot | The Bunny Teeth Photography" />
    <meta name="twitter:description" content="Book your photoshoot at The Bunny Teeth Photography and capture those perfect moments that you'll cherish forever." />
    <meta name="twitter:image" content="{{ asset('storage/homepage/home_bg_1.jpg') }}" />
  
    <title>Book Your Photoshoot | The Bunny Teeth Photography</title>
  
    <!-- Canonical URL for SEO -->
    <link rel="canonical" href="{{ url()->current() }}" />
  
    <!-- External Styles and Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('storage/style.css') }}" />
    <link rel="icon" href="{{ asset('storage/favicon.ico') }}" type="image/x-icon">
  
    <!-- AOS (Animate On Scroll) for smooth animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Adamina&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet" />
  
    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/c0fbdcbfe4.js" crossorigin="anonymous"></script>
</head>  

<body class="custom-scrollbar" style="height: 400px; overflow-y: auto;">
    <header>
        <nav class="bg-white shadow-sm fixed top-0 w-full z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                  <a href="../"><img class="h-16" src="{{ asset('storage/TheBunnyTeeth_Logo.png') }}" alt="Logo" /></a>
                </div>
        
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-10 poppins-regular">
                  <a href="../" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Home</a>
                  <a href="../#about" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">About us</a>
                  <a href="../#services" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Services</a>
                  <a href="../#gallery" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Gallery</a>
                  <a href="../#contact" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Contact Us</a>
                </div>
        
                <!-- Book Now Button -->
                <div class="hidden md:flex items-center">
                  <a href="/book" onclick="return false;" class="cursor-not-allowed bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 rounded-full text-sm font-medium">Book Now</a>
                </div>
        
                <!-- Mobile menu button -->
                <div class="md:hidden">
                  <button id="menu-toggle" type="button" class="text-gray-500 hover:text-gray-900 p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
        
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
              <div class="px-3 pt-2 pb-3 space-y-1 poppins-regular text-center">
                <a href="../" class="text-gray-500 block px-3 py-2 text-base font-medium border-b">Home</a>
                <a href="../#about" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">About us</a>
                <a href="../#services" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Services</a>
                <a href="../#gallery" class="text-gray-900 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Gallery</a>
                <a href="../#contact" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium">Contact Us</a>
                <a href="../book" onclick="return false;" class="cursor-not-allowed text-gray-100 hover:text-white bg-amber-500 rounded-sm block px-3 py-2 text-base font-medium">Book Now</a>
              </div>
            </div>
          </nav>
        
          <script>
            // JavaScript to toggle the mobile menu
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
        
            menuToggle.addEventListener('click', () => {
              mobileMenu.classList.toggle('hidden');
            });
          </script>
      </header>

    <main class="mt-[80px]">
        <div>
            <a
              class="play-btn"
              href="tel:+917824999900"
              target="_blank"
              class="z-[1000]"
              ><i class="fa-solid fa-phone mr-2"></i
            ></a>
          
          </div>
        <div class="flex flex-col justify-center items-center w-full p-5">
            <!-- Title -->
            <div class="flex flex-col justify-center items-center">
                <h1 class="poppins-medium text-md lg:text-xl pt-5 pb-2 yellow-text text-center">
                    BOOKINGS
                </h1>
                <h3 class="poppins-light text-center text-lg lg:text-2xl px-[20px] lg:px-20 w-full max-w-7xl">
                    The moment you've been waiting for is almost here - your dream photoshoot!
                </h3>
            </div>

            <div class="w-full md:w-1/2 my-10 mx-5">
                <form class="w-full" id="shootForm" action="https://api.web3forms.com/submit" method="POST">
                    <input type="hidden" name="access_key" value="193d0b6a-69e9-4050-af87-ed27476a6ee1">
                    <input type="hidden" name="from_name" value="Booking">

                    <!-- First & Last Name -->
                    <div class="my-4 flex items-start justify-between gap-2">
                        <div class="w-full w-full flex flex-col items-start">
                            <label class="poppins-light " for="firstName">First Name<sup class="text-[#AD7901]">
                                    (required)</sup></label>
                            <input class="outline-none px-2 w-full h-12 border border-black rounded-md poppins-light text-base" type="text" id="firstName"
                                name="firstName" required />
                        </div>

                        <div class="w-full flex flex-col items-start">
                            <label class="poppins-light " for="lastName">Last Name<sup class="text-[#AD7901]">
                                    (required)</sup></label>
                            <input class="outline-none px-2 w-full h-12 border border-black rounded-md poppins-light text-base" type="text" id="lastName"
                                name="lastName" required />
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="email">Email<sup class="text-[#AD7901]"> (required)</sup></label>
                        <input class="outline-none px-2 w-full h-12 border border-black rounded-md poppins-light text-base" type="email" id="email" name="email"
                            required />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="phone">Phone<sup class="text-[#AD7901]"> (required)</sup></label>
                        <input class="outline-none px-2 w-full h-12 border border-black rounded-md poppins-light text-base" type="tel" id="phone" name="phone"
                            required />
                    </div>

                    <!-- Whatsapp Input Box -->
                    <div class="mt-2 mb-4 flex justify-start items-center">
                        <input class="outline-none w-5 h-5 accent-[#FFB200]" type="checkbox" id="whatsappCheck" name="whatsappCheck"
                            onchange="handleWhatsAppCheck()" />
                        <label class="poppins-light ml-1" for="whatsappCheck">Is this same as WhatsApp number?</label>
                    </div>

                    <!-- Whatsapp -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="phone">Whatsapp</label>
                        <input class="outline-none px-2 w-full h-12 border border-black rounded-md poppins-light text-base" type="tel" id="whatsapp-num"
                            name="whatsapp-num" required />
                    </div>

                    <!-- City -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="city">City<sup class="text-[#AD7901]"> (required)</sup></label>
                        <select class="outline-none w-full h-12 border border-black rounded-md poppins-light text-base bg-white px-2" id="city" name="city"
                            required onchange="handleCitySelection()">
                            <option value="">Select Your Option</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="my-4 w-full flex flex-col items-start" id="otherCityInput" style="display: none;">
                        <label class="poppins-light " for="otherCity">Enter City</label>
                        <input class="outline-none px-2 w-full h-12 border border-black rounded-md poppins-light text-base" type="text" id="otherCity"
                            name="otherCity">
                    </div>

                    <!-- Services -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="shootType">What can we shoot for you?<sup class="text-[#AD7901]">
                                (required)</sup></label>
                        <select class="outline-none w-full h-12 border border-black rounded-md poppins-light text-base bg-white px-2" id="shootType"
                            name="shootType" required>
                            <option value="">Select Your Option</option>
                            <option value="Maternity">Maternity 34 to 36 weeks</option>
                            <option value="Newborn">Newborn 6 to 40 days</option>
                            <option value="Baby">Baby 3 to 6 months</option>
                            <option value="Sitter">Sitter 7 to 12 months</option>
                            <option value="Cake Smash">Cake Smash </option>
                            <option value="Toddler & Young Kids">Toddler & Young Kids</option>
                            <option value="Family">Family (Indoor & Outdoor)</option>
                            <option value="Birthday">Birthday</option>
                        </select>
                    </div>

                    <!-- Shoot Date -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="shootDate">When should we plan for this shoot?<sup class="text-[#AD7901]">
                                (required)</sup></label>
                        <input class="outline-none w-full h-12 border border-black rounded-md poppins-light text-base px-2" type="date" id="shootDate"
                            name="shootDate" required />
                    </div>

                    <!-- Message -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light " for="message">Add a message</label>
                        <textarea class="outline-none p-2 w-full h-32 border border-black rounded-md poppins-light text-base" id="message" name="message"
                            rows="4" cols="50"></textarea>
                    </div>

                    <!-- Hear about us -->
                    <div class="my-4 w-full flex flex-col items-start">
                        <label class="poppins-light mb-2">Where did you hear about us?<sup class="text-[#AD7901]">
                                (required)</sup></label>

                        <div class="flex justify-start items-center mb-2">
                            <input class="outline-none w-5 h-5 accent-[#FFB200]" type="checkbox" id="socialMedia" name="heardFrom"
                                value="Social media - Facebook/Instagram" />
                            <label class="poppins-light ml-1" for="socialMedia">Social media - Facebook/Instagram</label>
                        </div>

                        <div class="flex justify-start items-center mb-2">
                            <input class="outline-none w-5 h-5 accent-[#FFB200]" type="checkbox" id="googleSearch" name="heardFrom"
                                value="Google search" />
                            <label class="poppins-light ml-1" for="googleSearch">Google search</label><br />
                        </div>

                        <div class="flex justify-start items-center mb-2">
                            <input class="outline-none w-5 h-5 accent-[#FFB200]" type="checkbox" id="familyFriends" name="heardFrom"
                                value="Family/friends" />
                            <label class="poppins-light ml-1" for="familyFriends">Family/friends</label><br />
                        </div>

                        <div class="flex justify-start items-center mb-2">
                            <input class="outline-none w-5 h-5 accent-[#FFB200]" type="checkbox" id="others" name="heardFrom" value="Others" />
                            <label class="poppins-light ml-1" for="others">Others</label>
                        </div>
                    </div>

                    <div class="flex items-center justify-center my-10">
                        <button type="submit"
                            class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 w-full rounded-full text-sm font-medium">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <footer class="p-2 mt-5 lg:mt-10">
        <div class="h-full p-6 md:p-10 bg-black/90 rounded-xl">
          <div class="flex flex-col items-start md:flex-row md:justify-between md:items-start">
            <!-- Contact details -->
            <div>
              <p class="text-sm lg:text-base 2xl:text-2xl poppins-regular text-white my-2">
                  <i class="fa-solid fa-phone mr-2"></i> +91 78249 99900
              </p>
              <p class="text-sm lg:text-base 2xl:text-2xl poppins-regular text-white my-6">
                  <i class="fa-solid fa-envelope mr-2"></i>
                  hello@thebunnyteethphotography.com
              </p>
              <p class="text-sm lg:text-base 2xl:text-2xl poppins-regular text-white my-2">
                  <i class="fa-solid fa-location-dot mr-2"></i> 2nd Street, Ram
                  Nagar North,<br />
                  Madipakkam, Chennai 600091.
              </p>
          </div>
    
          <!-- Quote -->
          <div>
              <p class="hidden md:block text-end text-base lg:text-xl 2xl:text-2xl poppins-regular text-white">
                  Let's create timeless memories through the <br />
                  lens of artistry. Reach out, and weave your <br />
                  unique story into captivating frames.
              </p>
          </div>
          </div>
    
          <!-- Logo & Copyright -->
          <div class="mt-10 lg:-my-10 flex flex-col items-center">
            <img class="w-32 lg:w-52" src="{{ asset('storage/TheBunnyTeeth_Logo.png') }}" alt="Logo" />
            <p class="text-sm lg:text-base 2xl:text-md poppins-regular text-center text-white my-2">
              Copyright @
              <span class="text-[#FFB200]">The Bunny Teeth Photography</span>. All
              Rights Reserved.
            </p>
          </div>
        </div>
      </footer>
    <div id="preloader"></div>

    <style>
      #preloader {
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: #fff;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    
      #preloader:before,
      #preloader:after {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        border: 4px solid  #FAB510; /* Use a defined color */
        border-radius: 50%;
        animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;
      }
    
      #preloader:after {
        animation-delay: -0.5s;
      }
    
      @keyframes animate-preloader {
        0% {
          width: 10px;
          height: 10px;
          top: calc(50% - 5px);
          left: calc(50% - 5px);
          opacity: 1;
        }
        100% {
          width: 72px;
          height: 72px;
          top: calc(50% - 36px);
          left: calc(50% - 36px);
          opacity: 0;
        }
      }
    </style>
    
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.querySelector('#preloader');
        if (preloader) {
          window.addEventListener('load', () => {
            preloader.style.transition = 'opacity 0.5s ease-out';
            preloader.style.opacity = '0';
            setTimeout(() => preloader.remove(), 600);
          });
        }
      });
    </script>


    <script src="https://web3forms.com/client/script.js" async defer></script>

    <script>
        function handleWhatsAppCheck() {
            const whatsappCheckbox = document.getElementById("whatsappCheck");
            const whatsappInput = document.getElementById("whatsapp-num");
            const phoneInput = document.getElementById("phone");

            if (whatsappCheckbox.checked) {
                whatsappInput.disabled = true;
                whatsappInput.value = phoneInput.value;
                whatsappCheckbox.value = phoneInput.value;
                whatsappInput.classList.add('bg-zinc-100', 'cursor-not-allowed')
            } else {
                whatsappInput.disabled = false;
                whatsappInput.value = "";
                whatsappCheckbox.value = "";
                whatsappInput.classList.remove('bg-zinc-100', 'cursor-not-allowed')
            }
        }

        function handleCitySelection() {
            const citySelect = document.getElementById("city");
            const otherCityInput = document.getElementById("otherCityInput");
            const otherCity = document.getElementById("otherCity");

            if (citySelect.value === "Others") {
                otherCityInput.style.display = "block"; // Display input when "Others" is selected
                otherCity.required = true; // Make the input field required
            } else {
                otherCityInput.style.display = "none"; // Hide input for other options
                otherCity.value = "";
                otherCity.required = false; // Make the input field non-required
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the form element
            const form = document.getElementById('shootForm');

            // Reset the form on page load or refresh
            form.reset();

            // Optional: Reset additional elements not cleared by form.reset()
            document.querySelectorAll('inpuw-5 h-5t[type="checkbox"]').forEach(el => {
                el.checked = false;
            });
            document.querySelectorAll('input[type="date"]').forEach(el => {
                el.value = '';
            });
            document.querySelectorAll('textarea').forEach(el => {
                el.value = '';
            });
        });
    </script>
</body>

</html>