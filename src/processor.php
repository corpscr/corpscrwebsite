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