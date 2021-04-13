<html>
<head>
    <title>CR Event Search</title>
</head>
<body>
<form onsubmit="submitForm()" method="POST" action="eventQuery.php">
    <label for="searchcolumn">Column to search: </label>
    <select name="searchcolumn" id="searchcolumn">
        
    </select>
</form>
<?php

include "connectSQL.php";

if (strlen($_POST['searchcolumn']) != 0) {
    $conn = connectToSQL();

    // TODO: sanitize input
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

    $conn->close();
}

?>
</body>
</html>