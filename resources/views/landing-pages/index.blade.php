<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0000" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>The Bunny Teeth Photography</title>
    <link rel="stylesheet" href="{{ asset('storage/style.css') }}" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Adamina&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/c0fbdcbfe4.js" crossorigin="anonymous"></script>
</head>

<body class="custom-scrollbar" style="height: 400px; overflow-y: auto;">
    {{-- <header>
        <nav class="shadow-sm absolute top-0 w-full z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="#"><img class="h-16" src="./Images/logo.png" alt="Logo" /></a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex items-center space-x-10 poppins-regular">
                        <a href="#"
                            class="text-white border-b-2 border-amber-500 px-1 py-2 text-md font-medium">Home</a>
                        <a href="#about" class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">About
                            us</a>
                        <a href="#services"
                            class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">Services</a>
                        <a href="#gallery"
                            class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">Gallery</a>
                        <a href="#contact" class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">Contact
                            Us</a>
                    </div>

                    <!-- Book Now Button -->
                    <div class="hidden md:flex items-center">
                        <a href="./book"
                            class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 rounded-full text-sm font-medium">Book
                            Now</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button id="menu-toggle" type="button" class="text-gray-100 hover:text-gray-100 p-2">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white">
                <div class="px-3 pt-2 pb-3 space-y-1 poppins-regular text-center">
                    <a href="#" class="text-gray-900 block px-3 py-2 text-base font-medium border-b">Home</a>
                    <a href="#about"
                        class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">About
                        us</a>
                    <a href="#services"
                        class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Services</a>
                    <a href="#gallery"
                        class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Gallery</a>
                    <a href="#contact"
                        class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium">Contact Us</a>
                    <a href="./book"
                        class="text-gray-100 hover:text-white bg-amber-500 rounded-sm block px-3 py-2 text-base font-medium">Book
                        Now</a>
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
    </header> --}}
    <x-landingnav />
    <main>
        <!-- Hero Bg -->
        <div>
            <a class="play-btn" href="tel:+917824999900" target="_blank" class="z-[1000]"><i
                    class="fa-solid fa-phone mr-2"></i></a>

        </div>

        <div>
            <div style="
            transition: all 1s ease-in-out;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
          " id="home-bg" style="background-attachment: fixed">
                <div class="bg-black/30 h-full flex justify-center items-end pb-44 lg:pb-28">
                    <div>
                        <h1 class="poppins-semibold text-center text-white/80 text-sm md:text-xl">
                            THE BUNNY TEETH
                        </h1>
                        <div>
                            <h1 class="poppins-semibold text-2xl text-center text-amber-500 md:text-4xl">
                                PHOTOGRAPHY
                            </h1>
                        </div>
                        <p class="poppins-semibold text-white text-2xl text-center md:text-6xl pt-3 md:pt-5">
                            "Making Memories <span class="text-amber-500">Tangible</span>"
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section id="about">
            <div class="about-us mt-5 lg:mt-10" id="about-us">
                <h1 class="poppins-medium text-md lg:text-xl py-3 lg:py-5 yellow-text text-center" data-aos="fade-up"
                    data-aos-duration="1500">
                    ABOUT US
                </h1>
                <p class="poppins-regular text-2xl lg:text-4xl pb-5 text-black text-center" data-aos="fade-up"
                    data-aos-duration="1500">
                    Crafting memories with a personal touch.
                </p>
                <p class="poppins-regular text-center text-md lg:text-xl px-[20px] lg:px-20" data-aos="fade-up"
                    data-aos-duration="1500">
                    We specialize in capturing moments that tell stories. Explore our
                    portfolio of stunning photography projects, where every frame is
                    crafted with creativity and precision. With us, you will discover
                    your perfect shot, the one that encapsulates the essence of your
                    being and freezes it in time for eternity. Join us on this magical
                    journey, where precious memories transform into unforgettable
                    experiences.
                </p>

                <div class="marquee overflow-hidden mt-10 relative" data-aos="fade-up" data-aos-duration="1500">
                    <div class="flex marquee-content animate-marquee">
                        <img class="w-[200px] h-[300px] lg:w-[350px] lg:h-[450px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 1" />
                        <img class="w-[200px] h-[350px] lg:w-[350px] lg:h-[500px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 2" />
                        <img class="w-[200px] h-[300px] lg:w-[350px] lg:h-[450px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 3" />
                        <img class="w-[200px] h-[350px] lg:w-[350px] lg:h-[500px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 4" />
                        <img class="w-[200px] h-[300px] lg:w-[350px] lg:h-[450px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 5" />
                        <img class="w-[200px] h-[350px] lg:w-[350px] lg:h-[500px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus6.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 6" />
                        <img class="w-[200px] h-[300px] lg:w-[350px] lg:h-[450px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus7.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 7" />
                        <img class="w-[200px] h-[350px] lg:w-[350px] lg:h-[500px] object-cover mx-4"
                            src="{{ asset('storage/aboutus/aboutus8.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                            alt="Image 8" />
                    </div>
                </div>
            </div>
            <!-- <p class="poppins-regular text-md">our clients’ happiness and trust fuel our commitment to exceptional service and creativity.</p> -->

            <div class="my-20 lg:my-24 px-10" id="counter">
                <div id="counter-section" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 text-center">
                    <div>
                        <h1 class="adamina-regular text-4xl lg:text-5xl counter" data-target="1400" data-suffix="+">
                            0+
                        </h1>
                        <h3 class="poppins-medium yellow-text lg:text-lg text-md py-2 lg:py-4">
                            Moments Captured
                        </h3>
                        <p class="poppins-regular text-md px-10">
                            We capture the essence of every special moment with creativity
                            and passion.
                        </p>
                    </div>
                    <div>
                        <h1 class="adamina-regular text-4xl lg:text-5xl counter" data-target="6" data-suffix="+">
                            0+
                        </h1>
                        <h3 class="poppins-medium yellow-text lg:text-lg text-md py-2 lg:py-4">
                            Years Of Experience
                        </h3>
                        <p class="poppins-regular text-md px-10">
                            We have honed our skills over the years to deliver outstanding
                            photography services.
                        </p>
                    </div>
                    <div>
                        <h1 class="adamina-regular text-4xl lg:text-5xl counter" data-target="1000" data-suffix="+">
                            0+
                        </h1>
                        <h3 class="poppins-medium yellow-text lg:text-lg text-md py-2 lg:py-4">
                            Satisfied Clients
                        </h3>
                        <p class="poppins-regular text-md px-10">
                            Our clients’ happiness and trust fuel our commitment to
                            exceptional service.
                        </p>
                    </div>
                    <div>
                        <h1 class="adamina-regular text-4xl lg:text-5xl counter" data-target="100" data-suffix="%">
                            0%
                        </h1>
                        <h3 class="poppins-medium yellow-text lg:text-lg text-md py-2 lg:py-4">
                            Client Satisfaction
                        </h3>
                        <p class="poppins-regular text-md px-10">
                            Delivering quality projects with unmatched precision and
                            attention to detail.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" data-aos="fade-up" data-aos-duration="1500">
            <div class="h-1/2 lg:h-screen md:flex">
                <!-- Left Section -->
                <div class="md:w-3/5 yellow-bg py-24">
                    <div class="flex justify-center h-full items-center">
                        <div class="w-5/6 flex flex-col">
                            <!-- Title Section -->
                            <h1 class="poppins-medium text-md lg:text-xl py-5 text-white text-start">
                                TESTIMONIALS
                            </h1>
                            <p class="poppins-regular text-2xl lg:text-4xl pb-5 md:pb-10 text-white text-start">
                                Client Stories
                            </p>

                            <!-- Testimonial Content -->
                            <div class="adamina-regular text-md lg:text-2xl text-white text-start overflow-hidden"
                                style="min-height: 12rem" id="testimonial-content">
                                “ Look no further for capturing your baby’s precious moments.
                                The dynamic duo - Sameed and Aishwarya - ensured to provide us
                                with the best service. Irrespective of having done a
                                full-fledged shoot before ours, they were patient and
                                understanding in dealing with our child and also with all our
                                requests. They give the highest priority to the baby and
                                his/her needs. The theme setup and quality of photos were both
                                amazing. A fabulous experience overall. Thanks for the amazing
                                work you guys do!! Keep it up!! ”
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-end pt-14 lg:pt-0 px-10">
                        <div>
                            <a href="#" id="prev-btn" class="w-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-16 w-12 inline"
                                    style="rotate: 135deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                    <path
                                        d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                        fill="white"></path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="#" id="next-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-16 w-12 inline"
                                    style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                    <path
                                        d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                        fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Section (Static Image) -->
                <div class="md:w-2/5 h-[400px] lg:h-screen bg-cover bg-center"
                    style="background-image: url('{{ asset('storage/testimonials/testimonials1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}')">
                </div>
            </div>
        </section>

        {{-- <section id="services" class="pt-5 lg:pt-20 h-fit lg:mb-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="lg:px-20" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="poppins-medium text-md lg:text-xl py-4 yellow-text text-center lg:text-start">
                        OUR SERVICES
                    </h1>
                    <h3 class="poppins-regular text-center lg:text-start text-2xl lg:text-4xl pb-5 hidden md:flex">
                        Make memories tangible with<br />our expert services.
                    </h3>
                    <h3 class="poppins-regular px-5 text-center lg:text-start text-2xl lg:text-4xl pb-5 md:hidden">
                        Make memories tangible with our expert services.
                    </h3>
                    <p class="poppins-regular text-center lg:text-start px-5 lg:px-0 text-md lg:text-lg">
                        At The Bunny Teeth Photography, we pride ourselves on our ability
                        to tell stories through our lens. Every shot is an emotion-filled
                        tale waiting to be unraveled. Our tech-driven approach enhances
                        our storytelling capabilities, allowing us to weave together
                        moments that transcend time and transport you back to the very
                        essence of the occasion.
                    </p>
                </div>
                <div class="flex justify-center items-center mt-10 lg:mt-0">
                    <div class="w-3/4 lg:w-fit hover01 px-5" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/newborn"><img
                                    src="{{ asset('storage/services/services1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                                    class="lg:w-full" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/newborn">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Newborn Photography
                                    </h1>
                                </a>
                                <a href="./services/newborn">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        6 - 40 Days
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/newborn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10 lg:mt-[-250px]">
                    <div class="w-3/4 lg:w-fit hover01 px-5" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/sitter"><img
                                    src="{{ asset('storage/services/services2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                                    class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/sitter">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Sitter Photography
                                    </h1>
                                </a>
                                <a href="./services/sitter">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        7 - 12 Months
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/sitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-start"></div>
                <div class="flex justify-end items-start"></div>
                <div class="flex justify-center items-center mt-10 lg:mt-[-250px]">
                    <div class="w-3/4 lg:w-fit hover01 px-5" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/toddler"><img
                                    src="{{ asset('storage/services/services3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                                    class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/toddler">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Toddler & Young Kids
                                    </h1>
                                </a>

                                <a href="./services/toddler">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text lg:text-start">
                                        1 - 3 Years
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/toddler">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10 lg:mt-[-250px]">
                    <div class="w-3/4 lg:w-fit hover01 px-5" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/family"><img
                                    src="{{ asset('storage/services/services4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                                    class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/family">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Family Photography
                                    </h1>
                                </a>
                                <a href="./services/family">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        Indoor & Outdoor
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/family">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-start"></div>

                <div class="lg:py-5">
                    <div class="lg:flex justify-around items-end px-24 h-full hidden">
                        <a href="./services" class="rounded-full">
                            <div href="#"
                                class="px-6 py-3 rounded-full border border-black poppins-regular flex justify-center items-center">
                                <pclass="">See More Services</pclass=>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 inline pb-3 ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z">
                                        </path>
                                    </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center items-center mt-10 lg:mt-[-250px]">
                    <div class="w-3/4 lg:w-fit hover01" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/birthday"><img
                                    src="{{ asset('storage/services/services5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                                    class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/birthday">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Birthday Photography
                                    </h1>
                                </a>
                                <a href="./services/birthday">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        1 - 7 Years
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/birthday">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-end px-10 mt-5 lg:hidden">

                <a href="./services" class="rounded-full">
                    <div href="#"
                        class="px-4 py-2 rounded-full border border-black poppins-regular flex justify-center items-center">
                        <pclass="">See More Services</pclass=>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 inline pb-3 ml-3" style="rotate: 315deg"
                                xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                <path
                                    d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z">
                                </path>
                            </svg>
                    </div>
                </a>
            </div>
        </section> --}}

        <section id="services" class="pt-5 lg:pt-20 h-fit lg:mb-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="lg:px-20" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="poppins-medium text-md lg:text-xl py-4 yellow-text text-center lg:text-start">
                        OUR SERVICES
                    </h1>
                    <h3 class="poppins-regular text-center lg:text-start text-2xl lg:text-4xl pb-5 hidden md:flex">
                        Make memories tangible with<br />our expert services.
                    </h3>
                    <h3 class="poppins-regular px-5 text-center lg:text-start text-2xl lg:text-4xl pb-5 md:hidden">
                        Make memories tangible with our expert services.
                    </h3>
                    <p class="poppins-regular text-center lg:text-start px-5 lg:px-0 text-md xl:text-lg">
                        At The Bunny Teeth Photography, we pride ourselves on our ability
                        to tell stories through our lens. Every shot is an emotion-filled
                        tale waiting to be unraveled. Our tech-driven approach enhances
                        our storytelling capabilities, allowing us to weave together
                        moments that transcend time and transport you back to the very
                        essence of the occasion.
                    </p>
                </div>
                <div class="flex justify-center items-end mt-10 lg:mt-0">
                    <div class="w-3/4 xl:w-fit hover01 2xl:px-0 lg:px-10" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/newborn"><img src="{{ asset('storage/services/services1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" class="lg:w-full" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/newborn">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Newborn Photography
                                    </h1>
                                </a>
                                <a href="./services/newborn">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        6 - 40 Days
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/newborn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10 lg:mt-[-100px] xl:mt-[-250px]">
                    <div class="w-3/4 xl:w-fit hover01 2xl:px-0 lg:px-10" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/sitter"><img src="{{ asset('storage/services/services2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/sitter">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Sitter Photography
                                    </h1>
                                </a>
                                <a href="./services/sitter">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        7 - 12 Months
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/sitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-start"></div>
                <div class="flex justify-end items-start"></div>
                <div class="flex justify-center items-center mt-10  lg:mt-[-150px] xl:mt-[-250px]">
                    <div class="w-3/4 xl:w-fit hover01 2xl:px-0 lg:px-10" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/toddler"><img src="{{ asset('storage/services/services3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/toddler">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Toddler & Young Kids
                                    </h1>
                                </a>

                                <a href="./services/toddler">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text lg:text-start">
                                        1 - 3 Years
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/toddler">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10  lg:mt-[-150px] xl:mt-[-250px]">
                    <div class="w-3/4 xl:w-fit hover01 2xl:px-0 lg:px-10" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/family"><img src="{{ asset('storage/services/services4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/family">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Family Photography
                                    </h1>
                                </a>
                                <a href="./services/family">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        Indoor & Outdoor
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/family">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start items-start"></div>

                <div class="lg:py-5">
                    <div class="lg:flex justify-around items-end px-24 h-full hidden">
                        <a href="../services" class="rounded-full">
                            <div href="#"
                                class="px-6 py-3 rounded-full border border-black poppins-regular flex justify-center items-center">
                                <p class="">See More Services</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 inline pb-3 ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z">
                                        </path>
                                    </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center items-center mt-10  lg:mt-[-150px] xl:mt-[-250px]">
                    <div class="w-3/4 xl:w-fit hover01 2xl:px-0 lg:px-10" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <a href="./services/birthday"><img src="{{ asset('storage/services/services5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" class="" alt="" /></a>
                        </figure>
                        <div class="flex justify-between">
                            <div>
                                <a href="./services/birthday">
                                    <h1 class="poppins-medium text-lg lg:text-3xl pt-4">
                                        Birthday Photography
                                    </h1>
                                </a>
                                <a href="./services/birthday">
                                    <p class="poppins-medium text-sm lg:text-xl pt-1 yellow-text text-start">
                                        1 - 7 Years
                                    </p>
                                </a>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="./services/birthday">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 lg:w-10 inline ml-3"
                                        style="rotate: 315deg" xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                        <path
                                            d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"
                                            fill="black" stroke="black" stroke-width="2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-end px-10 mt-5 lg:hidden">

                <a href="./services" class="rounded-full">
                    <div href="#"
                        class="px-4 py-2 rounded-full border border-black poppins-regular flex justify-center items-center">
                        <pclass="">See More Services</pclass=>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 inline pb-3 ml-3" style="rotate: 315deg"
                                xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                <path
                                    d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z">
                                </path>
                            </svg>
                    </div>
                </a>
            </div>
        </section>

        <section id="gallery" class="h-fit lg:mb-10 mt-10" data-aos="fade-up" data-aos-duration="1500">
            <div class="flex flex-col items-center">
                <h1 class="poppins-medium text-md lg:text-xl py-4 yellow-text text-center">
                    GALLERY
                </h1>
                <h3 class="poppins-regular text-2xl lg:text-4xl pb-5 text-black text-center">
                    Unveiling the Artistry
                </h3>
            </div>

            <nav class="flex justify-center items-center p-4">
                <ul class="flex space-x-4" id="gallery-navbar">
                    <li data-target="container1"
                        class="poppins-regular text-base md:text-xl cursor-pointer text-[#FFB200] border-b-4 border-[#FFB200]">
                        Baby
                    </li>
                    <li data-target="container2" class="poppins-regular text-base md:text-xl cursor-pointer">
                        Maternity
                    </li>
                    <li data-target="container3" class="poppins-regular text-base md:text-xl cursor-pointer">
                        Family
                    </li>
                    <li data-target="container4" class="poppins-regular text-base md:text-xl cursor-pointer">
                        Kids
                    </li>
                </ul>
            </nav>

            <div id="container1" class="p-5 grid grid-cols-2 md:grid-cols-3 gap-4" data-aos="zoom-in"
                data-aos-duration="1000">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery6.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
            </div>

            <div id="container2" class="hidden p-5 grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery7.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery8.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery9.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery10.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery11.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery12.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
            </div>

            <div id="container3" class="hidden p-5 grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery13.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery14.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery15.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery16.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery17.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery18.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
            </div>

            <div id="container4" class="hidden p-5 grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery19.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery20.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery21.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery22.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery23.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/gallery/gallery24.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}"
                        alt="" />
                </div>
            </div>

            <div class="flex justify-center items-center">
                <a href="./gallery" class="rounded-full">
                    <div href="#"
                        class="px-6 py-3 rounded-full border border-black poppins-regular flex justify-center items-center">
                        <pclass="">See More Gallery</pclass=>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 inline pb-3 ml-3" style="rotate: 315deg"
                                xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                                <path
                                    d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z">
                                </path>
                            </svg>
                    </div>
                </a>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="flex flex-col justify-start items-center" id="contact" data-aos="fade-up"
            data-aos-duration="1500">
            <div class="flex flex-col items-center">
                <h1 class="poppins-medium text-md lg:text-xl py-4 yellow-text text-center">
                    CONTACT US
                </h1>
                <h3 class="poppins-regular text-2xl lg:text-4xl pb-5 text-black text-center">
                    Get in touch with us !
                </h3>
            </div>

            <div
                class="w-full xl:w-3/4 p-5 gap-4 flex flex-col md:flex-row justify-start md:justify-between items-center">
                <!-- Phone Card -->
                <a href="tel:+917824999900" target="_blank"
                    class="w-full max-w-96 h-48 p-5 rounded-xl flex flex-col justify-center items-center shadow-md border border-amber-500">
                    <div class="mb-2 flex justify-center items-center rounded-full w-16 h-16 border border-amber-500">
                        <i class="fa-solid fa-phone text-[#FFB200] text-2xl"></i>
                    </div>

                    <p class="text-center poppins-regular text-sm lg:text-base">
                        +91 78249 99900
                    </p>
                </a>

                <!-- Instagram Card -->
                <a href="https://www.instagram.com/thebunnyteeth.photography/" target="_blank"
                    class="w-full max-w-96 h-48 p-5 rounded-xl flex flex-col justify-center items-center shadow-md border border-amber-500">
                    <div class="mb-2 flex justify-center items-center rounded-full w-16 h-16 border border-amber-500">
                        <i class="fa-brands fa-instagram text-[#FFB200] text-2xl"></i>
                    </div>

                    <p class="text-center poppins-regular text-sm lg:text-base">
                        thebunnyteeth.photography
                    </p>
                </a>

                <!-- Address Card -->
                <a href="https://maps.app.goo.gl/KnGtiL78DHaNhVk17" target="_blank"
                    class="w-full max-w-96 h-48 p-5 rounded-xl flex flex-col justify-center items-center shadow-md border border-amber-500">
                    <div class="mb-2 flex justify-center items-center rounded-full w-16 h-16 border border-amber-500">
                        <i class="fa-solid fa-location-dot text-[#FFB200] text-2xl"></i>
                    </div>

                    <p class="text-center poppins-regular text-sm text-wrap lg:text-base">
                        2nd Street, Ram Nagar North, Madipakkam, Chennai 600091
                    </p>
                </a>
            </div>

            <!-- Google map container -->
            <div class="w-full xl:w-3/4 p-5">
                <iframe class="w-full rounded-xl shadow-md"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0778211186785!2d80.20765587420487!3d12.966872014983673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dba02cb5f19%3A0xef0ef4173ca8e863!2sThe%20Bunny%20Teeth%C2%AE%EF%B8%8F%20Photography!5e0!3m2!1sen!2sin!4v1698487938253!5m2!1sen!2sin"
                    width="100%" height="400" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Book now button -->
            <a href="./book" class="rounded-full">
                <div href="#"
                    class="px-6 py-3 rounded-full border border-black poppins-regular flex justify-center items-center">
                    <pclass="">Book Now</pclass=>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 inline pb-3 ml-3" style="rotate: 315deg"
                            xml:space="preserve" viewBox="0 0 50 50" id="arrow">
                            <path
                                d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z">
                            </path>
                        </svg>
                </div>
            </a>
        </section>
    </main>

    <!-- Footer Section -->
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
                    <p class="text-sm lg:text-base xl:text-2xl poppins-regular text-white my-2">
                        <i class="fa-solid fa-location-dot mr-2"></i> 2nd Street, Ram
                        Nagar North,<br />
                        Madipakkam, Chennai 600091.
                    </p>
                </div>

                <!-- Quote -->
                <div>
                    <p class="hidden md:block text-end text-base lg:text-2xl xl:text-2xl poppins-regular text-white">
                        Let's create timeless memories through the <br />
                        lens of artistry. Reach out, and weave your <br />
                        unique story into captivating frames.
                    </p>
                </div>
            </div>

            <!-- Logo & Copyright -->
            <div class="mt-10 lg:-my-10 flex flex-col items-center">
                <img class="w-32 lg:w-52" src="{{ asset('storage/TheBunnyTeeth_Logo.png') }}"
                    alt="TheBunnyTeeth_Logo" />
                <p class="text-sm lg:text-base 2xl:text-md poppins-regular text-center text-white my-2">
                    Copyright @
                    <span class="text-[#FFB200]">The Bunny Teeth Photography</span>. All
                    Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('storage/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- In your Blade template -->
    <script>
        (function () {
            const baseImagePaths = [
                "{{ asset('storage/homepage/home_bg_1.jpg') }}",
                "{{ asset('storage/homepage/home_bg_2.jpg') }}",
                "{{ asset('storage/homepage/home_bg_3.jpg') }}",
                "{{ asset('storage/homepage/home_bg_4.jpg') }}"
            ];

            let autoBgCurrentIndex = 0;

            function getBackgroundImageUrl(imagePath) {
                // Add a timestamp to force the browser to fetch the updated image
                return `${imagePath}?v=${Date.now()}`;
            }

            function changeBackgroundImage() {
                const homeBg = document.getElementById('home-bg');

                if (homeBg) {
                    const imagePath = baseImagePaths[autoBgCurrentIndex];
                    homeBg.style.backgroundImage = `url(${getBackgroundImageUrl(imagePath)})`;
                }

                autoBgCurrentIndex = (autoBgCurrentIndex + 1) % baseImagePaths.length;
            }

            // Change the background image every 3 seconds
            setInterval(changeBackgroundImage, 3000);
            changeBackgroundImage();
        })();
    </script>
</body>

</html>