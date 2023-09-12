<?php 
session_start(); 
include "databasecon.php";

if (isset($_POST['useremail']) && isset($_POST['userpass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uemail = validate($_POST['useremail']);
	$pass = validate($_POST['userpass']);

	if (empty($uemail && $pass)) {
		header("Location: ../front-end/login.php?error=Email and Password is required!");
	}else{
        $pass = md5($pass);       
		$sql = "SELECT * FROM tbl_useracc WHERE useremail='$uemail' AND userpass='$pass'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['useremail'] === $uemail && $row['userpass'] === $pass) {
                $_SESSION['useracc_id'] = $row['useracc_id'];
            	$_SESSION['isactive'] = $row['isactive'];
				$_SESSION['usertype_id'] = $row['usertype_id'];
                if($row['usertype_id']==1){
                    header("Location: ../front-end/admindb.php");
                    exit();
                }
                else if($row['usertype_id']==2){
                    header("Location: ../front-end/apcdb.php");
                    exit();
                }
                else if($row['usertype_id']==3){
                    header("Location: ../front-end/customerdb.php");
                    exit();
                }
                else{
                    header("Location: ../front-end/login.php?error=Incorrect credentials!");
                }
            }else{
                header("Location: ../front-end/login.php?error=Incorrect credentials!");
			}
		}else{
            header("Location: ../front-end/login.php?error=Incorrect credentials!");
		}
	}
}else{
    header("Location: ../front-end/login.php?error=Incorrect credentials!");
	exit();
}