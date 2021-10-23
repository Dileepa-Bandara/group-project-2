<?php
  require_once "../models/User.php";

  
		$user=new User();
	 if (isset($_POST['submit'])) {
	
		$user->addUser($_POST);
		 
  }
	 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMPLOYEE REGISTRATION FORM</title>
    
    <link rel = "stylesheet" type = "text/css" href = "../css/style1.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                <div class="form-group">
                        <label>Username</label>
                        <td><input type="text" name="username" id="username" value="<?php echo $user->username; ?>" maxlength="50"><?php if (isset($user->errors['username'])) echo $user->errors['username']; ?></td>  
					
                      
                                    
                    <div class="form-group">
                        <label>Password</label>
						<td><input type="password" name="password" id="password" value="<?php echo $user->password; ?>" maxlength="50"><?php if (isset($user->errors['password'])) echo $user->errors['password']; ?></td>  
						
                        
                    <div class="form-group">
                        <label>Confirm Password</label>
						<td><input type="password" name="cpassword" id="cpassword" value="<?php echo $user->cpassword; ?>" maxlength="50"><?php if (isset($user->errors['cpassword'])) echo $user->errors['cpassword']; ?></td>  
						
                  <!--div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" value="employee" maxlength="50" required="" >
                        <span class="text-danger"><?php if (isset($position_error)) echo $position_error; ?></span>
                    </div-->
                  
                     <input type="submit" value="Submit" name="submit">
                    
                </form>
            </div>
        </div>    
    </div>
</body>
</html>
