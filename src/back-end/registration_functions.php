<?php
session_start();
include "databasecon.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['useremail']) && isset($_POST['userpass']) && isset($_POST['confirm-password'])) {
    handleUserRegistration();
} elseif (isset($_GET['useracc_id']) && is_numeric($_GET['useracc_id'])) {
    handleUserUpdate();
} else {
}

function handleUserRegistration() {
    global $con;

    $uemail = validate($_POST['useremail']);
    $pass = validate($_POST['userpass']);
    $confirm_pass = validate($_POST['confirm-password']);
    $user_data = 'useremail=' . $uemail;

    if (empty($uemail) || empty($pass) || empty($confirm_pass)) {
        redirectToCreateWithError("Please fill out all required fields!&$user_data");
    } elseif ($pass !== $confirm_pass) {
        redirectToCreateWithError("The confirmation password does not match&$user_data");
    } else {
        $isactive = isset($_POST['isactive']) ? $_POST['isactive'] : 0;
        $pass = md5($pass);

        $sql = "SELECT * FROM tbl_useracc WHERE useremail='$uemail'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            redirectToCreateWithError("The email is already exist! Try another!&$user_data");
        } else {
            $sql2 = "INSERT INTO tbl_useracc (useremail, userpass, isactive) VALUES ('$uemail', '$pass', '$isactive')";
            $result2 = mysqli_query($con, $sql2);

            if ($result2) {
                redirectToApcdbWithSuccess("Your account has been created successfully");
            } else {
                redirectToCreateWithError("Unknown error occurred&$user_data");
            }
        }
    }
}

function handleUserUpdate() {
    global $con;

    $useracc_id = $_GET['useracc_id'];

    $sql = "SELECT * FROM tbl_useracc WHERE useracc_id='$useracc_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        redirectToApcdbWithError("User not found");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $uemail = validate($_POST['useremail']);
        $pass = validate($_POST['userpass']);
        $confirm_pass = validate($_POST['confirm-password']);

        if (empty($uemail) || empty($pass) || empty($confirm_pass)) {
            redirectToUpdateWithError("Please fill out all required fields!&useracc_id=$useracc_id");
        } elseif ($pass !== $confirm_pass) {
            redirectToUpdateWithError("The confirmation password does not match&useracc_id=$useracc_id");
        } else {
            $pass = md5($pass);

            $sql = "UPDATE tbl_useracc SET useremail='$uemail', userpass='$pass' WHERE useracc_id='$useracc_id'";
            $result = mysqli_query($con, $sql);

            if ($result) {
                redirectToApcdbWithSuccess("Your account has been updated successfully");
            } else {
                redirectToUpdateWithError("Failed to update user account&useracc_id=$useracc_id");
            }
        }
    }
}

function redirectToCreateWithError($error) {
    global $uemail;
    $user_data = 'useremail=' . $uemail;
    header("Location: ../front-end/create.php?error=$error");
    exit();
}

function redirectToUpdateWithError($error) {
    global $useracc_id;
    header("Location: ../front-end/update.php?error=$error&useracc_id=$useracc_id");
    exit();
}

function redirectToApcdbWithError($error) {
    header("Location: ../front-end/apcdb.php?error=$error");
    exit();
}

function redirectToApcdbWithSuccess($success) {
    header("Location: ../front-end/apcdb.php?success=$success");
    exit();
}
?>
