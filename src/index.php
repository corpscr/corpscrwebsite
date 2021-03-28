<html>

<b>PHP GET FROM SERVER</b>

<?php

// Create connection
$conn = new mysqli("localhost", "root", "asdf1234", "corpscrdemo");
// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
} 

if (!isset($_POST['submit'])) {
	die("get nay-nayed");
}

$uin_key = $_POST['uin'] . "_0";
$conn->query("INSERT INTO users(uin_key,uin,firstname,lastname,outfit,gradyear) VALUES(" . $uin_key . "," . $_POST['uin'] . "," . $_POST['fname'] . "," . $_POST['lname'] . "," . $_POST['outfit'] . "," . $_POST['gradyear'] . ")");

$result = $conn->query("SELECT * FROM users");
while ( $row = $result->fetch_assoc() ) {
    print_r($row);
}

?>

<body>

<b>PHP WRITE TO SERVER</b>
<b>PHP GET UPDATED DATABASE</b>

<form onsubmit="submitForm()" method="POST" action="index.php">
	<label for="uin">UIN: </label>
	<input type="number" id="uin" name="uin">
	<label for="fname">First Name: </label>
	<input type="text" id="fname" name="fname">
	<label for="lname">Last Name: </label>
	<input type="text" id="lname" name="lname">
	<label for="outfit">Outfit: </label>
	<input type="text" id="outfit" name="outfit">
	<label for="gradyear">Grad Year: </label>
	<input type="number" id="gradyear" name="gradyear">
	<input type="submit" id="submit" name="submit">Submit</input>
</form>

</body>
</html>
