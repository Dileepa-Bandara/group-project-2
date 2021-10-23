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

        <h2>SCHEDULE INTERVIEWS</h2>

    </div>
	
<form>
<table> 
 <tr>
	 <td>Candidate Name</td>
	 <td><input type="text" id="candname" name="candname"></td>
 </tr>
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
	<td>Date</td>
	<td><input type="date" id="schdaytime" name="schdaydate"></td>
 </tr>
<tr>
	<td>Time</td>
	<td><input type="time"  name="schdaytime"></td>
 </tr>

 <tr>	 
     <td>Location</td>
	 <td><input type="text" id="loc" name="loc"></td>
 </tr>
	
<tr>	 
	 <td>Comments</td>
	 <td><textarea rows="5" cols="60" name="text" placeholder=""></textarea></td>
</tr>	 
<tr align="center">
	<td> <button class="button2">Cancel</button></td>
    <td><button class="button">Save</button></td>
</tr>
	
</table>

</form>

</body>

</html>