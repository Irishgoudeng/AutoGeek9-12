<?php
    require_once('../back-end/supplier.php');

    $suppId = $_GET['supplier_id'];

    $sql = "SELECT * FROM tbl_supplier WHERE supplier_id = $suppId";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    } else {
    header("Location: ../front-end/supp.php?error=Supplier not found");
    exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    updateSupplier();
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
        <title>AutoGeek | Update</title>
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
                            Update inventory
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="" method="post">
                        <div>
                            <label for="supplier_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                            <input type="hidden" name="supplier_id" id="supplier_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="<?php echo $row['supplier_id']; ?>"><br>
                            </div>
                            <div>
                            <label for="supplier_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier Name</label>
                            <input type="text" name="supplier_name" id="supplier_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="<?php echo $row['supplier_name']; ?>"><br>
                            </div>
                            <div>
                            <label for="supplier_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier Phone</label>
                            <input type="number" name="supplier_phone" id="supplier_phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="<?php echo $row['supplier_phone']; ?>"><br>
                            </div>
                            <div>
                            <label for="supplier_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier Email</label>
                            <input type="email" name="supplier_email" id="supplier_email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="<?php echo $row['supplier_email']; ?>"><br>
                            </div>
                            <button type="submit" class="w-full border border-black text-white bg-black hover:bg-white hover:text-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>