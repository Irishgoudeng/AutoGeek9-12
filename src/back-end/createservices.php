<?php 
session_start(); 
include "databasecon.php";

if (isset($_POST['service_name']) && isset($_POST['service_desc'])
    && isset($_POST['service_price'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$sname = validate($_POST['service_name']);
	$sdesc = validate($_POST['service_desc']);
	$sprice = validate($_POST['service_price']);

	$user_data = 'service_name='. $sname;

	if (empty($sname)) {
		header("Location: ../front-end/servicescreate.php?error=Please fill out all required fields!");
	    exit();
	}else if(empty($sdesc)){
        header("Location: ../front-end/servicescreate.php?error=Please fill out all required fields!");
	    exit();
	}
	else if(empty($sprice)){
        header("Location: ../front-end/servicescreate.php?error=Please fill out all required fields!");
	    exit();
	}
	else{
        $pass = md5($pass);

	    $sql = "SELECT * FROM tbl_services WHERE service_name='$sname'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../front-end/servicescreate.php?error=The email is already exist! Try another!&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO tbl_services(service_name, service_desc, service_price) VALUES('$sname', '$sdesc', '$sprice')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	    header("Location: ../front-end/servicescreate.php?success=Your account has been created successfully");
	            exit();
           }else {
	           	header("Location: ../front-end/servicescreate.php?error=Unknown error occurred&$user_data");
		        exit();
           }
		}
	}
}else{
	header("Location: ../front-end/servicescreate.php");
	exit();
}