<!DOCTYPE html>
<html lang="en">

@include('layout.head')




<body>

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-[100px] py-[1rem]    ">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="logo.png" alt="Logo" class="w-20 h-16">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button
                    class="bg-[#66d855] text-white text-sm md:text-lg font-semibold px-5 py-2.5 rounded-full shadow-[0px_5px_0px_0px_#40ba0f] transition-all duration-200 active:translate-y-[5px] active:shadow-none">
                    <a href="#contact">Contact Us</a>
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#how"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">How
                            it works</a>
                    </li>
                    <li>
                        <a href="#blog"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="home" class="min-h-screen max-w-7xl mx-auto pt-32">
        <div class="flex flex-col-reverse md:flex-row mx-6 md:mx-0  items-center">
            <div class="flex flex-col w-full md:w-1/2 gap-6 md:gap-8">
                <h1 class="text-3xl md:text-6xl font-semibold leading-normal">Transformasi Digital Ramah <span
                        class="text-[#66d855]">Lingkungan</span></h1>
                <p class="leading-loose text-justify md:text-left">Kami percaya bahwa pertumbuhan bisnis tidak perlu
                    merusak alam. Gabungkan
                    inovasi dan kepedulian
                    lingkungan melalui strategi digital yang cerdas dan bertanggung jawab.</p>

                <!-- Container untuk button -->
                <div class="flex justify-end md:justify-start">
                    <button
                        class="w-36 md:w-52 flex items-center justify-center gap-2 bg-[#66d855] text-white text-lg md:text-xl font-semibold px-5 py-2.5 
                   rounded-full shadow-[0px_5px_0px_0px_#40ba0f] transition-all duration-200 active:translate-y-[5px] active:shadow-none whitespace-nowrap">
                        <span>Learn More</span>
                        <span>&#8250;</span> <!-- HTML entity for ">" symbol -->
                    </button>
                </div>
            </div>
            <img class="w-full md:w-1/2" src="hero.svg" alt="">
        </div>

    </section>

    <section id="how" class="min-h-screen max-w-7xl mx-auto">
        <div class="flex flex-col w-full p-8 rounded-[40px] 
        bg-gradient-to-b from-[#d1fbd8] to-white">
            <div class="flex flex-col gap-4 md:gap-8 text-center py-8" data-aos="fade-down">
                <h2 class="text-xl md:text-3xl">How it works</h2>
                <div class="flex flex-col gap-2">
                    <h1 class="text-2xl md:text-4xl font-bold">Bersama, Lestarikan <span
                            class="text-[#5d4037]">Lingkungan</span>
                    </h1>
                    <h1 class="text-xl md:text-4xl md:font-bold">Demi Masa Depan Bumi </h1>

                </div>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex flex-col p-10 text-center bg-white items-center drop-shadow-xl rounded-3xl"
                    data-aos="fade-up">
                    <img class="w-full max-h-45" src="reduce.svg" alt="">
                    <h1 class="text-xl font-semibold p-3">Plan. Reduce. Succeed.</h1>
                    <p class="">Kurangi sampah, gunakan ulang barang, dan daur ulang untuk masa depan lebih
                        bersih.</p>
                </div>
                <div class="flex flex-col p-10 text-center bg-white items-center drop-shadow-xl rounded-3xl"
                    data-aos="fade-up">
                    <img class="w-full max-h-45" src="energy.svg" alt="">
                    <h1 class="text-xl font-semibold p-3">Implement & Save Energy,</h1>
                    <p>Gunakan energi bersih untuk mengurangi emisi dan mendukung keberlanjutan.</p>
                </div>
                <div class="flex flex-col p-10 text-center bg-white items-center drop-shadow-xl rounded-3xl"
                    data-aos="fade-up">
                    <img class="w-full max-h-45" src="reduce.svg" alt="">
                    <h1 class="text-xl font-semibold p-3">Begin. Grow. Sustain.</h1>
                    <p>Tanam pohon hari ini untuk mencegah krisis iklim dan menjaga ekosistem.</p>
                </div>

            </div>

        </div>
    </section>


    <section id="blog" class="min-h-screen max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row mx-6 md:mx-0  items-center">
            <img class="w-full md:w-1/2" src="hero.svg" alt="" data-aos="fade-up" data-aos-offset="250">
            <div class="flex flex-col w-full md:w-1/2 gap-6 md:gap-8" data-aos="fade-down" data-aos-offset="250">
                <h1 class="text-3xl md:text-6xl font-semibold leading-normal">Transformasi Digital Ramah <span
                        class="text-[#66d855]">Lingkungan</span></h1>
                <p class="leading-loose text-justify md:text-left">Kami percaya bahwa pertumbuhan bisnis tidak
                    perlu
                    merusak alam. Gabungkan
                    inovasi dan kepedulian
                    lingkungan melalui strategi digital yang cerdas dan bertanggung jawab.</p>

                <!-- Container untuk button -->
                <div class="flex justify-end md:justify-start">
                    <button
                        class="w-36 md:w-52 flex items-center justify-center gap-2 bg-[#66d855] text-white text-lg md:text-xl font-semibold px-5 py-2.5 
                   rounded-full shadow-[0px_5px_0px_0px_#40ba0f] transition-all duration-200 active:translate-y-[5px] active:shadow-none whitespace-nowrap">
                        <span>Learn More</span>
                        <span>&#8250;</span> <!-- HTML entity for ">" symbol -->
                    </button>
                </div>
            </div>
        </div>

    </section>

    <section class="min-h-screen max-w-7xl mx-auto">
        <div class="flex flex-col-reverse md:flex-row mx-6 md:mx-0  items-center">
            <div class="flex flex-col w-full md:w-1/2 gap-6 md:gap-8" data-aos="fade-down" data-aos-offset="250">
                <h1 class="text-3xl md:text-6xl font-semibold leading-normal">Transformasi Digital Ramah <span
                        class="text-[#66d855]">Lingkungan</span></h1>
                <p class="leading-loose text-justify md:text-left">Kami percaya bahwa pertumbuhan bisnis tidak
                    perlu
                    merusak alam. Gabungkan
                    inovasi dan kepedulian
                    lingkungan melalui strategi digital yang cerdas dan bertanggung jawab.</p>

                <!-- Container untuk button -->
                <div class="flex justify-end md:justify-start">
                    <button
                        class="w-36 md:w-52 flex items-center justify-center gap-2 bg-[#66d855] text-white text-lg md:text-xl font-semibold px-5 py-2.5 
                   rounded-full shadow-[0px_5px_0px_0px_#40ba0f] transition-all duration-200 active:translate-y-[5px] active:shadow-none whitespace-nowrap">
                        <span>Learn More</span>
                        <span>&#8250;</span> <!-- HTML entity for ">" symbol -->
                    </button>
                </div>
            </div>
            <img class="w-full md:w-1/2" src="hero.svg" alt="" data-aos="fade-up" data-aos-offset="250">
        </div>

    </section>
    <section id="about" class="min-h-screen max-w-7xl mx-auto flex flex-col">
        <div class="flex flex-col w-full p-8 rounded-[40px] 
        bg-[#d1fbd8]">
            <div class="flex flex-col gap-8 text-center py-8" data-aos="fade-down">
                <h2 class="text-3xl">How it works</h2>
                <div class="flex flex-col gap-2">
                    <h1 class="text-4xl font-bold">Bersama, Lestarikan <span class="text-[#5d4037]">Lingkungan</span>
                    </h1>
                    <h1 class="text-4xl font-bold">Demi Masa Depan Bumi </h1>

                </div>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up">
                <div class="flex flex-col p-10 text-center bg-white items-center drop-shadow-xl rounded-3xl">
                    <img class="w-full max-h-45" src="reduce.svg" alt="">
                    <h1 class="text-xl font-semibold p-3">Plan. Reduce. Succeed.</h1>
                    <p class="">Kurangi sampah, gunakan ulang barang, dan daur ulang untuk masa depan lebih
                        bersih.</p>
                </div>
                <div class="flex flex-col p-10 text-center bg-white items-center drop-shadow-xl rounded-3xl">
                    <img class="w-full max-h-45" src="energy.svg" alt="">
                    <h1 class="text-xl font-semibold p-3">Implement & Save Energy,</h1>
                    <p>Gunakan energi bersih untuk mengurangi emisi dan mendukung keberlanjutan.</p>
                </div>
                <div class="flex flex-col p-10 text-center bg-white items-center drop-shadow-xl rounded-3xl">
                    <img class="w-full max-h-45" src="reduce.svg" alt="">
                    <h1 class="text-xl font-semibold p-3">Begin. Grow. Sustain.</h1>
                    <p>Tanam pohon hari ini untuk mencegah krisis iklim dan menjaga ekosistem.</p>
                </div>

            </div>

        </div>
        <div class="w-[93%] mx-auto bg-[#40ba0f] h-4 rounded-b-full">

        </div>
    </section>

    <section id="contact" class="min-h-screen max-w-7xl mx-auto pt-32">

        <div class="flex flex-col-reverse md:flex-row mx-6 md:mx-0  items-center">
            <div class="flex flex-col w-full md:w-1/2 gap-6 md:gap-8" data-aos="fade-right">
                <h1 class="text-3xl md:text-6xl font-semibold leading-normal">Transformasi Digital Ramah <span
                        class="text-[#66d855]">Lingkungan</span></h1>
                <p class="leading-loose text-justify md:text-left">Kami percaya bahwa pertumbuhan bisnis tidak
                    perlu
                    merusak alam. Gabungkan
                    inovasi dan kepedulian
                    lingkungan melalui strategi digital yang cerdas dan bertanggung jawab.</p>

                <!-- Container untuk button -->
                <div class="flex justify-end md:justify-start">
                    <button
                        class="w-36 md:w-52 flex items-center justify-center gap-2 bg-[#66d855] text-white text-lg md:text-xl font-semibold px-5 py-2.5 
                       rounded-full shadow-[0px_5px_0px_0px_#40ba0f] transition-all duration-200 active:translate-y-[5px] active:shadow-none whitespace-nowrap">
                        <span>Learn More</span>
                        <span>&#8250;</span> <!-- HTML entity for ">" symbol -->
                    </button>
                </div>
            </div>
            <img class="w-1/2" src="announcement.jpg" alt="" data-aos="fade-left">
        </div>
        {{-- 
        <nav class="flex justify-between items-center px-[100px] py-[1rem]">
            <!-- Logo Section -->
            <img src="logo.png" alt="Logo" class="w-25 h-20">

            <!-- Navigation Links -->
            <ul class="flex gap-12 text-xl font-semibold items-center">
                <li>
                    <a href="#" class="hover:underline">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">How it works</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">About Us</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Blog</a>
                </li>
            </ul>

            <!-- Contact Us Button -->
            <button
                class="bg-[#66d855] text-white text-xl font-semibold px-5 py-2.5 rounded-full shadow-[0px_5px_0px_0px_#40ba0f] transition-all duration-200 active:translate-y-[5px] active:shadow-none">
                <a href="#">Contact Us</a>
            </button>
        </nav> --}}

    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
        });
    </script>
</body>


</html>