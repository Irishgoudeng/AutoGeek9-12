<?php
	session_start();
    include "databasecon.php";

	if(isset($_GET['useracc_id'])){
		$sql = "DELETE FROM tbl_useracc WHERE useracc_id = '".$_GET['useracc_id']."'";

		//use for MySQLi OOP
		if($con->query($sql)){
            header("Location: ../front-end/apcdb.php?success=Your account has been deleted successfully");
            exit();
		}	
		else{
            header("Location: ../front-end/apcdb.php?error=Something went wrong!");
            exit();
		}
	}
	else{
        header("Location: ../front-end/apcdb.php?error=Something went wrong!");
        exit();
	}
?>