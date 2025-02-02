<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO Meta Tags -->
  <meta name="description" content="Capture the purest moments of your baby's first smiles and giggles with professional Baby Photography at The Bunny Teeth Photography. Specializing in infants aged 3-6 months, we create high-quality portraits that beautifully preserve your baby's charm." />
  <meta name="keywords" content="baby photography, infant photography, baby portraits, newborn photography, first smiles, baby giggles, professional baby photographer, 3-6 months old photography, baby photography services, cherish baby moments" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="The Bunny Teeth Photography" />

  <!-- Open Graph Meta Tags (For social sharing) -->
  <meta property="og:title" content="Baby Photography | The Bunny Teeth Photography" />
  <meta property="og:description" content="Capture your baby's first smiles and giggles with professional Baby Photography services from The Bunny Teeth Photography. Specializing in infants aged 3-6 months, we deliver heartwarming, high-quality portraits." />
  <meta property="og:image" content="{{ asset('storage/services/servicesImg/baby/main_bg.jpg') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card Meta Tags (For Twitter Sharing) -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@yourtwitterhandle" /> <!-- Replace with your Twitter handle -->
  <meta name="twitter:title" content="Baby Photography | The Bunny Teeth Photography" />
  <meta name="twitter:description" content="Preserve the early moments of your baby's life with professional Baby Photography from The Bunny Teeth Photography. Specializing in portraits of babies aged 3-6 months, we capture heartwarming memories." />
  <meta name="twitter:image" content="{{ asset('storage/services/servicesImg/baby/main_bg.jpg') }}" />

  <title>Baby Photography | The Bunny Teeth Photography</title>

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
            <a href="../../"><img class="h-16" src="{{ asset('storage/TheBunnyTeeth_Logo.png') }}" alt="Logo" /></a>
          </div>

          <!-- Navigation Links -->
          <div class="hidden md:flex items-center space-x-10 poppins-regular">
            <a href="../../" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Home</a>
            <a href="../../#about" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">About us</a>
            <a href="../../services" class="text-gray-900 border-b-2 border-amber-500 px-1 py-2 text-md font-medium">Services</a>
            <a href="../../#gallery" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Gallery</a>
            <a href="../../#contact" class="text-gray-500 hover:text-gray-900 px-1 py-2 text-md font-medium">Contact Us</a>
          </div>

          <!-- Book Now Button -->
          <div class="hidden md:flex items-center">
            <a href="../../book" class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 rounded-full text-sm font-medium">Book Now</a>
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
          <a href="../" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Home</a>
          <a href="../../#about" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">About us</a>
          <a href="../../services" class="text-gray-900 block px-3 py-2 text-base font-medium border-b">Services</a>
          <a href="../../#gallery" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Gallery</a>
          <a href="../../#contact" class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium">Contact Us</a>
          <a href="../../book" class="text-gray-100 hover:text-white bg-amber-500 rounded-sm block px-3 py-2 text-base font-medium">Book Now</a>
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
        class="z-[1000]"><i class="fa-solid fa-phone mr-2"></i></a>

    </div>
    <div class="px-5" data-aos="fade-up" data-aos-duration="1000">
      <img
        class="rounded-2xl"
        src="{{ asset('storage/services/servicesImg/baby/main_bg.jpg') }}"
        alt="baby-bg" />
    </div>

    <div id="gallery" class="container-fluid mx-auto p-5">
      <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
        <!-- First Column -->
        <div class="col-span-1 p-0" data-aos="fade-up" data-aos-duration="1000">
          <img
            class="rounded-xl w-full h-auto"
            src="{{ asset('storage/services/servicesImg/baby/portrait1.jpg') }}"
            alt="" />
        </div>

        <!-- Second Column (hidden on small screens) -->
        <div class="hidden md:grid md:col-span-1 gap-3">
          <div class="p-0" data-aos="fade-up" data-aos-duration="1000">
            <img
              class="rounded-xl w-full h-auto"
              src="{{ asset('storage/services/servicesImg/baby/land1.jpg') }}"
              alt="" />
          </div>
          <div class="p-0" data-aos="fade-up" data-aos-duration="1000">
            <img
              class="rounded-xl w-full h-auto"
              src="{{ asset('storage/services/servicesImg/baby/land2.jpg') }}"
              alt="" />
          </div>
        </div>

        <!-- Third Column -->
        <div class="col-span-1 p-0" data-aos="fade-up" data-aos-duration="1000">
          <img
            class="rounded-xl w-full h-auto"
            src="{{ asset('storage/services/servicesImg/baby/portrait2.jpg') }}"
            alt="" />
        </div>

        <!-- Landscape Image (visible only on small screens) -->
        <div class="col-span-2 md:hidden" data-aos="fade-up" data-aos-duration="1000">
          <img
            class="rounded-xl w-full h-auto"
            src="{{ asset('storage/services/servicesImg/baby/landscape.jpg') }}"
            alt="" />
        </div>
      </div>
    </div>

    <div class="py-10" data-aos="fade-up" data-aos-duration="1000">
      <h1
        class="poppins-medium text-md lg:text-xl py-5 yellow-text text-center">
        BABY PHOTOGRAPHY
      </h1>
      <h3
        class="poppins-regular text-center text-lg lg:text-2xl px-[20px] lg:px-20">
        Capture the purest moments of your baby's first smiles and giggles
        with our specialized photography services for infants aged 3-6 months.
        At The Bunny Teeth Photography, we excel at crafting high-quality
        portraits that beautifully encapsulate your little one's charm. Our
        expert photographers are skilled in creating tender, heartwarming
        memories that will last a lifetime. Trust us to deliver precious
        snapshots that celebrate this precious stage of your baby's life.
        Cherish these early moments forever.
      </h3>
    </div>
  </main>

  <!-- Footer Section -->
  <footer class="p-2 mt-5 lg:mt-10">
    <div class="h-full p-6 md:p-10 bg-black/90 rounded-xl">
      <div
        class="flex flex-col items-start md:flex-row md:justify-between md:items-start">
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
        <p
          class="text-sm lg:text-base 2xl:text-md poppins-regular text-center text-white my-2">
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
  <script src="{{ asset('storage/script.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>