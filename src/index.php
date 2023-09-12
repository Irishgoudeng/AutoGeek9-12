<?php
session_start();

require_once './back-end/databasecon.php';
require_once './model/loginModel.php';
require_once './controller/loginController.php';

$model = new loginModel($con);
$controller = new Controller($model);

if (isset($_POST['useremail']) && isset($_POST['userpass'])) {
    $controller->loginUser($_POST['useremail'], $_POST['userpass']);
} else {
    header("Location: ../front-end/login.php?error=Incorrect credentials!");
    exit();
}
?>