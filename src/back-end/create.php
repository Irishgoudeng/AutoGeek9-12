<?php 
session_start(); 
include "databasecon.php";

if (isset($_POST['useremail']) && isset($_POST['userpass']) && isset($_POST['confirm-password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uemail = validate($_POST['useremail']);
	$pass = validate($_POST['userpass']);
	$confirm_pass = validate($_POST['confirm-password']);

	$user_data = 'useremail='. $uemail;


	if (empty($uemail)) {
		header("Location: ../front-end/create.php?error=Please fill out all required fields!&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../front-end/create.php?error=Please fill out all required fields!&$user_data");
	    exit();
	}
	else if(empty($confirm_pass)){
        header("Location: ../front-end/create.php?error=Please fill out all required fields!&$user_data");
	    exit();
	}
	else if($pass !== $confirm_pass){
        header("Location: ../front-end/create.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	else{
        $pass = md5($pass);

	    $sql = "SELECT * FROM tbl_useracc WHERE useremail='$uemail'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../front-end/create.php?error=The email is already exist! Try another!&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO tbl_useracc(useremail, userpass) VALUES('$uemail', '$pass')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	    header("Location: ../front-end/apcdb.php?success=Your account has been created successfully");
	            exit();
           }else {
	           	header("Location: ../front-end/create.php?error=Unknown error occurred&$user_data");
		        exit();
           }
		}
	}
}else{
	header("Location: ../front-end/create.php");
	exit();
}