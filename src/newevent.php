<!DOCTYPE HTML>
<html>
<head>
	<title>Submit New Event</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<?php include "navbar.php" ?>
<h1>Log Event</h1>

<form onsubmit="submitForm()" method="POST" action="createnewprofile.php">
	
	<label for="ename">Event Name: </label>
	<input type="text" id="ename" name="ename" size="20" maxlength="100"><br>
	<label for="edesc">Event Description: </label>
	<input type="text" id="edesc" name="edesc" size="20" maxlength="225"><br>
	<label for="time">Hours Spent: </label>
	<input type="number" min="0" id="time" name="time"><br>
	<label for="satisfaction">Satisfaction: </label>
	<input type="number" min="0" max="10" id="satisfaction" name="satisfaction"><br>
	
	<label for="industry">Industry: </label>
	<select id="industry" name="industry">
	<option value="Private" selected>Private Company</option>
	<option value="DOD">Defense</option>
	</select><br>
	
	<label for="career">Career Type: </label>
	<select id="career" name="career">
	<option value="Sells" selected>Sells</option>
	<option value="Cyber">Cyber</option>
	</select><br>
	
	<label for="CRComp">CRComp: </label>
	<select id="CRComp" name="CRComp">
	<option value="demo1" selected>demo1</option>
	<option value="demo2">demo2</option>
	</select><br>
	
	<input type="submit" value="Submit">	
</form>

</body>
</html>