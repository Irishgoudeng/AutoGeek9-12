<?php
session_start();
include "databasecon.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// if (isset($_POST['garage_name']) && isset($_POST['garage_status'])) {
//     createGarage();
// } elseif (isset($_GET['garage_id']) && is_numeric($_GET['garage_id'])) {
//     updateGarage();
// } else {
// }

function createAppointment() {
    global $con;

    $itemName = validate($_POST['item_name']);
    $itemBrand = validate($_POST['item_brand']);
    $itemCategory = validate($_POST['item_category']);
    $itemQty = validate($_POST['item_qty']);
    $itemPrice = validate($_POST['item_price']);
    $item_data = 'item_name=' . $itemName;

    if (empty($itemName) || empty($itemBrand) || empty($itemCategory) || empty($itemQty)
    || empty($itemQty) || empty($itemPrice)) {
        redirectToCreateWithError("Please fill out all required fields!&$item_data");
    } else {
        $sql = "SELECT * FROM tbl_inventory WHERE item_name='$itemName'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            redirectToCreateWithError("The item name is already exist! Try another!&$item_data");
        } else {
            $sql2 = "INSERT INTO tbl_inventory(item_name, item_brand, item_category, item_qty, item_price) VALUES('$itemName', '$itemBrand', '$itemCategory', '$itemQty', '$itemPrice')";
            $result2 = mysqli_query($con, $sql2);

            if ($result2) {
                redirectToApcdbWithSuccess("Item has been created successfully");
            } else {
                redirectToCreateWithError("Unknown error occurred&$item_data");
            }
        }
    }
}

function updateItem() {
    global $con;

    $itemId = $_GET['item_id'];

    $sql = "SELECT * FROM tbl_inventory WHERE item_id='$itemId'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        redirectToApcdbWithError("Item not found");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $itemName = validate($_POST['item_name']);
        $itemBrand = validate($_POST['item_brand']);
        $itemCategory = validate($_POST['item_category']);
        $itemQty = validate($_POST['item_qty']);
        $itemPrice = validate($_POST['item_price']);

        if (empty($itemName) || empty($itemBrand) || empty($itemCategory) || empty($itemQty)
        || empty($itemQty) || empty($itemPrice)) {
            redirectToUpdateWithError("Please fill out all required fields!&item_id=$itemId");
        } else {
            $sql = "UPDATE tbl_inventory SET item_name='$itemName', item_brand='$itemBrand', item_category='$itemCategory', item_qty='$itemQty', item_price='$itemPrice' WHERE item_id='$itemId'";
            $result = mysqli_query($con, $sql);

            if ($result) {
                redirectToApcdbWithSuccess("Item has been updated successfully");
            } else {
                redirectToUpdateWithError("Failed to update item&item_id=$itemId");
            }
        }
    }
}

function redirectToCreateWithError($error) {
    header("Location: ../front-end/createinventory.php?error=$error");
    exit();
}

function redirectToUpdateWithError($error) {
    global $itemId;
    header("Location: ../front-end/updateinventory.php?error=$error&item_id=$itemId");
    exit();
}

function redirectToApcdbWithError($error) {
    header("Location: ../front-end/inventory.php?error=$error");
    exit();
}

function redirectToApcdbWithSuccess($success) {
    header("Location: ../front-end/inventory.php?success=$success");
    exit();
}
?>
