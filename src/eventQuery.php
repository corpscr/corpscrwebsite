<?php

include "connectSQL.php";

$conn = connectToSQL();

// sanitize input
$searchColumn = $_POST['searchcolumn'];
$searchTerm = "'%" . $_POST['searchterm'] . "%'";
if (strcmp($searchColumn, "any") == 0) {
    $searchColumn = "CONCAT(eventname, ' ', industry, ' ', careertype, ' ', crcompetency)";  // TODO: replace with actual names of columns
}

$queryString = 'SELECT * FROM Events WHERE ' . $searchColumn . ' LIKE ' . $searchTerm;
$result = $conn->query($queryString);
$conn->close();

$resultArr = array();
while ($row = $result->fetch_assoc()) {
    $resultArr[] = $row;
}

$resultArr = json_encode($resultArr);

?>