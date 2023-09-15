<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        TypeSwitch | Free File Convertor
    </title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <div class="ud-header absolute left-0 top-0 z-40 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="index.html" class="navbar-logo block w-full py-5">
                        <img src="assets/images/logo/logo-white.svg" alt="logo" class="header-logo w-full" />
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <button id="navbarToggler"
                            class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        </button>
                        <nav id="navbarCollapse"
                            class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none xl:px-6">
                            <ul class="blcok lg:flex">
                                <li class="group relative">
                                    <a href="#home"
                                        class="ud-menu-scroll text-dark group-hover:text-primary mx-8 flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Home
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#about"
                                        class="ud-menu-scroll text-dark group-hover:text-primary mx-8 flex py-2 text-base lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        About
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#pricing"
                                        class="ud-menu-scroll text-dark group-hover:text-primary mx-8 flex py-2 text-base lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Pricing
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#team"
                                        class="ud-menu-scroll text-dark group-hover:text-primary mx-8 flex py-2 text-base lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Team
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#contact"
                                        class="ud-menu-scroll text-dark group-hover:text-primary mx-8 flex py-2 text-base lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Contact
                                    </a>
                                </li>
                                <li class="submenu-item group relative">
                                    <a href="javascript:void(0)"
                                        class="text-dark group-hover:text-primary relative mx-8 flex py-2 text-base after:absolute after:right-1 after:top-1/2 after:mt-[-2px] after:h-2 after:w-2 after:-translate-y-1/2 after:rotate-45 after:border-b-2 after:border-r-2 after:border-current lg:ml-8 lg:mr-0 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:after:right-0 lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12">
                                        Pages
                                    </a>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="about.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            About Page
                                        </a>
                                        <a href="pricing.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            Pricing Page
                                        </a>
                                        <a href="contact.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            Contact Page
                                        </a>
                                        <a href="blog-grids.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            Blog Grid Page
                                        </a>
                                        <a href="blog-details.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            Blog Details Page
                                        </a>
                                        <a href="signup.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            Sign Up Page
                                        </a>
                                        <a href="signin.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            Sign In Page
                                        </a>
                                        <a href="404.html"
                                            class="text-body-color hover:text-primary block rounded px-4 py-[10px] text-sm">
                                            404 Page
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                        <a href="signin.html"
                            class="loginBtn px-7 py-3 text-base font-medium text-white hover:opacity-70">
                            Sign In
                        </a>
                        <a href="signup.html"
                            class="hover:text-dark signUpBtn rounded-lg bg-white bg-opacity-20 px-6 py-3 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div id="home" class="bg-primary relative pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                        <h1
                            class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug">
                            TypeSwitch
                        </h1>
                        <p
                            class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed">
                            Download videos and convert videos, audio and images. </br> All in one place.
                        </p>
                        <input type="text" name="fullName" placeholder="Paste Video Link Here"
                            class="focus:border-primary border-rounded mb-10 w-2/4 border-[#f1f1f1] p-4 focus:outline-none">
                        <ul class="mb-10 flex flex-wrap items-center justify-center">
                            <li>
                                <a href="https://links.tailgrids.com/play-download"
                                    class="text-dark hover:text-primary inline-flex items-center justify-center rounded-lg bg-white px-6 py-4 text-center text-base font-medium transition duration-300 ease-in-out hover:shadow-lg sm:px-10">
                                    Download Now
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/tailgrids/play-tailwind" target="_blank"
                                    class="flex items-center px-6 py-4 text-base font-medium text-white transition duration-300 ease-in-out hover:opacity-70 sm:px-10">
                                    Star on Github
                                    <span class="pl-2">
                                        <svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
                                            <path
                                                d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2812 0.281319C16.0625 0.468819 16.0312 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0312 7.21882 16.0625 7.56257 16.2812 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7812 7.90632 16.9375 7.84382 17.0312 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="wow fadeInUp text-center" data-wow-delay=".3s">
                            <img src="assets/images/hero/brand.svg" alt="image"
                                class="mx-auto w-full max-w-[250px] opacity-50 transition duration-300 ease-in-out hover:opacity-100" />
                        </div>
                    </div>
                </div>

                <div class="w-full px-4">
                    <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
                        <div class="mt-16">
                            <img src="assets/images/hero/hero-image.jpg" alt="hero"
                                class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
                        </div>
                        <div class="absolute -left-9 bottom-0 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667"
                                    transform="rotate(-90 1.66667 104)" fill="white" />
                                <circle cx="16.3333" cy="104" r="1.66667"
                                    transform="rotate(-90 16.3333 104)" fill="white" />
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                    fill="white" />
                                <circle cx="45.6667" cy="104" r="1.66667"
                                    transform="rotate(-90 45.6667 104)" fill="white" />
                                <circle cx="60.3333" cy="104" r="1.66667"
                                    transform="rotate(-90 60.3333 104)" fill="white" />
                                <circle cx="88.6667" cy="104" r="1.66667"
                                    transform="rotate(-90 88.6667 104)" fill="white" />
                                <circle cx="117.667" cy="104" r="1.66667"
                                    transform="rotate(-90 117.667 104)" fill="white" />
                                <circle cx="74.6667" cy="104" r="1.66667"
                                    transform="rotate(-90 74.6667 104)" fill="white" />
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                    fill="white" />
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                    fill="white" />
                                <circle cx="1.66667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 1.66667 89.3333)" fill="white" />
                                <circle cx="16.3333" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 16.3333 89.3333)" fill="white" />
                                <circle cx="31" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 31 89.3333)" fill="white" />
                                <circle cx="45.6667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 45.6667 89.3333)" fill="white" />
                                <circle cx="60.3333" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 89.3338)" fill="white" />
                                <circle cx="88.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 89.3338)" fill="white" />
                                <circle cx="117.667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 117.667 89.3338)" fill="white" />
                                <circle cx="74.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 89.3338)" fill="white" />
                                <circle cx="103" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 103 89.3338)" fill="white" />
                                <circle cx="132" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 132 89.3338)" fill="white" />
                                <circle cx="1.66667" cy="74.6673" r="1.66667"
                                    transform="rotate(-90 1.66667 74.6673)" fill="white" />
                                <circle cx="1.66667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 31.0003)" fill="white" />
                                <circle cx="16.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 16.3333 74.6668)" fill="white" />
                                <circle cx="16.3333" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 31.0003)" fill="white" />
                                <circle cx="31" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 31 74.6668)" fill="white" />
                                <circle cx="31" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 31 31.0003)" fill="white" />
                                <circle cx="45.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 45.6667 74.6668)" fill="white" />
                                <circle cx="45.6667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 31.0003)" fill="white" />
                                <circle cx="60.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 60.3333 74.6668)" fill="white" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 60.3333 31.0001)" fill="white" />
                                <circle cx="88.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 88.6667 74.6668)" fill="white" />
                                <circle cx="88.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 88.6667 31.0001)" fill="white" />
                                <circle cx="117.667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 117.667 74.6668)" fill="white" />
                                <circle cx="117.667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 117.667 31.0001)" fill="white" />
                                <circle cx="74.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 74.6667 74.6668)" fill="white" />
                                <circle cx="74.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 74.6667 31.0001)" fill="white" />
                                <circle cx="103" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 103 74.6668)" fill="white" />
                                <circle cx="103" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 103 31.0001)" fill="white" />
                                <circle cx="132" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 132 74.6668)" fill="white" />
                                <circle cx="132" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 132 31.0001)" fill="white" />
                                <circle cx="1.66667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 60.0003)" fill="white" />
                                <circle cx="1.66667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 16.3336)" fill="white" />
                                <circle cx="16.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 60.0003)" fill="white" />
                                <circle cx="16.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 16.3336)" fill="white" />
                                <circle cx="31" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 31 60.0003)" fill="white" />
                                <circle cx="31" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 31 16.3336)" fill="white" />
                                <circle cx="45.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 60.0003)" fill="white" />
                                <circle cx="45.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 16.3336)" fill="white" />
                                <circle cx="60.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 60.3333 60.0003)" fill="white" />
                                <circle cx="60.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 60.3333 16.3336)" fill="white" />
                                <circle cx="88.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 88.6667 60.0003)" fill="white" />
                                <circle cx="88.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 88.6667 16.3336)" fill="white" />
                                <circle cx="117.667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 117.667 60.0003)" fill="white" />
                                <circle cx="117.667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 117.667 16.3336)" fill="white" />
                                <circle cx="74.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 74.6667 60.0003)" fill="white" />
                                <circle cx="74.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 74.6667 16.3336)" fill="white" />
                                <circle cx="103" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 103 60.0003)" fill="white" />
                                <circle cx="103" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 103 16.3336)" fill="white" />
                                <circle cx="132" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 132 60.0003)" fill="white" />
                                <circle cx="132" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 132 16.3336)" fill="white" />
                                <circle cx="1.66667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 45.3336)" fill="white" />
                                <circle cx="1.66667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 1.66667 1.66683)" fill="white" />
                                <circle cx="16.3333" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 45.3336)" fill="white" />
                                <circle cx="16.3333" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 16.3333 1.66683)" fill="white" />
                                <circle cx="31" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 31 45.3336)" fill="white" />
                                <circle cx="31" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 31 1.66683)" fill="white" />
                                <circle cx="45.6667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 45.3336)" fill="white" />
                                <circle cx="45.6667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 45.6667 1.66683)" fill="white" />
                                <circle cx="60.3333" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 45.3338)" fill="white" />
                                <circle cx="60.3333" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 60.3333 1.66707)" fill="white" />
                                <circle cx="88.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 45.3338)" fill="white" />
                                <circle cx="88.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 88.6667 1.66707)" fill="white" />
                                <circle cx="117.667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 117.667 45.3338)" fill="white" />
                                <circle cx="117.667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 117.667 1.66707)" fill="white" />
                                <circle cx="74.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 45.3338)" fill="white" />
                                <circle cx="74.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 74.6667 1.66707)" fill="white" />
                                <circle cx="103" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 103 45.3338)" fill="white" />
                                <circle cx="103" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 103 1.66707)" fill="white" />
                                <circle cx="132" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 132 45.3338)" fill="white" />
                                <circle cx="132" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 132 1.66707)" fill="white" />
                            </svg>
                        </div>
                        <div class="absolute -right-6 -top-6 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667"
                                    transform="rotate(-90 1.66667 104)" fill="white" />
                                <circle cx="16.3333" cy="104" r="1.66667"
                                    transform="rotate(-90 16.3333 104)" fill="white" />
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                    fill="white" />
                                <circle cx="45.6667" cy="104" r="1.66667"
                                    transform="rotate(-90 45.6667 104)" fill="white" />
                                <circle cx="60.3333" cy="104" r="1.66667"
                                    transform="rotate(-90 60.3333 104)" fill="white" />
                                <circle cx="88.6667" cy="104" r="1.66667"
                                    transform="rotate(-90 88.6667 104)" fill="white" />
                                <circle cx="117.667" cy="104" r="1.66667"
                                    transform="rotate(-90 117.667 104)" fill="white" />
                                <circle cx="74.6667" cy="104" r="1.66667"
                                    transform="rotate(-90 74.6667 104)" fill="white" />
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                    fill="white" />
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                    fill="white" />
                                <circle cx="1.66667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 1.66667 89.3333)" fill="white" />
                                <circle cx="16.3333" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 16.3333 89.3333)" fill="white" />
                                <circle cx="31" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 31 89.3333)" fill="white" />
                                <circle cx="45.6667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 45.6667 89.3333)" fill="white" />
                                <circle cx="60.3333" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 89.3338)" fill="white" />
                                <circle cx="88.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 89.3338)" fill="white" />
                                <circle cx="117.667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 117.667 89.3338)" fill="white" />
                                <circle cx="74.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 89.3338)" fill="white" />
                                <circle cx="103" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 103 89.3338)" fill="white" />
                                <circle cx="132" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 132 89.3338)" fill="white" />
                                <circle cx="1.66667" cy="74.6673" r="1.66667"
                                    transform="rotate(-90 1.66667 74.6673)" fill="white" />
                                <circle cx="1.66667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 31.0003)" fill="white" />
                                <circle cx="16.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 16.3333 74.6668)" fill="white" />
                                <circle cx="16.3333" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 31.0003)" fill="white" />
                                <circle cx="31" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 31 74.6668)" fill="white" />
                                <circle cx="31" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 31 31.0003)" fill="white" />
                                <circle cx="45.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 45.6667 74.6668)" fill="white" />
                                <circle cx="45.6667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 31.0003)" fill="white" />
                                <circle cx="60.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 60.3333 74.6668)" fill="white" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 60.3333 31.0001)" fill="white" />
                                <circle cx="88.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 88.6667 74.6668)" fill="white" />
                                <circle cx="88.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 88.6667 31.0001)" fill="white" />
                                <circle cx="117.667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 117.667 74.6668)" fill="white" />
                                <circle cx="117.667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 117.667 31.0001)" fill="white" />
                                <circle cx="74.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 74.6667 74.6668)" fill="white" />
                                <circle cx="74.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 74.6667 31.0001)" fill="white" />
                                <circle cx="103" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 103 74.6668)" fill="white" />
                                <circle cx="103" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 103 31.0001)" fill="white" />
                                <circle cx="132" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 132 74.6668)" fill="white" />
                                <circle cx="132" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 132 31.0001)" fill="white" />
                                <circle cx="1.66667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 60.0003)" fill="white" />
                                <circle cx="1.66667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 16.3336)" fill="white" />
                                <circle cx="16.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 60.0003)" fill="white" />
                                <circle cx="16.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 16.3336)" fill="white" />
                                <circle cx="31" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 31 60.0003)" fill="white" />
                                <circle cx="31" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 31 16.3336)" fill="white" />
                                <circle cx="45.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 60.0003)" fill="white" />
                                <circle cx="45.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 16.3336)" fill="white" />
                                <circle cx="60.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 60.3333 60.0003)" fill="white" />
                                <circle cx="60.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 60.3333 16.3336)" fill="white" />
                                <circle cx="88.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 88.6667 60.0003)" fill="white" />
                                <circle cx="88.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 88.6667 16.3336)" fill="white" />
                                <circle cx="117.667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 117.667 60.0003)" fill="white" />
                                <circle cx="117.667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 117.667 16.3336)" fill="white" />
                                <circle cx="74.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 74.6667 60.0003)" fill="white" />
                                <circle cx="74.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 74.6667 16.3336)" fill="white" />
                                <circle cx="103" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 103 60.0003)" fill="white" />
                                <circle cx="103" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 103 16.3336)" fill="white" />
                                <circle cx="132" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 132 60.0003)" fill="white" />
                                <circle cx="132" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 132 16.3336)" fill="white" />
                                <circle cx="1.66667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 45.3336)" fill="white" />
                                <circle cx="1.66667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 1.66667 1.66683)" fill="white" />
                                <circle cx="16.3333" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 45.3336)" fill="white" />
                                <circle cx="16.3333" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 16.3333 1.66683)" fill="white" />
                                <circle cx="31" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 31 45.3336)" fill="white" />
                                <circle cx="31" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 31 1.66683)" fill="white" />
                                <circle cx="45.6667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 45.3336)" fill="white" />
                                <circle cx="45.6667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 45.6667 1.66683)" fill="white" />
                                <circle cx="60.3333" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 45.3338)" fill="white" />
                                <circle cx="60.3333" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 60.3333 1.66707)" fill="white" />
                                <circle cx="88.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 45.3338)" fill="white" />
                                <circle cx="88.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 88.6667 1.66707)" fill="white" />
                                <circle cx="117.667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 117.667 45.3338)" fill="white" />
                                <circle cx="117.667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 117.667 1.66707)" fill="white" />
                                <circle cx="74.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 45.3338)" fill="white" />
                                <circle cx="74.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 74.6667 1.66707)" fill="white" />
                                <circle cx="103" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 103 45.3338)" fill="white" />
                                <circle cx="103" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 103 1.66707)" fill="white" />
                                <circle cx="132" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 132 45.3338)" fill="white" />
                                <circle cx="132" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 132 1.66707)" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Features Section Start -->
    <section class="pb-8 pt-20 lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mb-12 max-w-[620px] lg:mb-20">
                        <span class="text-primary mb-2 block text-lg font-semibold">
                            Features
                        </span>
                        <h2 class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[42px]">
                            Main Features Of Play
                        </h2>
                        <p class="text-body-color text-lg leading-relaxed sm:text-xl sm:leading-relaxed">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".1s">
                        <div
                            class="bg-primary relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <span
                                class="bg-primary absolute left-0 top-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="35" height="35" viewBox="0 0 52 52" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M44.9313 11.7H38.9188C40.5438 10.9687 41.7626 9.99374 42.2501 8.69374C42.9001 6.98749 42.2501 5.19999 40.3001 3.33124C38.1876 1.29999 35.9938 0.568738 33.8001 1.13749C29.9813 2.11249 27.4626 7.06874 26.2438 9.99374C25.1063 7.06874 22.5876 2.11249 18.6876 1.13749C16.4938 0.568738 14.3001 1.29999 12.1876 3.33124C10.2376 5.19999 9.5876 6.98749 10.2376 8.69374C10.7251 9.99374 12.0251 10.9687 13.5688 11.7H7.06885C5.0376 11.7 3.4126 13.325 3.4126 15.3562V21.5312C3.4126 23.5625 5.0376 25.1875 7.06885 25.1875H7.71885V46.2312C7.71885 48.8312 9.83135 51.025 12.5126 51.025H40.1376C42.7376 51.025 44.9313 48.9125 44.9313 46.2312V25.1875C46.9626 25.1875 48.5876 23.5625 48.5876 21.5312V15.3562C48.5063 13.325 46.8813 11.7 44.9313 11.7ZM34.5313 3.98124C34.7751 3.89999 35.0188 3.89999 35.1813 3.89999C36.1563 3.89999 37.2126 4.38749 38.2688 5.52499C38.7563 6.01249 39.8126 7.06874 39.5688 7.79999C39.0001 9.34374 33.9626 10.6437 28.9251 11.05C30.0626 8.36874 32.1751 4.54999 34.5313 3.98124ZM13.0001 7.71874C12.7563 6.98749 13.8126 5.93124 14.3001 5.44374C15.4376 4.38749 16.4126 3.81874 17.3876 3.81874C17.6313 3.81874 17.8751 3.81874 18.0376 3.89999C20.4751 4.54999 22.5063 8.28749 23.6438 10.9687C18.6063 10.5625 13.5688 9.26249 13.0001 7.71874ZM42.0063 46.2312C42.0063 47.2875 41.1126 48.1812 40.0563 48.1812H12.4313C11.3751 48.1812 10.4813 47.2875 10.4813 46.2312V25.1875H41.9251V46.2312H42.0063ZM45.6626 21.5312C45.6626 22.0187 45.3376 22.3437 44.8501 22.3437H7.06885C6.6626 22.3437 6.25635 22.0187 6.25635 21.5312V15.3562C6.25635 14.95 6.6626 14.5437 7.06885 14.5437H44.8501C45.2563 14.5437 45.6626 14.8687 45.6626 15.3562V21.5312Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="text-dark mb-3 text-xl font-bold">
                            Free and Open-Source
                        </h4>
                        <p class="text-body-color mb-8 lg:mb-11">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-body-color hover:text-primary text-base font-medium">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".15s">
                        <div
                            class="bg-primary relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <span
                                class="bg-primary absolute left-0 top-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="35" height="35" viewBox="0 0 52 52" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M49.8062 23.3187L43.875 17.3875C43.3063 16.8187 42.4125 16.8187 41.8438 17.3875C41.275 17.9562 41.275 18.85 41.8438 19.4187L46.9625 24.6187H27.4625V4.87498L32.5812 10.075C33.15 10.6437 34.0437 10.6437 34.6125 10.075C35.1812 9.50623 35.1812 8.61248 34.6125 8.04373L28.6812 2.11248C27.95 1.38123 26.975 0.974976 26 0.974976C24.9438 0.974976 24.05 1.38123 23.3188 2.11248L17.3875 8.04373C16.8187 8.61248 16.8187 9.50623 17.3875 10.075C17.6312 10.3187 18.0375 10.4812 18.3625 10.4812C18.6875 10.4812 19.0937 10.3187 19.3375 10.075L24.6187 4.87498V24.5375H4.95625L10.075 19.3375C10.6437 18.7687 10.6437 17.875 10.075 17.3062C9.50625 16.7375 8.6125 16.7375 8.04375 17.3062L2.1125 23.2375C0.65 24.7 0.65 27.1375 2.1125 28.6L8.04375 34.5312C8.2875 34.775 8.69375 34.9375 9.01875 34.9375C9.34375 34.9375 9.75 34.775 9.99375 34.5312C10.5625 33.9625 10.5625 33.0687 9.99375 32.5L4.79375 27.3H24.4563V47.125L19.2563 41.925C18.6875 41.3562 17.7938 41.3562 17.225 41.925C16.6563 42.4937 16.6563 43.3875 17.225 43.9562L23.1562 49.8875C23.8875 50.6187 24.8625 51.025 25.8375 51.025C26.8937 51.025 27.7875 50.6187 28.5187 49.8875L34.45 43.9562C35.0188 43.3875 35.0188 42.4937 34.45 41.925C33.8813 41.3562 32.9875 41.3562 32.4188 41.925L27.4625 47.125V27.3812H47.0438L41.8438 32.5812C41.275 33.15 41.275 34.0437 41.8438 34.6125C42.0875 34.8562 42.4938 35.0187 42.8188 35.0187C43.1438 35.0187 43.55 34.8562 43.7938 34.6125L49.725 28.6812C51.2688 27.2187 51.2687 24.7812 49.8062 23.3187Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="text-dark mb-3 text-xl font-bold">
                            Multipurpose Template
                        </h4>
                        <p class="text-body-color mb-8 lg:mb-11">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-body-color hover:text-primary text-base font-medium">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".2s">
                        <div
                            class="bg-primary relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <span
                                class="bg-primary absolute left-0 top-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z"
                                    fill="white" />
                                <path
                                    d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z"
                                    fill="white" />
                                <path
                                    d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z"
                                    fill="white" />
                                <path
                                    d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="text-dark mb-3 text-xl font-bold">
                            High-quality Design
                        </h4>
                        <p class="text-body-color mb-8 lg:mb-11">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-body-color hover:text-primary text-base font-medium">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".25s">
                        <div
                            class="bg-primary relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                            <span
                                class="bg-primary absolute left-0 top-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.5312 21.6562L28.6563 21.1641L29.6953 20.5625C30.7344 19.9062 31.3359 18.8125 31.2812 17.6094C31.2266 16.4063 30.625 15.3125 29.5312 14.7109L27.8906 13.7813L29.6406 12.6875C30.6797 12.0313 31.2812 10.9375 31.2266 9.73438C31.1719 8.53125 30.5703 7.4375 29.4766 6.83594L19.25 1.09375C18.2109 0.492187 16.9531 0.546875 15.9141 1.09375L5.41406 7.21875C4.375 7.82031 3.71875 8.91406 3.71875 10.1172C3.71875 11.3203 4.375 12.4141 5.41406 13.0156L7.10938 14L5.41406 14.9844C4.375 15.5859 3.71875 16.6797 3.71875 17.8828C3.71875 19.0859 4.32031 20.1797 5.41406 20.7812L6.39844 21.3281L5.46875 21.875C4.42969 22.4766 3.77344 23.5703 3.77344 24.7734C3.77344 25.9766 4.375 27.0703 5.46875 27.6719L15.9141 33.6875C16.4609 34.0156 17.0078 34.125 17.6094 34.125C18.2109 34.125 18.8125 33.9609 19.3594 33.6328L29.6953 27.2891C30.7344 26.6328 31.3359 25.5391 31.2812 24.3359C31.2266 23.2969 30.625 22.2031 29.5312 21.6562ZM5.63281 10.1172C5.63281 9.57031 5.90625 9.13281 6.34375 8.85938L16.8438 2.78906C17.0625 2.67969 17.3359 2.57031 17.5547 2.57031C17.7734 2.57031 18.0469 2.625 18.2656 2.73437L28.5469 8.47656C28.9844 8.75 29.2578 9.1875 29.3125 9.73438C29.3125 10.2812 29.0391 10.7188 28.6016 10.9922L18.3203 17.3906C17.8828 17.6641 17.2812 17.6641 16.8438 17.3906L6.39844 11.375C5.90625 11.1562 5.63281 10.6641 5.63281 10.1172ZM5.63281 17.9375C5.63281 17.3906 5.90625 16.9531 6.34375 16.6797L9.02344 15.1484L15.8594 19.0859C16.4062 19.4141 16.9531 19.5234 17.5547 19.5234C18.1562 19.5234 18.7578 19.3594 19.3047 19.0312L26.0312 14.875L28.6016 16.2969C29.0391 16.5703 29.3125 17.0078 29.3672 17.5547C29.3672 18.1016 29.0938 18.5391 28.6563 18.8125L18.3203 25.2656C17.8828 25.5391 17.2812 25.5391 16.8438 25.2656L6.39844 19.25C5.90625 18.9766 5.63281 18.4844 5.63281 17.9375ZM28.6563 25.8125L18.3203 32.2109C17.8828 32.4844 17.2812 32.4844 16.8438 32.2109L6.39844 26.1953C5.96094 25.9219 5.6875 25.4844 5.6875 24.9375C5.6875 24.3906 5.96094 23.9531 6.39844 23.6797L8.3125 22.5859L15.8594 26.9609C16.4062 27.2891 16.9531 27.3984 17.5547 27.3984C18.1562 27.3984 18.7578 27.2344 19.3047 26.9062L26.7969 22.2578L28.6563 23.2969C29.0938 23.5703 29.3672 24.0078 29.4219 24.5547C29.3672 25.0469 29.0938 25.5391 28.6563 25.8125Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="text-dark mb-3 text-xl font-bold">
                            All Essential Elements
                        </h4>
                        <p class="text-body-color mb-8 lg:mb-11">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-body-color hover:text-primary text-base font-medium">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->



    <!-- ====== Faq Section Start -->
    <section class="relative z-20 overflow-hidden bg-[#f3f4ff] pb-12 pt-20 lg:pb-[90px] lg:pt-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
                        <span class="text-primary mb-2 block text-lg font-semibold">
                            FAQ
                        </span>
                        <h2 class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[42px]">
                            Any Questions? Answered
                        </h2>
                        <p class="text-body-color text-lg leading-relaxed sm:text-xl sm:leading-relaxed">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".1s
              ">
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="bg-primary text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-opacity-5">
                                <svg width="17" height="10" viewBox="0 0 17 10"
                                    class="icon fill-current">
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    How to use TailGrids?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="text-body-color py-3 text-base leading-relaxed">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".15s
              ">
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="bg-primary text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-opacity-5">
                                <svg width="17" height="10" viewBox="0 0 17 10"
                                    class="icon fill-current">
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    How to download icons from LineIcons?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="text-body-color py-3 text-base leading-relaxed">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".2s
              ">
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="bg-primary text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-opacity-5">
                                <svg width="17" height="10" viewBox="0 0 17 10"
                                    class="icon fill-current">
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Is GrayGrids part of UIdeck?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="text-body-color py-3 text-base leading-relaxed">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".1s
              ">
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="bg-primary text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-opacity-5">
                                <svg width="17" height="10" viewBox="0 0 17 10"
                                    class="icon fill-current">
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Can I use this template for commercial project?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="text-body-color py-3 text-base leading-relaxed">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".15s
              ">
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="bg-primary text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-opacity-5">
                                <svg width="17" height="10" viewBox="0 0 17 10"
                                    class="icon fill-current">
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Do you have plan to releasing Play Pro?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="text-body-color py-3 text-base leading-relaxed">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                        data-wow-delay=".2s
              ">
                        <button class="faq-btn flex w-full items-center text-left">
                            <div
                                class="bg-primary text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-opacity-5">
                                <svg width="17" height="10" viewBox="0 0 17 10"
                                    class="icon fill-current">
                                    <path
                                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                        fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-base font-semibold text-black sm:text-lg">
                                    Where and how to host this template?
                                </h4>
                            </div>
                        </button>
                        <div class="faq-content hidden pl-[62px]">
                            <p class="text-body-color py-3 text-base leading-relaxed">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827"
                        y2="-418.681" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== Faq Section End -->


    <!-- ====== Footer Section Start -->
    <footer class="wow fadeInUp relative z-10 bg-black pt-20 lg:pt-[120px]" data-wow-delay=".15s">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
                    <div class="mb-10 w-full">
                        <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                            <img src="assets/images/logo/logo-white.svg" alt="logo" class="max-w-full" />
                        </a>
                        <p class="mb-7 text-base text-[#f3f4fe]">
                            We create digital experiences for brands and companies by using
                            technology.
                        </p>
                        <div class="-mx-3 flex items-center">
                            <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:text-white">
                                <svg width="10" height="18" viewBox="0 0 10 18" class="fill-current">
                                    <path
                                        d="M9.00007 6.82105H7.50006H6.96434V6.27097V4.56571V4.01562H7.50006H8.62507C8.91971 4.01562 9.16078 3.79559 9.16078 3.46554V0.550085C9.16078 0.247538 8.9465 0 8.62507 0H6.66969C4.55361 0 3.08038 1.54024 3.08038 3.82309V6.21596V6.76605H2.54466H0.72322C0.348217 6.76605 0 7.06859 0 7.50866V9.48897C0 9.87402 0.294645 10.2316 0.72322 10.2316H2.49109H3.02681V10.7817V16.31C3.02681 16.6951 3.32145 17.0526 3.75003 17.0526H6.26791C6.42862 17.0526 6.56255 16.9701 6.66969 16.8601C6.77684 16.7501 6.8572 16.5576 6.8572 16.3925V10.8092V10.2591H7.4197H8.62507C8.97328 10.2591 9.24114 10.0391 9.29471 9.709V9.6815V9.65399L9.66972 7.7562C9.6965 7.56367 9.66972 7.34363 9.509 7.1236C9.45543 6.98608 9.21436 6.84856 9.00007 6.82105Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:text-white">
                                <svg width="19" height="15" viewBox="0 0 19 15" class="fill-current">
                                    <path
                                        d="M16.2622 3.17878L17.33 1.93293C17.6391 1.59551 17.7234 1.33595 17.7515 1.20618C16.9085 1.67337 16.1217 1.82911 15.6159 1.82911H15.4192L15.3068 1.72528C14.6324 1.18022 13.7894 0.894714 12.8902 0.894714C10.9233 0.894714 9.37779 2.40012 9.37779 4.13913C9.37779 4.24295 9.37779 4.39868 9.40589 4.5025L9.49019 5.02161L8.90009 4.99565C5.30334 4.89183 2.35288 2.03675 1.87518 1.5436C1.08839 2.84136 1.53799 4.08722 2.01568 4.86587L2.97107 6.31937L1.45369 5.54071C1.48179 6.63084 1.93138 7.48736 2.80247 8.11029L3.56116 8.62939L2.80247 8.9149C3.28017 10.2386 4.34795 10.7837 5.13474 10.9913L6.17443 11.2509L5.19094 11.8738C3.61736 12.912 1.65039 12.8342 0.779297 12.7563C2.54957 13.8983 4.65705 14.1579 6.11823 14.1579C7.21412 14.1579 8.02901 14.0541 8.2257 13.9762C16.0936 12.2631 16.4589 5.77431 16.4589 4.47655V4.29486L16.6275 4.19104C17.5829 3.36047 17.9763 2.91923 18.2011 2.65967C18.1168 2.68563 18.0044 2.73754 17.892 2.7635L16.2622 3.17878Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:text-white">
                                <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                                    <path
                                        d="M8.91688 12.4995C10.6918 12.4995 12.1306 11.0911 12.1306 9.35385C12.1306 7.61655 10.6918 6.20819 8.91688 6.20819C7.14197 6.20819 5.70312 7.61655 5.70312 9.35385C5.70312 11.0911 7.14197 12.4995 8.91688 12.4995Z" />
                                    <path
                                        d="M12.4078 0.947388H5.37075C2.57257 0.947388 0.300781 3.17104 0.300781 5.90993V12.7436C0.300781 15.5367 2.57257 17.7604 5.37075 17.7604H12.3524C15.2059 17.7604 17.4777 15.5367 17.4777 12.7978V5.90993C17.4777 3.17104 15.2059 0.947388 12.4078 0.947388ZM8.91696 13.4758C6.56206 13.4758 4.70584 11.6047 4.70584 9.35389C4.70584 7.10312 6.58976 5.23199 8.91696 5.23199C11.2165 5.23199 13.1004 7.10312 13.1004 9.35389C13.1004 11.6047 11.2442 13.4758 8.91696 13.4758ZM14.735 5.61164C14.4579 5.90993 14.0423 6.07264 13.5714 6.07264C13.1558 6.07264 12.7402 5.90993 12.4078 5.61164C12.103 5.31334 11.9368 4.9337 11.9368 4.47269C11.9368 4.01169 12.103 3.65916 12.4078 3.33375C12.7125 3.00834 13.1004 2.84563 13.5714 2.84563C13.9869 2.84563 14.4302 3.00834 14.735 3.30663C15.012 3.65916 15.2059 4.06593 15.2059 4.49981C15.1782 4.9337 15.012 5.31334 14.735 5.61164Z" />
                                    <path
                                        d="M13.5985 3.82184C13.2383 3.82184 12.9336 4.12013 12.9336 4.47266C12.9336 4.82519 13.2383 5.12349 13.5985 5.12349C13.9587 5.12349 14.2634 4.82519 14.2634 4.47266C14.2634 4.12013 13.9864 3.82184 13.5985 3.82184Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:text-white">
                                <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                                    <path
                                        d="M16.7821 0.947388H1.84847C1.14272 0.947388 0.578125 1.49747 0.578125 2.18508V16.7623C0.578125 17.4224 1.14272 18 1.84847 18H16.7257C17.4314 18 17.996 17.4499 17.996 16.7623V2.15757C18.0525 1.49747 17.4879 0.947388 16.7821 0.947388ZM5.7442 15.4421H3.17528V7.32837H5.7442V15.4421ZM4.44563 6.2007C3.59873 6.2007 2.94944 5.5406 2.94944 4.74297C2.94944 3.94535 3.62696 3.28525 4.44563 3.28525C5.26429 3.28525 5.94181 3.94535 5.94181 4.74297C5.94181 5.5406 5.32075 6.2007 4.44563 6.2007ZM15.4835 15.4421H12.9146V11.509C12.9146 10.5739 12.8864 9.33618 11.5596 9.33618C10.2045 9.33618 10.0069 10.3813 10.0069 11.4265V15.4421H7.438V7.32837H9.95046V8.45605H9.9787C10.3457 7.79594 11.1644 7.13584 12.4347 7.13584C15.0601 7.13584 15.54 8.7861 15.54 11.0414V15.4421H15.4835Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
                    <div class="mb-10 w-full">
                        <h4 class="mb-9 text-lg font-semibold text-white">About Us</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Testimonial
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
                    <div class="mb-10 w-full">
                        <h4 class="mb-9 text-lg font-semibold text-white">Features</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    How it works
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Privacy policy
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Refund policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
                    <div class="mb-10 w-full">
                        <h4 class="mb-9 text-lg font-semibold text-white">
                            Our Products
                        </h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    LineIcons
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Ecommerce HTML
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    Ayro UI
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary mb-2 inline-block text-base leading-loose text-[#f3f4fe]">
                                    PlainAdmin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 md:w-2/3 lg:w-6/12 xl:w-3/12">
                    <div class="mb-10 w-full">
                        <h4 class="mb-9 text-lg font-semibold text-white">Partners</h4>
                        <ul class="flex flex-wrap items-center">
                            <li>
                                <a href="https://tailgrids.com" rel="nofollow noopner" target="_blank"
                                    class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                                    <img src="assets/images/footer/brands/tailgrids.svg" alt="tailgrids" />
                                </a>
                            </li>
                            <li>
                                <a href="https://ayroui.com" rel="nofollow noopner" target="_blank"
                                    class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                                    <img src="assets/images/footer/brands/ayroui.svg" alt="ayroui" />
                                </a>
                            </li>
                            <li>
                                <a href="https://ecommercehtml.com" rel="nofollow noopner" target="_blank"
                                    class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                                    <img src="assets/images/footer/brands/ecommerce-html.svg"
                                        alt="ecommerce-html" />
                                </a>
                            </li>
                            <li>
                                <a href="https://graygrids.com" rel="nofollow noopner" target="_blank"
                                    class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                                    <img src="assets/images/footer/brands/graygrids.svg" alt="graygrids" />
                                </a>
                            </li>
                            <li>
                                <a href="https://lineicons.com" rel="nofollow noopner" target="_blank"
                                    class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                                    <img src="assets/images/footer/brands/lineicons.svg" alt="lineicons" />
                                </a>
                            </li>
                            <li>
                                <a href="https://uideck.com" rel="nofollow noopner" target="_blank"
                                    class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                                    <img src="assets/images/footer/brands/uideck.svg" alt="uideck" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-opacity-40 py-8 lg:mt-[60px]">
            <div class="container">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-2/3 lg:w-1/2">
                        <div class="my-1">
                            <div class="-mx-3 flex items-center justify-center md:justify-start">
                                <a href="javascript:void(0)"
                                    class="hover:text-primary px-3 text-base text-[#f3f4fe]">
                                    Privacy policy
                                </a>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary px-3 text-base text-[#f3f4fe]">
                                    Legal notice
                                </a>
                                <a href="javascript:void(0)"
                                    class="hover:text-primary px-3 text-base text-[#f3f4fe]">
                                    Terms of service
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/3 lg:w-1/2">
                        <div class="my-1 flex justify-center md:justify-end">
                            <p class="text-base text-[#f3f4fe]">
                                Designed and Developed by
                                <a href="https://tailgrids.com" rel="nofollow noopner" target="_blank"
                                    class="text-primary hover:underline">
                                    TailGrids and UIdeck
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <span class="absolute left-0 top-0 z-[-1]">
                <img src="assets/images/footer/shape-1.svg" alt="" />
            </span>

            <span class="absolute bottom-0 right-0 z-[-1]">
                <img src="assets/images/footer/shape-3.svg" alt="" />
            </span>

            <span class="absolute right-0 top-0 z-[-1]">
                <svg width="102" height="102" viewBox="0 0 102 102" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.8667 33.1956C2.89765 33.1956 3.7334 34.0318 3.7334 35.0633C3.7334 36.0947 2.89765 36.9309 1.8667 36.9309C0.835744 36.9309 4.50645e-08 36.0947 0 35.0633C-4.50645e-08 34.0318 0.835744 33.1956 1.8667 33.1956Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 33.1956C19.3249 33.1956 20.1606 34.0318 20.1606 35.0633C20.1606 36.0947 19.3249 36.9309 18.2939 36.9309C17.263 36.9309 16.4272 36.0947 16.4272 35.0633C16.4272 34.0318 17.263 33.1956 18.2939 33.1956Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 33.195C35.7519 33.195 36.5876 34.0311 36.5876 35.0626C36.5876 36.0941 35.7519 36.9303 34.7209 36.9303C33.69 36.9303 32.8542 36.0941 32.8542 35.0626C32.8542 34.0311 33.69 33.195 34.7209 33.195Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 33.195C51.965 33.195 52.8008 34.0311 52.8008 35.0626C52.8008 36.0941 51.965 36.9303 50.9341 36.9303C49.9031 36.9303 49.0674 36.0941 49.0674 35.0626C49.0674 34.0311 49.9031 33.195 50.9341 33.195Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M1.8667 16.7605C2.89765 16.7605 3.7334 17.5966 3.7334 18.6281C3.7334 19.6596 2.89765 20.4957 1.8667 20.4957C0.835744 20.4957 4.50645e-08 19.6596 0 18.6281C-4.50645e-08 17.5966 0.835744 16.7605 1.8667 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 16.7605C19.3249 16.7605 20.1606 17.5966 20.1606 18.6281C20.1606 19.6596 19.3249 20.4957 18.2939 20.4957C17.263 20.4957 16.4272 19.6596 16.4272 18.6281C16.4272 17.5966 17.263 16.7605 18.2939 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 16.7605C35.7519 16.7605 36.5876 17.5966 36.5876 18.6281C36.5876 19.6596 35.7519 20.4957 34.7209 20.4957C33.69 20.4957 32.8542 19.6596 32.8542 18.6281C32.8542 17.5966 33.69 16.7605 34.7209 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 16.7605C51.965 16.7605 52.8008 17.5966 52.8008 18.6281C52.8008 19.6596 51.965 20.4957 50.9341 20.4957C49.9031 20.4957 49.0674 19.6596 49.0674 18.6281C49.0674 17.5966 49.9031 16.7605 50.9341 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M1.8667 0.324951C2.89765 0.324951 3.7334 1.16115 3.7334 2.19261C3.7334 3.22408 2.89765 4.06024 1.8667 4.06024C0.835744 4.06024 4.50645e-08 3.22408 0 2.19261C-4.50645e-08 1.16115 0.835744 0.324951 1.8667 0.324951Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 0.324951C19.3249 0.324951 20.1606 1.16115 20.1606 2.19261C20.1606 3.22408 19.3249 4.06024 18.2939 4.06024C17.263 4.06024 16.4272 3.22408 16.4272 2.19261C16.4272 1.16115 17.263 0.324951 18.2939 0.324951Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 0.325302C35.7519 0.325302 36.5876 1.16147 36.5876 2.19293C36.5876 3.2244 35.7519 4.06056 34.7209 4.06056C33.69 4.06056 32.8542 3.2244 32.8542 2.19293C32.8542 1.16147 33.69 0.325302 34.7209 0.325302Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 0.325302C51.965 0.325302 52.8008 1.16147 52.8008 2.19293C52.8008 3.2244 51.965 4.06056 50.9341 4.06056C49.9031 4.06056 49.0674 3.2244 49.0674 2.19293C49.0674 1.16147 49.9031 0.325302 50.9341 0.325302Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 33.1956C67.9346 33.1956 68.7704 34.0318 68.7704 35.0633C68.7704 36.0947 67.9346 36.9309 66.9037 36.9309C65.8727 36.9309 65.037 36.0947 65.037 35.0633C65.037 34.0318 65.8727 33.1956 66.9037 33.1956Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 33.1956C84.3616 33.1956 85.1974 34.0318 85.1974 35.0633C85.1974 36.0947 84.3616 36.9309 83.3307 36.9309C82.2997 36.9309 81.464 36.0947 81.464 35.0633C81.464 34.0318 82.2997 33.1956 83.3307 33.1956Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 33.1956C100.789 33.1956 101.624 34.0318 101.624 35.0633C101.624 36.0947 100.789 36.9309 99.7576 36.9309C98.7266 36.9309 97.8909 36.0947 97.8909 35.0633C97.8909 34.0318 98.7266 33.1956 99.7576 33.1956Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 16.7605C67.9346 16.7605 68.7704 17.5966 68.7704 18.6281C68.7704 19.6596 67.9346 20.4957 66.9037 20.4957C65.8727 20.4957 65.037 19.6596 65.037 18.6281C65.037 17.5966 65.8727 16.7605 66.9037 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 16.7605C84.3616 16.7605 85.1974 17.5966 85.1974 18.6281C85.1974 19.6596 84.3616 20.4957 83.3307 20.4957C82.2997 20.4957 81.464 19.6596 81.464 18.6281C81.464 17.5966 82.2997 16.7605 83.3307 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 16.7605C100.789 16.7605 101.624 17.5966 101.624 18.6281C101.624 19.6596 100.789 20.4957 99.7576 20.4957C98.7266 20.4957 97.8909 19.6596 97.8909 18.6281C97.8909 17.5966 98.7266 16.7605 99.7576 16.7605Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 0.324966C67.9346 0.324966 68.7704 1.16115 68.7704 2.19261C68.7704 3.22408 67.9346 4.06024 66.9037 4.06024C65.8727 4.06024 65.037 3.22408 65.037 2.19261C65.037 1.16115 65.8727 0.324966 66.9037 0.324966Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 0.324951C84.3616 0.324951 85.1974 1.16115 85.1974 2.19261C85.1974 3.22408 84.3616 4.06024 83.3307 4.06024C82.2997 4.06024 81.464 3.22408 81.464 2.19261C81.464 1.16115 82.2997 0.324951 83.3307 0.324951Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 0.324951C100.789 0.324951 101.624 1.16115 101.624 2.19261C101.624 3.22408 100.789 4.06024 99.7576 4.06024C98.7266 4.06024 97.8909 3.22408 97.8909 2.19261C97.8909 1.16115 98.7266 0.324951 99.7576 0.324951Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M1.8667 82.2029C2.89765 82.2029 3.7334 83.039 3.7334 84.0705C3.7334 85.102 2.89765 85.9382 1.8667 85.9382C0.835744 85.9382 4.50645e-08 85.102 0 84.0705C-4.50645e-08 83.039 0.835744 82.2029 1.8667 82.2029Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 82.2029C19.3249 82.2029 20.1606 83.039 20.1606 84.0705C20.1606 85.102 19.3249 85.9382 18.2939 85.9382C17.263 85.9382 16.4272 85.102 16.4272 84.0705C16.4272 83.039 17.263 82.2029 18.2939 82.2029Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 82.2026C35.7519 82.2026 36.5876 83.0387 36.5876 84.0702C36.5876 85.1017 35.7519 85.9378 34.7209 85.9378C33.69 85.9378 32.8542 85.1017 32.8542 84.0702C32.8542 83.0387 33.69 82.2026 34.7209 82.2026Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 82.2026C51.965 82.2026 52.8008 83.0387 52.8008 84.0702C52.8008 85.1017 51.965 85.9378 50.9341 85.9378C49.9031 85.9378 49.0674 85.1017 49.0674 84.0702C49.0674 83.0387 49.9031 82.2026 50.9341 82.2026Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M1.8667 65.7677C2.89765 65.7677 3.7334 66.6039 3.7334 67.6353C3.7334 68.6668 2.89765 69.503 1.8667 69.503C0.835744 69.503 4.50645e-08 68.6668 0 67.6353C-4.50645e-08 66.6039 0.835744 65.7677 1.8667 65.7677Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 65.7677C19.3249 65.7677 20.1606 66.6039 20.1606 67.6353C20.1606 68.6668 19.3249 69.503 18.2939 69.503C17.263 69.503 16.4272 68.6668 16.4272 67.6353C16.4272 66.6039 17.263 65.7677 18.2939 65.7677Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 65.7674C35.7519 65.7674 36.5876 66.6036 36.5876 67.635C36.5876 68.6665 35.7519 69.5027 34.7209 69.5027C33.69 69.5027 32.8542 68.6665 32.8542 67.635C32.8542 66.6036 33.69 65.7674 34.7209 65.7674Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 65.7674C51.965 65.7674 52.8008 66.6036 52.8008 67.635C52.8008 68.6665 51.965 69.5027 50.9341 69.5027C49.9031 69.5027 49.0674 68.6665 49.0674 67.635C49.0674 66.6036 49.9031 65.7674 50.9341 65.7674Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M1.8667 98.2644C2.89765 98.2644 3.7334 99.1005 3.7334 100.132C3.7334 101.163 2.89765 102 1.8667 102C0.835744 102 4.50645e-08 101.163 0 100.132C-4.50645e-08 99.1005 0.835744 98.2644 1.8667 98.2644Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M1.8667 49.3322C2.89765 49.3322 3.7334 50.1684 3.7334 51.1998C3.7334 52.2313 2.89765 53.0675 1.8667 53.0675C0.835744 53.0675 4.50645e-08 52.2313 0 51.1998C-4.50645e-08 50.1684 0.835744 49.3322 1.8667 49.3322Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 98.2644C19.3249 98.2644 20.1606 99.1005 20.1606 100.132C20.1606 101.163 19.3249 102 18.2939 102C17.263 102 16.4272 101.163 16.4272 100.132C16.4272 99.1005 17.263 98.2644 18.2939 98.2644Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M18.2939 49.3322C19.3249 49.3322 20.1606 50.1684 20.1606 51.1998C20.1606 52.2313 19.3249 53.0675 18.2939 53.0675C17.263 53.0675 16.4272 52.2313 16.4272 51.1998C16.4272 50.1684 17.263 49.3322 18.2939 49.3322Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 98.2647C35.7519 98.2647 36.5876 99.1008 36.5876 100.132C36.5876 101.164 35.7519 102 34.7209 102C33.69 102 32.8542 101.164 32.8542 100.132C32.8542 99.1008 33.69 98.2647 34.7209 98.2647Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 98.2647C51.965 98.2647 52.8008 99.1008 52.8008 100.132C52.8008 101.164 51.965 102 50.9341 102C49.9031 102 49.0674 101.164 49.0674 100.132C49.0674 99.1008 49.9031 98.2647 50.9341 98.2647Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M34.7209 49.3326C35.7519 49.3326 36.5876 50.1687 36.5876 51.2002C36.5876 52.2317 35.7519 53.0678 34.7209 53.0678C33.69 53.0678 32.8542 52.2317 32.8542 51.2002C32.8542 50.1687 33.69 49.3326 34.7209 49.3326Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M50.9341 49.3326C51.965 49.3326 52.8008 50.1687 52.8008 51.2002C52.8008 52.2317 51.965 53.0678 50.9341 53.0678C49.9031 53.0678 49.0674 52.2317 49.0674 51.2002C49.0674 50.1687 49.9031 49.3326 50.9341 49.3326Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 82.2029C67.9346 82.2029 68.7704 83.0391 68.7704 84.0705C68.7704 85.102 67.9346 85.9382 66.9037 85.9382C65.8727 85.9382 65.037 85.102 65.037 84.0705C65.037 83.0391 65.8727 82.2029 66.9037 82.2029Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 82.2029C84.3616 82.2029 85.1974 83.0391 85.1974 84.0705C85.1974 85.102 84.3616 85.9382 83.3307 85.9382C82.2997 85.9382 81.464 85.102 81.464 84.0705C81.464 83.0391 82.2997 82.2029 83.3307 82.2029Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 82.2029C100.789 82.2029 101.624 83.039 101.624 84.0705C101.624 85.102 100.789 85.9382 99.7576 85.9382C98.7266 85.9382 97.8909 85.102 97.8909 84.0705C97.8909 83.039 98.7266 82.2029 99.7576 82.2029Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 65.7674C67.9346 65.7674 68.7704 66.6036 68.7704 67.635C68.7704 68.6665 67.9346 69.5027 66.9037 69.5027C65.8727 69.5027 65.037 68.6665 65.037 67.635C65.037 66.6036 65.8727 65.7674 66.9037 65.7674Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 65.7677C84.3616 65.7677 85.1974 66.6039 85.1974 67.6353C85.1974 68.6668 84.3616 69.503 83.3307 69.503C82.2997 69.503 81.464 68.6668 81.464 67.6353C81.464 66.6039 82.2997 65.7677 83.3307 65.7677Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 65.7677C100.789 65.7677 101.624 66.6039 101.624 67.6353C101.624 68.6668 100.789 69.503 99.7576 69.503C98.7266 69.503 97.8909 68.6668 97.8909 67.6353C97.8909 66.6039 98.7266 65.7677 99.7576 65.7677Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 98.2644C67.9346 98.2644 68.7704 99.1005 68.7704 100.132C68.7704 101.163 67.9346 102 66.9037 102C65.8727 102 65.037 101.163 65.037 100.132C65.037 99.1005 65.8727 98.2644 66.9037 98.2644Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M66.9037 49.3322C67.9346 49.3322 68.7704 50.1684 68.7704 51.1998C68.7704 52.2313 67.9346 53.0675 66.9037 53.0675C65.8727 53.0675 65.037 52.2313 65.037 51.1998C65.037 50.1684 65.8727 49.3322 66.9037 49.3322Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 98.2644C84.3616 98.2644 85.1974 99.1005 85.1974 100.132C85.1974 101.163 84.3616 102 83.3307 102C82.2997 102 81.464 101.163 81.464 100.132C81.464 99.1005 82.2997 98.2644 83.3307 98.2644Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M83.3307 49.3322C84.3616 49.3322 85.1974 50.1684 85.1974 51.1998C85.1974 52.2313 84.3616 53.0675 83.3307 53.0675C82.2997 53.0675 81.464 52.2313 81.464 51.1998C81.464 50.1684 82.2997 49.3322 83.3307 49.3322Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 98.2644C100.789 98.2644 101.624 99.1005 101.624 100.132C101.624 101.163 100.789 102 99.7576 102C98.7266 102 97.8909 101.163 97.8909 100.132C97.8909 99.1005 98.7266 98.2644 99.7576 98.2644Z"
                        fill="white" fill-opacity="0.08"></path>
                    <path
                        d="M99.7576 49.3322C100.789 49.3322 101.624 50.1684 101.624 51.1998C101.624 52.2313 100.789 53.0675 99.7576 53.0675C98.7266 53.0675 97.8909 52.2313 97.8909 51.1998C97.8909 50.1684 98.7266 49.3322 99.7576 49.3322Z"
                        fill="white" fill-opacity="0.08"></path>
                </svg>
            </span>
        </div>
    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
        class="bg-primary hover:bg-dark back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md text-white shadow-md transition duration-300 ease-in-out">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->

    <script src="assets/js/main.js"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);
    </script>
</body>

</html>
