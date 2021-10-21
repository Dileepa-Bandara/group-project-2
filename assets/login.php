

<?php
session_start();
require_once "./auth.php";
//create object of a auth
$user = new Auth();



if (isset($_POST['login'])) {


    if (isset($_POST["l-username"]) && isset($_POST["l-password"])) {

        $username = $user->checkInput($_POST["l-username"]);
        $password = $user->checkInput($_POST["l-password"]);

        $registeredEmployee = $user->loginEmployee($username);
        $registeredManager = $user->loginManager($username);

        echo "<br>";
        echo $registeredUser['password'];
        echo "<br>";
        echo $password;
        // print_r($username);
        // print_r($password);

        // print_r($registeredUser);
        if ($registeredEmployee != null || $registeredManager != null) {
            if (password_verify($password, $registeredEmployee["password"])) {
                echo "login";
<<<<<<< HEAD
                echo $registeredEmployee["position"];

                // if ($registeredUser["position"] == "hr-manager") {
                //     $_SESSION['username'] = $registeredUser['username'];
                //     header("Location:../users/hr-manager/");
                // }

                // if ($registeredUser["position"] == "leave-manager") {
                //     $_SESSION['username'] = $registeredUser['username'];
                //     header("Location:../users/leave-manager/");
                // }
                // if ($registeredUser["position"] == "payroll-manager") {
                //     $_SESSION['username'] = $registeredUser['username'];
                //     header("Location:../users/payroll-manager/");
                // }
                // if ($registeredUser["position"] == "admin") {
                //     $_SESSION['username'] = $registeredUser['username'];
                //     header("Location:../users/admin/");
                // }
                // if ($registeredUser["position"] == "recruitment-manager") {
                //     $_SESSION['username'] = $registeredUser['username'];
                //     header("Location:../users/leave-manager/");
                // }
                if ($registeredEmployee["position"] == "employee") {
                    $_SESSION['username'] = $registeredEmployee['username'];
                    header("Location:../users/employee/");
                }
            } else {
                echo $user->showMessages("Warning", "Error in login");
            }
            if (password_verify($password, $registeredManager["password"])) {
                echo "login";
                echo $registeredManager["position"];

                // if ($registeredManager["position"] == "hr-manager") {
                //     $_SESSION['username'] = $registeredManager['username'];
                //     header("Location:../users/hr-manager/");
                // }

                // if ($registeredManager["position"] == "leave-manager") {
                //     $_SESSION['username'] = $registeredManager['username'];
                //     header("Location:../users/leave-manager/");
                // }
                // if ($registeredManager["position"] == "payroll-manager") {
                //     $_SESSION['username'] = $registeredManager['username'];
                //     header("Location:../users/payroll-manager/");
                // }
                if ($registeredManager["position"] == "admin") {
                    $_SESSION['username'] = $registeredManager['username'];
                    header("Location:../users/admin/");
                }
                // if ($registeredManager["position"] == "recruitment-manager") {
                //     $_SESSION['username'] = $registeredManager['username'];
                //     header("Location:../users/leave-manager/");
                // }
=======
                echo $registeredUser["userRole"];

                if ($registeredUser["userRole"] == "hr-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/hr-manager/");
                }

                if ($registeredUser["userRole"] == "leave-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/leave-manager/");
                }
                if ($registeredUser["userRole"] == "payroll-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/payroll-manager/");
                }
                if ($registeredUser["userRole"] == "admin") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/admin/");
                }
                if ($registeredUser["userRole"] == "recruitment-manager") {
                    $_SESSION['username'] = $registeredUser['username'];
                    header("Location:../users/leave-manager/");
                }
>>>>>>> 5b6429da1de7b4faaa4f1783ece94d4e0c02ae1e
            } else {
                echo $user->showMessages("Warning", "Error in login");
            }
        } else {
            echo $user->showMessages("Warning", "User not registered");
        }
    }
}
