<?php
  require_once "../models/Candidate.php";

  
		$candidate=new Candidate();
	 if (isset($_POST['submit'])) {
	
		$candidate->addCandidate($_POST);
	
             			  	
		 
  }
	 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
	
	<style>
	
input[type=submit] {
  background-color: #6880d3;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
	
table {
  font-family: helvetica,arial;
  font-size: 12px;
  border-collapse: collapse;
  width: 100%;
}

td,th{
  border:3px solid #6880d3;
  padding: 10px;
}
</style>

</head>
<body>
 <h3 style="color: red ">JOB APPLICATION FORM</h3>
	
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <table width="86%" border="0">
    <tbody>
		
		<tr>
        <th colspan="2" scope="row" align="left"><label style="color:darkcyan"><h3>Personal Details</h3></label></th>
      </tr>
		
      <tr>
        <th scope="row">  <label for="firstname">First Name</label>
     *</th>
	   <td><input type="text" name="firstname" id="firstname" value="<?php echo $candidate->firstname; ?>" maxlength="50"><?php if (isset($candidate->errors['firstname'])) echo $candidate->errors['firstname']; ?></td>
      </tr>
	<tr>
        <th scope="row">  <label for="lastname">Last Name
     *</label></th>
        <td><input type="text" name="lastname" id="lastname" value="<?php echo $candidate->lastname; ?>" maxlength="50" ><?php if (isset($candidate->errors['lastname'])) echo $candidate->errors['lastname']; ?></td>
      </tr>

      <tr>
        <th scope="row"> <label for="dob">Date of Birth</label>
     *</th>
        <td><input type="date" name="dob" id="dob" value="<?php echo $candidate->dob; ?>"><?php if (isset($candidate->errors['dob'])) echo $candidate->errors['dob']; ?></td>
      </tr>
      <tr>
        <th scope="row"><label for="gender">Gender</label>
     </th>
       <td><input type="text" name="gender" id="gender"></td>
      </tr>
      <tr>
        <th scope="row"> <label for="nationality">Nationality</label>
   </th>
        <td><input type="text" name="nationality" id="nationality"></td>
      </tr>
     
	
      <tr>
        <th scope="row"><label for="nic">NIC No </label>
     *</th>
        <td><input type="text" name="nic" id="nic" value="<?php echo $candidate->nic; ?>" maxlength="30"><?php if (isset($candidate->errors['nic'])) echo $candidate->errors['nic']; ?></td>
	
     </tr>
	<tr>
        <th scope="row"><label for="email">Email address</label>
     *</th>
        <td><input type="text" name="email" id="email"  value="<?php echo $candidate->email; ?>" maxlength="30" ><?php if (isset($candidate->errors['email'])) echo $candidate->errors['email']; ?></td>
      </tr>
      <tr>
        <th scope="row"><label for="address">Address</label>
        </th>
        <td><input type="text" name="address" id="address"></td>
      </tr>
      <tr>
        <th scope="row"><label for="telephone">Telephone</label>
       </th>
        <td><input name="telephone" type="telephone"  id="telephone"></td>
      </tr>
      <tr>
        <th scope="row"><label for="contactno">Contact No</label>
*        </th>
        <td><input type="text" name="contactno" id="contactno" value="<?php echo $candidate->contactno; ?>"><?php if (isset($candidate->errors['contactno'])) echo $candidate->errors['contactno']; ?></td>
		 
      </tr>
		
      <tr>
        <th colspan="2" scope="row" align="left"><label style="color:darkcyan"><h3>Job Details</h3></label></th>
      </tr>
      <tr>
		  <th width="28%" scope="row"> <label>Full Name</label></th>
        <td width="72%"><input type="text" name="fullname" id="fullname" maxlength="50"></td>
      </tr>
		<tr>
        <th scope="row"><label>Department</label></th>
		<td>
		<select name="department">  
  		  <option value=""></option>>Select</option>}  
		  <option value="IT" <?php if($candidate->department=='IT') echo "selected=='selected'" ?>>IT</option>
		  <option value="Marketing" <?php if($candidate->department=='Marketing') echo "selected=='selected'" ?>>Marketing</option>  
		  <option value="Management" <?php if($candidate->department=='Management') echo "selected=='selected'" ?>>Management</option>  
		  <option value="HR" <?php if($candidate->department=='HR') echo "selected=='selected'" ?>>HR</option>  
		 </select>   
        </td>
      </tr>
      <tr>
        <th scope="row"> <label>Position Applied</label></th>
        <td>
		<select name="position">  
  		  <option value="">Select</option>}  
		  <option value="Manager" <?php if($candidate->position=='Manager') echo "selected=='selected'" ?>>Manager</option>  
		  <option value="Sales Executive" <?php if($candidate->position=='Sales Executive') echo "selected=='selected'" ?>>Sales Executive</option>  
		  <option value="Trainee" <?php if($candidate->position=='Trainee') echo "selected=='selected'" ?>>Trainee</option>  
		 </select>   
			<?php if (isset($candidate->errors['position'])) echo $candidate->errors['position']; ?>
        </td>
      </tr>
      <tr>
        <th scope="row"><label>Expected Salary</label></th>
        <td><input type="text" name="salary" id="salary"></td>
      </tr>

     <tr>
        <th scope="row"> <label>Work Schedule</label></th>
        <td>
		<input type="text" name="wrkshedul" id="wrkshedul"></td>
		
      </tr>
		     
      <tr>
        <th colspan="2" scope="row" align="left"><label style="color:darkcyan"><h3>Qualifications</h3></label></th>
      </tr>
	  <tr>
        <th scope="row"><label>Educational Qualifications</label></th>
        <td><input type="text" name="eduqual" id="eduqual">
		  <?php if (isset($eduqual_error)) echo $eduqual_error; ?></td></td>
      </tr>
       
      <tr>
        <th scope="row"><label for="professional">Professional Qualifications</label>
        </th>
        <td><input type="text" name="professional" id="professional">
		  <?php if (isset($professional_error)) echo $professional_error; ?></td></td>
      </tr>
	  <tr>
	    <th colspan="2" scope="row" align="left">Work Experience (Recent Job)</th>
      </tr>
	  <tr>
        <th scope="row"><label for="expcompany">Company</label>
        </th>
        <td><input type="text" name="expcompany" id="expcompany">
		  <?php if (isset($expcompany_error)) echo $expcompany_error; ?></td></td>
      </tr>
	 <tr>
        <th scope="row"><label for="expdesig">Designation</label>
        </th>
        <td><input type="text" name="expdesig" id="expdesig">
		 <?php if (isset($expdesign_error)) echo $expdesign_error; ?></td></td>
      </tr>
      <tr>
        <th scope="row"><label for="expfrom">From Date</label>
        </th>
        <td><input type="date" id="expfrom" name="expfrom">
			<?php if (isset($expfrom_error)) echo $expfrom_error; ?></td>
       </td>
      </tr>
	<tr>
        <th scope="row"><label for="expto">To Date</label>
        </th>
        <td><input type="date" id="expto" name="expto">
			<?php if (isset($expto_error)) echo $expto_error; ?></td>
       </td>
      </tr>
	
    </tbody>
  </table>
  
 	  
  <input type="submit" value="Submit" name="submit">
    </form>
</div>
</body>

</html>