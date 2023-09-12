<?php
session_start();
require_once '../back-end/databasecon.php';
require_once '../model/loginModel.php';
require_once '../controller/loginController.php';

// $hname= "localhost";
// $uname= "root";
// $pass = "";
// $database = "autogeek";

// $con = mysqli_connect($hname, $uname, $pass, $database);

// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }

$model = new loginModel($con);
$controller = new Controller($model);

if (isset($_POST['useremail']) && isset($_POST['userpass'])) {
    $controller->loginUser($_POST['useremail'], $_POST['userpass']);
} else {
    header("Location: ./loginView.php?error=Incorrect credentials!");
    exit();
}
?>