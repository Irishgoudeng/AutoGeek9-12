<?php
    require_once('../back-end/registration_functions.php');
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    handleUserRegistration();
    }
    ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../dist/output.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>AutoGeek | Create</title>
    </head>
    <body>
        <div class="bg-gray-50 dark:bg-gray-900 pb-10">
            <div class="flex flex-col items-center xl:mt-12 px-6 py-8 mx-auto lg:py-0">
                <a href="#" class="flex items-center mt-6 mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <h1 class="text-black text-5xl font-pacifico">AUTOGEEK</h1>
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Create user
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="" method="post">
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
                            <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Is Active?</label>
                            <div class="flex items-center space-x-2">
                            <input type="radio" id="active_yes" name="isactive" value="1" class="text-primary-600 form-radio" checked>
                            <label for="active_yes" class="text-sm text-gray-900 dark:text-white">✔</label>
    
                            <input type="radio" id="active_no" name="isactive" value="0" class="text-primary-600 form-radio">
                            <label for="active_no" class="text-sm text-gray-900 dark:text-white">❌</label>
                            </div>
                            </div>
                            <button type="submit" class="w-full border border-black text-white bg-black hover:bg-white hover:text-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>