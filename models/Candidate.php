<?php
require_once("../assets/config.php");

class Candidate extends Database{
	public $firstname;
	public $lastname;
	public $fullname;
	public $gender;
	public $dob;
	public $nationality;
	public $email;
	public $nic;
	public $contactno;
    public $telephone;
	public $address;
    public $position;
	public $department;
    public $salary;
    public $wrkschedul;
	public $eduqual;
	public $professional;
	public $expcompany;
	public $expdesig;
	public $expfrom;
	public $expto;
	
	public $errors;
	
		public function getCandidate($id){
			$sql = "SELECT * FROM candidate WHERE id = :id";
        	$statement = $this->conn->prepare($sql);
        	$statement->execute(['id' => $id]);
        	$result =      $statement->fetch(PDO::FETCH_ASSOC);
        	return $result;
		}
		public function addCandidate($data){
			foreach($data as $name => $attribute){
				if(property_exists($this,$name)){
				$this->$name=$attribute;
				}
		
           }
			$this->dob=date('Y-m-d', strtotime($this->dob));

			if ($this->validateCandidate())
			{
				
		
			$statement = $this->conn->prepare('INSERT INTO candidate (fullname, firstname,lastname,dob, gender, nationality, nicno, email,contactno,telephone, address, department, expsalary, position, eduqual, profqual, workcomp, workdesig, workfrom, workto) VALUES (:fullname, :firstname, :lastname, :dob, :gender, :nationality, :nic, :email, :contactno, :telephone, :address, :department, :salary, :position,:eduqual, :professional, :expcompany, :expdesig, :expfrom, :expto)');

  		$result=$statement->execute([
		'fullname' => $this->fullname,
    	'firstname' => $this->firstname,
    	'lastname' => $this->lastname,
		'dob'=> $this->dob,
		'gender'=>$this->gender,
		'nationality'=>$this->nationality,
		'nic'=>$this->nic,
		'email'=>$this->email,
		'contactno' => $this->contactno,
		'telephone' => $this->telephone,
		'address' => $this->address,
		'position' => $this->position,
		'department' => $this->department,
		'salary' => $this->salary,
		'eduqual' => $this->eduqual,
        'professional' => $this->professional,
        'expcompany' => $this->expcompany,
        'expdesig' => $this->expdesig,
        'expfrom' => $this->expfrom,
        'expto' => $this->expto
			
]);

		header("Location: ../candidate/thankyou.html");
			
			}
			else{
				return $this->errors;
			}
		}
	private function getUniqueCandidate($nic,$position,$department){
		  	$sql = "SELECT * FROM candidate WHERE nicno = :nic AND position= :position AND department= :department" ;
        	$statement = $this->conn->prepare($sql);
        	$statement->execute(['nic' => $nic, 'position'=>$position, 'department'=> $department]);
		
        	$result =      $statement->fetch(PDO::FETCH_ASSOC);
        	return $result;
	}
	
		public function updateCandidate($id, $data){
			
		}
		public function deleteCandidate($id){
			
		}
		
		public function searchCandidate($data=[]){
			foreach($data as $name => $attribute){
				if(property_exists($this,$name)){
				$this->$name=$attribute;
				}
		
           }
			$statement = $this->conn->prepare('SELECT * from candidate WHERE position like :position && department like :department');

  		$result=$statement->execute([
		'position' => '%'.$this->position.'%', 'department' => '%'.$this->department.'%',
			
]);
			return $statement->fetchAll(PDO::FETCH_ASSOC);
 
		}
	public function validateCandidate(){
		
		$this->errors=[];
		if (!preg_match("/^[a-zA-Z ]+$/",$this->fullname)) {
            $this->errors["fullname"] = "Full Name must contain only alphabets and space";
			
        }
		
		if (!preg_match("/^[a-zA-Z ]+$/",$this->firstname)) {
            $this->errors["firstname"] = "First Name must contain only alphabets and space";
			
        }
		if (!preg_match("/^[a-zA-Z ]+$/",$this->lastname)) {
            $this->errors["lastname"] = "Last Name must contain only alphabets and space";			
        }
		
		if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
            $this->errors["email"] = "Please Enter Valid Email ID";	
        }
		 
		
        if (!preg_match("/^(\d){9}(([vVxX])|(\d){3})$/",$this->nic)) {
            $this->errors["nic"] = "NIC must contain 9 digits followed by X or V";		 
		}
		
	    if(empty($this->contactno))
		{
            $this->errors["contactno"] = "Contact No cannot be blank";
		}
		
		if($this->getUniqueCandidate($this->nic, $this->position, $this->department)){
			$this->errors["position"]="You have already applied for ".$this->position." at ". $this->department;
		}
		
		return !count($this->errors);
	}
}
?>