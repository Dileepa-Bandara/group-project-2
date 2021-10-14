

<?php
session_start();
require_once "./auth.php";
//create object of a auth
$user = new Auth();



if (isset($_POST['login'])) {


    if (isset($_POST["l-username"]) && isset($_POST["l-password"])) {

        $username = $user->checkInput($_POST["l-username"]);
        $password = $user->checkInput($_POST["l-password"]);

        $registeredUser = $user->login($username);

        // print_r($username);
        // print_r($password);

        // print_r($registeredUser);
        if ($registeredUser != null) {
            if (password_verify($password, $registeredUser["password"])) {
                echo "login";
                echo $registeredUser["position"];

                if ($registeredUser["position"] == "hr-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/hr-manager/");
                }

                if ($registeredUser["position"] == "leave-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/leave-manager/");
                }
                if ($registeredUser["position"] == "payroll-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/payroll-manager/");
                }
                if ($registeredUser["position"] == "admin") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/admin/");
                }
                if ($registeredUser["position"] == "recruitment-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/leave-manager/");
                }
            } else {
                echo $user->showMessages("Warning", "Error in login");
            }
        } else {
            echo $user->showMessages("Warning", "User not registered");
        }
    }
}
