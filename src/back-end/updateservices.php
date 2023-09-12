<?php
    session_start();
    include "databasecon.php";

    // Check if useracc_id is present in the URL and is numeric
    if (isset($_GET['service_id']) && is_numeric($_GET['service_id'])) {
        $service_id = $_GET['service_id'];

        // Fetch the user data based on useracc_id
        $sql = "SELECT * FROM tbl_services WHERE service_id='$service_id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        // Ensure that the user data is found
        if (!$row) {
            header("Location: ../front-end/servicecreate.php?error=User not found");
            exit();
        }
    } else {
        header("Location: ../front-end/apcdb.php");
        exit();
    }

    // Handle form submission for updating user data
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validate and sanitize user input
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $sname = validate($_POST['service_name']);
        $sdesc = validate($_POST['service_desc']);
        $sprice = validate($_POST['service_price']);

        if (empty($sname) || empty($sdesc) || empty($sprice)) {
            header("Location: ../front-end/update.php?error=Please fill out all required fields!&useracc_id=$useracc_id");
            exit();
        } else if ($pass !== $confirm_pass) {
            header("Location: ../front-end/update.php?error=The confirmation password does not match&useracc_id=$useracc_id");
            exit();
        } else {
            $pass = md5($pass);

            // Perform the UPDATE operation
            $sql = "UPDATE tbl_useracc SET useremail='$uemail', userpass='$pass' WHERE useracc_id='$useracc_id'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                header("Location: ../front-end/apcdb.php?success=Your account has been updated successfully");
                exit();
            } else {
                header("Location: ../front-end/update.php?error=Failed to update user account&useracc_id=$useracc_id");
                exit();
            }
        }
    }
    ?>