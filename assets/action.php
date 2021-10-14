<?php

require_once "./auth.php";
//create object of a auth
$user = new Auth();
$error = array();
//handle register ajax request
if (isset($_POST["action"]) && $_POST["action"] == "register") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //check input,remove slashes,htmltags
    $name = $user->checkInput($_POST["username"]); //$_POST["data came from ajax request"]
    $pass = $user->checkInput($_POST["password"]);
    $pos = $user->checkInput($_POST["position"]);


    // encryot password
    $hpass = password_hash($pass, PASSWORD_DEFAULT);
    // echo "<pre>";
    // print_r($name);
    // echo "</pre>";
    //user exist
    if ($user->userExist($name)) {
        echo $user->showMessages("Warning", "This user already registered!");
    } else {
        if ($user->registerAuth($name, $hpass, $pos)) {
            echo "register";
        } else {
            echo $user->showMessages("Warning", "Error in database");
        }
    }
}
//handle login ajax request

// if (isset($_POST['action']) && $_POST['action'] == "login") {
//     // print_r($_POST);
//     $username = $user->checkInput($_POST["l-username"]);
//     $password = $user->checkInput($_POST["l-password"]);

//     $registeredUser = $user->login($username);



// print_r($username);
// print_r($password);

// print_r($registeredUser);




//     if ($registeredUser != null) {
//         if (password_verify($password, $registeredUser["password"])) {
//             // echo "login";
//             header("Location:../pages/dashboard.php");
//         } else {
//             echo $user->showMessages("Warning", "Error in login");
//         }
//     } else {
//         echo $user->showMessages("Warning", "User not registered");
//     }
// }
