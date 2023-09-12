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

function createService() {
    global $con;

    $serviceName = validate($_POST['serv_name']);
    $serviceType = validate($_POST['servicetype_id']);
    $serviceDesc = validate($_POST['service_desc']);
    $servicePrice = validate($_POST['service_price']);
    $service_data = 'serv_name=' . $serviceName;

    if (empty($serviceName) || empty($serviceType) || empty($serviceDesc) || empty($servicePrice)) {
        redirectToCreateWithError("Please fill out all required fields!&$service_data");
    } else {
        $sql = "SELECT * FROM tbl_services WHERE serv_name='$serviceName'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            redirectToCreateWithError("The item name is already exist! Try another!&$service_data");
        } else {
            $sql2 = "INSERT INTO tbl_services(serv_name, servicetype_id, service_desc, service_price) VALUES('$serviceName', '$serviceType', '$serviceDesc', '$servicePrice')";
            $result2 = mysqli_query($con, $sql2);

            if ($result2) {
                redirectToApcdbWithSuccess("Item has been created successfully");
            } else {
                redirectToCreateWithError("Unknown error occurred&$service_data");
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

function getServiceTypes() {
    global $con; // Assuming $con is a global variable representing the database connection

    $query = "SELECT * FROM tbl_servicetype";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $options = '';

    while ($row = mysqli_fetch_assoc($result)) {
        $serTypeId = $row['servicetype_id'];
        $serTypeName = $row['service_type'];
        $options .= "<option value='$serTypeId'>$serTypeName</option>";
    }

    return $options;
}

function redirectToCreateWithError($error) {
    header("Location: ../front-end/servicescreate.php?error=$error");
    exit();
}

function redirectToUpdateWithError($error) {
    global $itemId;
    header("Location: ../front-end/updateinventory.php?error=$error&item_id=$itemId");
    exit();
}

function redirectToApcdbWithError($error) {
    header("Location: ../front-end/apcservices.php?error=$error");
    exit();
}

function redirectToApcdbWithSuccess($success) {
    header("Location: ../front-end/apcservices.php?success=$success");
    exit();
}
?>
