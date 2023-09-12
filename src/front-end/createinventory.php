<?php
    require_once('../back-end/inventory.php');
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    createItem();
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
                            Add Item
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="" method="post">
     	                <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	                <?php } ?>
                        <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                        <div>
                            <label for="item_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Name</label>
                            <?php if (isset($_GET['text'])) { ?>
                            <input
                                type="text"
                                name="item_name"
                                id="item_name"
                                placeholder="Enter item name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="<?php echo $_GET['text']; ?>"><br>
                            <?php }else{ ?>
                            <input
                                type="text"
                                name="item_name"
                                id="item_name"
                                placeholder="Enter item name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                <?php }?>
                                >
                            </div>
                            <div>
                                <label for="item_brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Brand</label>
                                <input
                                    type="text"
                                    name="item_brand"
                                    id="item_brand"
                                    placeholder="Enter item brand"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            </div>
                            <div>
                                <label for="item_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Category</label>
                                <input
                                    type="text"
                                    name="item_category"
                                    id="item_category"
                                    placeholder="Enter item category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            </div>
                            <div>
                                <label for="item_qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Quantity</label>
                                <input
                                    type="number"
                                    name="item_qty"
                                    id="item_qty"
                                    placeholder="Enter item quantity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            </div>
                            <div>
                                <label for="item_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Price</label>
                                <input
                                    type="number"
                                    name="item_price"
                                    id="item_price"
                                    placeholder="Enter item price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            </div>
                            <button type="submit" class="w-full border border-black text-white bg-black hover:bg-white hover:text-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>