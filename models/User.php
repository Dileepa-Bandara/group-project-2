<?php
require_once("../assets/config.php");

class User extends Database{
	public $username;
	public $password;
	public $cpassword;
	public $position;
	
	public $errors;
	
		public function getUser($id){
			$sql = "SELECT * FROM users WHERE id = :id";
        	$statement = $this->conn->prepare($sql);
        	$statement->execute(['id' => $id]);
        	$result =      $statement->fetch(PDO::FETCH_ASSOC);
        	return $result;
		}
	
	public function getUserByUsername($username){
		$sql = "SELECT * FROM users WHERE username = :username";
        	$statement = $this->conn->prepare($sql);
        	$statement->execute(['username' => $username]);
        	$result =      $statement->fetch(PDO::FETCH_ASSOC);
        	return $result;
	}
	
		public function addUser($data){
			foreach($data as $name => $attribute){
				if(property_exists($this,$name)){
				$this->$name=$attribute;
				}
		
           }
			

			if ($this->validateUser())
			{
				
		
			$statement = $this->conn->prepare('INSERT INTO users (username, password,position) VALUES (:username, md5(:password), :position)');

  		$result=$statement->execute([
		'username' => $this->username,
    	'password' => $this->password,
		'position' => "employee"
					
]);

		//header("Location: ../employee/adduser.php");
			
			}
			else{
				return $this->errors;
			}
		}
		
	
		public function searchUser($data=[]){
			foreach($data as $name => $attribute){
				if(property_exists($this,$name)){
				$this->$name=$attribute;
				}
		
           }
			$statement = $this->conn->prepare('SELECT * from users WHERE username =:username');

  		    $result=$statement->execute(['username' => '%'.$this->username.'%']);
			
			return $statement->fetchAll(PDO::FETCH_ASSOC);
 
		}
	
	
	public function validateUser(){
		$this->errors=[];
		if (!preg_match("/^[a-zA-Z]+$/",$this->username)) {
            
			$this->errors["username"] = "UserName must contain only alphabets";
			
        }
		
		if($this->getUserByUsername($this->username)){
			$this->errors['username']="Username already exists";
		}
		 
		if(strlen($this->password) < 6) {
            $this->errors["password"] = "Password must be minimum of 6 characters";
		
        }       
		
		if(($this->password) != ($this->cpassword)) {
           $this->errors["cpassword"] = "Password and Confirm Password doesn't match";
						
       }       
		
		return !count($this->errors);
	}
}
?>