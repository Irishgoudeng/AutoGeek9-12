<?php
require('../back-end/databasecon.php');
$query = "SELECT * FROM tbl_supplier";
$result = mysqli_query($con, $query);
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
        <title>AutoGeek | Admin</title>
    </head>
    <body>
        <nav class="bg-black border-gray-200 xl:px-80 py-7 dark:bg-gray-900 h-full">
            <div class="container flex flex-wrap items-center justify-between">
                <a href="landing_page.html" class="flex items-center">
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
                    <a href="../back-end/logout.php">
                            <button class="bg-transparent text-lg hover:bg-white text-white font-medium hover:text-black py-2 px-4 border border-white hover:border-transparent">
                                Logout
                            </button>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Welcome to ApcDB!</h1>
        <a href="./createsupp.php" class="items-center border border-black text-white bg-black hover:bg-white hover:text-black">Add</a>
        <div>
        <table class="min-w-full text-left text-sm font-light">
			<thead class="border-b font-medium dark:border-neutral-500">
				<tr>
					<th scope="col" class="px-6 py-2">Supplier Name</th>
					<th scope="col" class="px-6 py-2">Supplier Phone</th>
                    <th scope="col" class="px-6 py-2">Supplier Email</th>
					<th scope="col" class="px-6 py-2">Action</th>
				</tr>
			</thead>
				<tbody>
					<tr class="border-b dark:border-neutral-500">
                        <?php
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
						<td class="whitespace-nowrap px-6 py-2 font-medium"><?php echo $row['supplier_name']; ?></td>
						<td class="whitespace-nowrap px-6 py-2 font-medium"><?php echo $row['supplier_phone']; ?></td>
                        <td class="whitespace-nowrap px-6 py-2 font-medium"><?php echo $row['supplier_email']; ?></td>
						<td class="whitespace-nowrap px-6 py-2">
							<a class="cursor-pointer hover:underline hover:text-gray-700" @click="viewUser(user.id)">
								Read
							</a>
							<a href="../front-end/updatesupp.php?supplier_id=<?php echo $row["supplier_id"]; ?>" class="cursor-pointer hover:underline hover:text-gray-700">
								Update
							</a>
                            <a href="../back-end/delete.php?useracc_id=<?php echo $row['supplier_id']; ?>" class="cursor-pointer hover:underline hover:text-gray-700">
								Delete
							</a>
			    		</td>
					</tr>
                        <?php
                            }
                        ?>
				</tbody>
			</table>
        </div>
    </body>
</html>