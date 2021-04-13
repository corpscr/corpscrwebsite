<html>
<head>
    <title>CR Event Search</title>
    <?php

    include "connectSQL.php";

    function getEventsTable() {
        $resultArr = [];
        if (strlen($_POST['searchcolumn']) != 0) {
            $conn = connectToSQL();

            // TODO: sanitize input
            $searchColumn = $_POST['searchcolumn'];
            $searchTerm = "'%" . $_POST['searchterm'] . "%'";
            if (strcmp($searchColumn, "any") == 0) {
                $searchColumn = "CONCAT(eventname, ' ', eventdesc, ' ', industry, ' ', careertype, ' ', cr_competency)";  // TODO: replace with actual names of columns
            }

            $queryString = 'SELECT * FROM Events WHERE ' . $searchColumn . ' LIKE ' . $searchTerm;
            $result = $conn->query($queryString);
            $conn->close();

            while ($row = $result->fetch_assoc()) {
                $resultArr[] = $row;
            }

            $conn->close();
        }
        return json_encode($resultArr);
    }

    ?>
    <script type="text/javascript">
        var events = <?php echo getEventsTable(); ?>
    </script>
</head>
<body>
<form onsubmit="submitForm()" method="POST" action="eventQuery.php">
    <select name="searchcolumn" id="searchcolumn">
        <option value="any">Any</option>
        <option value="eventname">Event Name</option>
        <option value="eventdesc">Event Description</option>
        <option value="industry">Industry</option>
        <option value="careertype">Career Type</option>
        <option value="cr_competency">CR Competency</option>
    </select>
    <input type="text" name="searchterm" id="searchterm">
    <input type="submit" value="Search">
</form>

<select name="entriesperpage" id="entriesperpage">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="50">50</option>
    <option value="100">100</option>
</select>

<table>
</table>
</body>
</html>