<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../dist/output.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>AutoGeek | Official site</title>
    </head>
    <body>
        <nav class="bg-black border-gray-200 xl:px-80 py-7 dark:bg-gray-900 h-full">
            <div class="container flex flex-wrap items-center justify-between">
                <a href="landing_page.html" class="flex items-center">
                    <h1 class="text-white text-5xl font-pacifico">hrs.com</h1>
                </a>
                <button
                    data-collapse-toggle="navbar-default"
                    type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:text-red-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto xl:mx-10" id="navbar-default">
                    <ul class="flex flex-col p-4 border border-white xl:rounded-3xl md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-black-900 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <a href="./signup.php">
                            <button class="bg-transparent text-lg hover:bg-white text-white font-medium hover:text-black py-2 px-4 border border-white hover:border-transparent">
                                Sign Up
                            </button>
                        </a>
                        <a href="./login.php">
                            <button class="bg-transparent text-lg hover:bg-white text-white font-medium hover:text-black py-2 px-4 border border-white hover:border-transparent">
                                Login
                            </button>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-[url('../dist/img/hotel_bg.jpg')] xl:px-12 xl:py-52 xl:w-full xl:h-full justify-center items-center">
            <div class="grid lg:grid-cols-2 items-center">
                <div class="order-1 lg:order-1 flex flex-col justify-center
              items-center xl:justify-center xl:items-start text-center
              xl:text-start xl:pl-64">
                    <h1 class="text-5xl font-pacifico font-extrabold xl:text-6xl text-white">
                        Book your perfect stay, your way
                    </h1>
                    <h3 class="text-base font-sans font-light xl:text-xl pt-7 text-white">
                        Find your perfect stay anywhere in the world with our extensive
                        <br>
                        selection of accommodations
                    </h3>
                    <div class="flex flex-col gap-1">
                        <a href="landing_page.html#about-us">
                            <button class="rounded-full text-xs bg-white
                            text-black hover:bg-black hover:text-white py-3 px-12 xl:px-18 mt-3 mb-10 md:items-center gap-1 flex">
                                <p class="text-xs xl:text-base font-bold">About us</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row items-center px-64 relative mt-1 pt-7 space-x-0.5">
                <div class="flex-grow w-full lg:w-1/3">
                    <h3 class="text-white font-normal text-base pl-3 pb-2">Destination</h3>
                    <label for="destination-1" class="sr-only">Where are you going?</label>
                    <input
                        type="text"
                        id="destination-1"
                        name="destination-1"
                        placeholder="Where are you going?"
                        class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    >
                </div>
                <div class="flex-grow w-full lg:w-1/6 mx-0 lg:mx-4 mt-4 lg:mt-0">
                    <h3 class="text-white font-normal text-base pl-3 pb-2">Check-in date</h3>
                    <label for="check-in-1" class="sr-only">Check-in date</label>
                    <input
                        type="date"
                        id="check-in-1"
                        name="check-in-1"
                        class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    >
                </div>
                <div class="flex-grow w-full lg:w-1/6 lg:mx-4 mt-4 lg:mt-0">
                    <h3 class="text-white font-normal text-base pl-3 pb-2">Check-out date</h3>
                    <label for="check-out-1" class="sr-only">Check-out date</label>
                    <input
                        type="date"
                        id="check-out-1"
                        name="check-out-1"
                        class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    >
                </div>
                <div class="flex-grow w-full lg:w-1/12 lg:mx-4 mt-4 lg:mt-0 ml-0">
                    <h3 class="text-white font-normal text-base pl-3 pb-2">No. of Guest</h3>
                    <label for="guests-1" class="sr-only">Guests</label>
                    <input
                        type="number"
                        id="guests-1"
                        name="guests-1"
                        placeholder="0"
                        class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    >
                </div>
                <div class="flex-grow w-full lg:w-1/12 mt-12 lg:mt-8">
                    <button type="submit" class="xl:w-16 w-full bg-black text-white px-5 py-4 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                        <img src="../dist/img/search-icon.png" class="h-6 items-center justify-center text-center">
                    </button>
                </div>
            </div>
        </div>
        <!-- Part 2 -->
        <div class="bg-gray-50 xl:px-12 xl:py-36 xl:w-full xl:h-full justify-center items-center">
            <div class="order-1 lg:order-1 flex flex-col justify-center
              items-center xl:justify-center xl:items-start text-center
              xl:text-start xl:pl-64">
                <h1 class="text-4xl font-pacifico font-extrabold xl:text-5xl text-black">
                    Explore more destinations and hotels
                </h1>
                <h3 class="xl:text-sm font-sans font-light text-sm pt-5 pb-10 text-black">
                    Find a great deal on a hotel for tonight or an upcoming trip
                </h3>
                <div class="grid grid-cols-3 xl:grid-cols-7 md:grid-cols-2 gap-2">
                    <div class="grid gap-4">
                        <div>
                            <a href="chickencurry.html">
                                <img class="rounded-lg" src="../dist/img/davao_city.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Davao City</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-1">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/boracay.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Boracay</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/cebu.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Cebu</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/baguio_city.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Baguio City</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/palawan.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Palawan</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/siargao_island.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Siargao Island</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/la_union.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>La Union</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/manila.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Manila</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/puerto_princesa.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Puerto Princesa</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/samal_island.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Samal Island</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/zambales.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Zambales</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/tagaytay.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Tagaytay</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/batangas.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Batangas</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/el_nido.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>El Nido</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <button class="text-xs bg-white border border-black
                            text-black hover:bg-black hover:text-white py-3 px-12 xl:px-18 md:items-center gap-1 flex">
                            <p class="text-xs xl:text-base font-bold">See more</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Part 2 -->
        <div class="bg-white xl:px-12 xl:pb-24 xl:w-full xl:h-full justify-center items-center">
            <div class="order-1 lg:order-1 flex flex-col justify-center
              items-center xl:justify-center xl:items-start text-center
              xl:text-start xl:pl-64">
                <h1 class="text-4xl font-pacifico font-extrabold xl:text-5xl text-black">
                    Browse by room types
                </h1>
                <h3 class="xl:text-sm font-sans font-light text-sm pt-5 pb-10 text-black">
                    Find different room types available
                </h3>
                <div class="grid grid-cols-3 xl:grid-cols-7 md:grid-cols-2 gap-2 min-h-min min-w-">
                    <div class="grid gap-4">
                        <div>
                            <a href="chickencurry.html">
                                <img
                                    class="rounded-lg"
                                    src="../dist/img/single.jpg"
                                    class=""
                                    alt="This image failed to load."
                                >
                                <div class="overlay xl:pl-2">
                                    <p>Single</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-1">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/double.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Double</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/quad.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Quad</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/king.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>King</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/junior.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Junior Suite</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/executive.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Executive Suite</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <a href="chopsuey.html">
                                <img class="rounded-lg" src="../dist/img/presidential.jpg" alt="This image failed to load.">
                                <div class="overlay xl:pl-2">
                                    <p>Presidential Suite</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <button class="text-xs bg-white border border-black
                            text-black hover:bg-black hover:text-white py-3 px-12 xl:px-18 mt-3 mb-10 md:items-center gap-1 flex">
                            <p class="text-xs xl:text-base font-bold">See more</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-28">
        <!-- Part 3 -->
        <div id="about-us" class="bg-gray-50 xl:px-12 xl:pb-24 xl:w-full xl:h-full justify-center items-center">
            <div class="order-1 lg:order-1 flex flex-col justify-center
                          items-center xl:justify-center xl:items-start text-center
                          xl:text-start xl:pl-64 xl:pr-72">
                <h1 class="text-4xl font-pacifico font-extrabold xl:text-5xl text-black">
                    About us
                </h1>
                <h3 class="xl:text-lg justify-center font-sans font-light text-base pt-5 pb-10 text-black">
                    Welcome to hrs.com! We are a team of experienced professionals dedicated to providing you with the best hotel booking experience possible. Our system offers a wide range of hotels and accommodations, from budget-friendly options to luxurious five-star hotels, to suit every need and budget.
                    <br>
                    <br>
                    Our goal is to make the hotel booking process simple and hassle-free. We believe that everyone deserves a comfortable and enjoyable stay, whether they're traveling for business or pleasure. That's why we have worked hard to create an easy-to-use online platform that allows you to search for and book hotels quickly and easily.
                    <br>
                    <br>
                    In addition to our user-friendly booking system, we also offer 24/7 customer support to ensure that you have a smooth and enjoyable experience with us. Our dedicated customer service team is always available to answer any questions you may have and provide you with any assistance you need.
                    <br>
                    <br>
                    At our online hotel reservation system, we pride ourselves on our commitment to excellence and customer satisfaction. We strive to provide you with the best possible service and ensure that your hotel booking experience is stress-free and enjoyable.
                    <br>
                    <br>
                    Thank you for choosing hrs.com. We look forward to serving you and helping you find the perfect hotel for your next trip.
                </h3>
            </div>
        </div>
        <footer class="bg-black dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-white sm:text-center dark:text-gray-400">
                        © 2023 hrs.com™. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
