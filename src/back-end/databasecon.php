<?php

$hname= "localhost";
$uname= "root";
$pass = "";

$database = "autogeek";

$con = mysqli_connect($hname, $uname, $pass, $database);

if (!$con) {
	echo "Connection Failed!";
}