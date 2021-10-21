<?php
require_once "./config.php";





class Auth extends Database
{
<<<<<<< HEAD
    //register new employee

    public function registerAuthEmployee($username, $password, $position)
    {
        $sql = "INSERT INTO employee(username,password,position,isDelete) VALUES (:username,:pass,:position,:isDelete)";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username, 'pass' => $password, 'position' => $position, 'isDelete' => 1]);
        return true;
    }

    //check user already registered employee
    public function userExistEmployee($username)
    {
        $sql = "SELECT username FROM employee WHERE username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //login user
    public function loginEmployee($username)
    {
        $sql = "SELECT * FROM employee WHERE username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    //Manager Registration quaries
    public function registerAuthManager($username, $password, $position)
=======

    /*
    //register new user
    public function registerAuth($username, $password, $position)
>>>>>>> 5b6429da1de7b4faaa4f1783ece94d4e0c02ae1e
    {
        $sql = "INSERT INTO managers(username,password,position,isDelete) VALUES (:username,:pass,:position,:isDelete)";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username, 'pass' => $password, 'position' => $position, 'isDelete' => 1]);
        return true;
    }

<<<<<<< HEAD
    //check user already registered employee
    public function userExistManager($username)
    {
        $sql = "SELECT username FROM managers WHERE username = :username";
=======
    */



    //check user already registered
    public function userExist($username)
    {
        $sql = "SELECT username FROM systemusers WHERE username = :username";
>>>>>>> 5b6429da1de7b4faaa4f1783ece94d4e0c02ae1e
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //login user
    public function loginManager($username)
    {
<<<<<<< HEAD
        $sql = "SELECT * FROM managers WHERE username = :username";
=======
        $sql = "SELECT * FROM systemusers WHERE username = :username";
>>>>>>> 5b6429da1de7b4faaa4f1783ece94d4e0c02ae1e
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
