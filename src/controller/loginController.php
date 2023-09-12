<?php
class Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function loginUser($email, $password) {
        if (empty($email) || empty($password)) {
            header("Location: ../front-end/login.php?error=Email and Password are required!");
            exit();
        }

        $user = $this->model->getUser($email, $password);

        if ($user) {
            $_SESSION['useracc_id'] = $user['useracc_id'];
            $_SESSION['isactive'] = $user['isactive'];
            $_SESSION['usertype_id'] = $user['usertype_id'];
            
            if ($user['usertype_id'] == 1) {
                header("Location: ../front-end/admindb.php");
            } elseif ($user['usertype_id'] == 2) {
                header("Location: ../front-end/apcdb.php");
            } elseif ($user['usertype_id'] == 3) {
                header("Location: ../front-end/customerdb.php");
            } else {
                header("Location: ../view/loginView.php?error=Incorrect credentials!");
            }
            exit();
        } else {
            header("Location: ../view/loginView.php?error=Incorrect credentials!");
            exit();
        }
    }
}
?>