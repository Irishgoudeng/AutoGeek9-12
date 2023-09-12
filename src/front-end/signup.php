<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../dist/output.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>AutoGeek | Sign Up</title>
    </head>
    <body>
        <nav class="bg-black border-gray-200 xl:px-80 py-7 dark:bg-gray-900 h-full">
        <div class="container flex flex-wrap items-center justify-between">
                <a href="./index.php" class="flex items-center">
                    <h1 class="text-white text-5xl font-pacifico">AUTOGEEK</h1>
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
                        <a href="./login.php">
                            <button class="bg-transparent text-lg hover:bg-white text-white font-medium hover:text-black py-2 px-4 border border-white hover:border-transparent">
                                Login
                            </button>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-gray-50 dark:bg-gray-900 pb-10">
            <div class="flex flex-col items-center xl:mt-12 px-6 py-8 mx-auto lg:py-0">
                <a href="#" class="flex items-center mt-6 mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <h1 class="text-black text-5xl font-pacifico">AUTOGEEK</h1>
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Create an account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="../back-end/signup.php" method="post">
     	                <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	                <?php } ?>
                        <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                        <div>
                            <label for="useremail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <?php if (isset($_GET['email'])) { ?>
                            <input
                                type="email"
                                name="useremail"
                                id="useremail"
                                placeholder="Enter email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="<?php echo $_GET['email']; ?>"><br>
                            <?php }else{ ?>
                            <input
                                type="email"
                                name="useremail"
                                id="useremail"
                                placeholder="Enter email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                <?php }?>
                                >
                            </div>
                            <div>
                                <label for="userpass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input
                                    type="password"
                                    name="userpass"
                                    id="userpass"
                                    placeholder="Enter password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            </div>
                            <div>
                                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                                <input
                                    type="password"
                                    name="confirm-password"
                                    id="confirm-password"
                                    placeholder="Confirm password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input
                                        id="terms"
                                        aria-describedby="terms"
                                        type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required=""
                                     >
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                        <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="w-full border border-black text-white bg-black hover:bg-white hover:text-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign up</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account?
                                <a href="guestLogin.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
