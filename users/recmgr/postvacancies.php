<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	
<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
</head>

<body>
    <div class="dashboard">

     <h2>POST VACANCIES</h2>
		
	<form>

<table> 
 <tr>
	 <td>Department</td>
	 
	 <td><select>
		<option value=”sw”>Software Development</option>
		<option value=”acc”>Accouting</option>
		<option value=”mktg”>Marketing</option>
	    </select>
	 </td>
 </tr>
	
 <tr>	 
     <td>Position</td>
	 <td><select>
		<option value=”programmer”>Programmer</option>
		<option value=”accountant”>Accountant</option>
		<option value=”salesexe”>Sales Executive</option>
		<option value=”coord”>Coordinator</option>
	    </select>
	 </td>
 </tr>
<tr>	 
     <td>Job Description/Responsibilities</td>
	<td><textarea rows="3" cols="40" name="text"></textarea></td>
 </tr>
 <tr>	 
     <td>Qualifications</td>
	 <td><input type="text" id="qual" name="qual"></td>
 </tr>
	
<tr>	 
     <td>Experience</td>
	 <td><input type="text" id="exp" name="exp"></td>
 </tr>
	
<tr>	 
	 <td>Comments</td>
	 <td><textarea rows="3" cols="40" name="text"></textarea></td>
</tr>	

<tr>
   <td>Deadline</td>
   <td><input type="date" id="deadline" name="deadline"></td>
</tr>
<tr align="center">
	<td> <button class="button2">Cancel</button></td>
    <td><button class="button">Save</button></td>
</tr>
	
</table>
<br>
 
  </form>


    </div>

</body>

</html>