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

function createGarage() {
    global $con;

    $garageName = validate($_POST['garage_name']);
    $garageStatus = validate($_POST['garage_status']);
    $garage_data = 'garage_name=' . $garageName;

    if (empty($garageName)) {
        redirectToCreateWithError("Please fill out all required fields!&$garage_data");
    } else {
        $garageStatus = isset($_POST['garage_status']) ? $_POST['garage_status'] : 0;

        $sql = "SELECT * FROM tbl_garage WHERE garage_name='$garageName'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            redirectToCreateWithError("The email is already exist! Try another!&$garage_data");
        } else {
            $sql2 = "INSERT INTO tbl_garage(garage_name, garage_status) VALUES('$garageName', '$garageStatus')";
            $result2 = mysqli_query($con, $sql2);

            if ($result2) {
                redirectToApcdbWithSuccess("Garage has been created successfully");
            } else {
                redirectToCreateWithError("Unknown error occurred&$garage_data");
            }
        }
    }
}

function updateGarage() {
    global $con;

    $garageId = $_GET['garage_id'];

    $sql = "SELECT * FROM tbl_garage WHERE garage_id='$garageId'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        redirectToApcdbWithError("Garage not found");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $garageName = validate($_POST['garage_name']);
        $garageStatus = validate($_POST['garage_status']);

        if (empty($garageName)) {
            redirectToUpdateWithError("Please fill out all required fields!&garage_id=$garageId");
        } else {
            $sql = "UPDATE tbl_garage SET garage_name='$garageName', garage_status='$garageStatus' WHERE garage_id='$garageId'";
            $result = mysqli_query($con, $sql);

            if ($result) {
                redirectToApcdbWithSuccess("Garage has been updated successfully");
            } else {
                redirectToUpdateWithError("Failed to update garage name&garage_id=$garageId");
            }
        }
    }
}

function redirectToCreateWithError($error) {
    header("Location: ../front-end/creategarage.php?error=$error");
    exit();
}

function redirectToUpdateWithError($error) {
    global $garageId;
    header("Location: ../front-end/updategarage.php?error=$error&garage_id=$garageId");
    exit();
}

function redirectToApcdbWithError($error) {
    header("Location: ../front-end/garage.php?error=$error");
    exit();
}

function redirectToApcdbWithSuccess($success) {
    header("Location: ../front-end/garage.php?success=$success");
    exit();
}
?>
