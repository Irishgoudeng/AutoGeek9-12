<?php
class loginModel {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function getUser($email, $password) {
        $email = $this->validate($email);
        $password = $this->validate($password);
        $password = md5($password);

        $sql = "SELECT * FROM tbl_useracc WHERE useremail='$email' AND userpass='$password'";
        $result = mysqli_query($this->con, $sql);

        return mysqli_fetch_assoc($result);
    }
}
?>