<?php

require_once "./auth.php";
//create object of a auth
$user = new Auth();
$error = array();
//handle register ajax request
if (isset($_POST["action"]) && $_POST["action"] == "registerEmployee") {
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
    if ($user->userExistEmployee($name)) {
        echo $user->showMessages("Warning", "This user already registered!");
    } else {
        if ($user->registerAuthEmployee($name, $hpass, $pos)) {
            echo "register";
        } else {
            echo $user->showMessages("Warning", "Error in database");
        }
    }
}


if (isset($_POST["action"]) && $_POST["action"] == "registerManager") {
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
    if ($user->userExistEmployee($name)) {
        echo $user->showMessages("Warning", "This user already registered!");
    } else {
        if ($user->registerAuthEmployee($name, $hpass, $pos)) {
            echo "register";
        } else {
            echo $user->showMessages("Warning", "Error in database");
        }
    }
}



//managers registration
if (isset($_POST["action"]) && $_POST["action"] == "registerManager") {
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
    if ($user->userExistManager($name)) {
        echo $user->showMessages("Warning", "This user already registered!");
    } else {
        if ($user->registerAuthManager($name, $hpass, $pos)) {
            echo "register";
        } else {
            echo $user->showMessages("Warning", "Error in database");
        }
    }
}
