<?php
require_once "./config.php";





class Auth extends Database
{
    //register new user
    public function registerAuth($username, $password, $position)
    {
        $sql = "INSERT INTO users(username,password,position) VALUES (:username,:pass,:position)";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username, 'pass' => $password, 'position' => $position]);
        return true;
    }

    //check user already registered
    public function userExist($username)
    {
        $sql = "SELECT username FROM users WHERE username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //login user
    public function login($username)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
