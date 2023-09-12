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

function createSupplier() {
    global $con;

    $suppName = validate($_POST['supplier_name']);
    $suppPhone = validate($_POST['supplier_phone']);
    $suppEmail = validate($_POST['supplier_email']);
    $supp_data = 'supplier_name=' . $suppName;

    if (empty($suppName) || empty($suppPhone) || empty($suppEmail)) {
        redirectToCreateWithError("Please fill out all required fields!&$supp_data");
    } else {
        $sql = "SELECT * FROM tbl_supplier WHERE supplier_name='$suppName'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            redirectToCreateWithError("Supplier is already exist! Try another!&$supp_data");
        } else {
            $sql2 = "INSERT INTO tbl_supplier(supplier_name, supplier_phone, supplier_email) VALUES('$suppName', '$suppPhone', '$suppEmail')";
            $result2 = mysqli_query($con, $sql2);

            if ($result2) {
                redirectToApcdbWithSuccess("Supplier has been created successfully");
            } else {
                redirectToCreateWithError("Unknown error occurred&$supp_data");
            }
        }
    }
}

function updateSupplier() {
    global $con;

    $suppId = $_GET['supplier_id'];

    $sql = "SELECT * FROM tbl_supplier WHERE supplier_id='$suppId'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        redirectToApcdbWithError("Supplier not found");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $suppName = validate($_POST['supplier_name']);
        $suppPhone = validate($_POST['supplier_phone']);
        $suppEmail = validate($_POST['supplier_email']);

        if (empty($suppName) || empty($suppPhone) || empty($suppEmail)) {
            redirectToUpdateWithError("Please fill out all required fields!&garage_id=$suppId");
        } else {
            $sql = "UPDATE tbl_supplier SET supplier_name='$suppName', supplier_phone='$suppPhone', supplier_email='$suppEmail' WHERE supplier_id='$suppId'";
            $result = mysqli_query($con, $sql);

            if ($result) {
                redirectToApcdbWithSuccess("Supplier has been updated successfully");
            } else {
                redirectToUpdateWithError("Failed to update supplier&supplier_id=$suppId");
            }
        }
    }
}

function redirectToCreateWithError($error) {
    header("Location: ../front-end/createsupp.php?error=$error");
    exit();
}

function redirectToUpdateWithError($error) {
    global $garageId;
    header("Location: ../front-end/updatesupp.php?error=$error&garage_id=$garageId");
    exit();
}

function redirectToApcdbWithError($error) {
    header("Location: ../front-end/supp.php?error=$error");
    exit();
}

function redirectToApcdbWithSuccess($success) {
    header("Location: ../front-end/supp.php?success=$success");
    exit();
}
?>
