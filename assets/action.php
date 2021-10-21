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
/*
    //check input,remove slashes,htmltags
    $name = $user->checkInput($_POST["username"]); //$_POST["data came from ajax request"]
    $pass = $user->checkInput($_POST["password"]);
    $pos = $user->checkInput($_POST["position"]);

   


    //my code
    $empId = $user->checkInput($_POST["empId"]);
    $name = $user->checkInput($_POST["name"]);
    $gender = $user->checkInput($_POST["gender"]);
    $userRole = $user->checkInput($_POST["userRole"]);
    $department = $user->checkInput($_POST["department"]);
    $email = $user->checkInput($_POST["email"]);
    $mobile = $user->checkInput($_POST["mobile"]);
    $address = $user->checkInput($_POST["address"]);
    $username = $user->checkInput($_POST["username"]);
    $password = $user->checkInput($_POST["password"]);

     */
   


    // encryot password
    $hpass = password_hash($password, PASSWORD_DEFAULT);
    // echo "<pre>";
    // print_r($name);
    // echo "</pre>";
    //user exist
<<<<<<< HEAD
    if ($user->userExistEmployee($name)) {
        echo $user->showMessages("Warning", "This user already registered!");
    } else {
        if ($user->registerAuthEmployee($name, $hpass, $pos)) {
            echo "register";
=======
    if ($user->userExist($username)) {
        echo $user->showMessages("Warning", "This user already registered!");
    } else {
        if ($user->registerAuth($empId, $name, $gender, $userRole, $department, $email, $mobile, $address, $username, $password) {
            echo "Added Successfully";
>>>>>>> 5b6429da1de7b4faaa4f1783ece94d4e0c02ae1e
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
