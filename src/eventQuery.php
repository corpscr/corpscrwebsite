<html>
<head>
    <title>CR Event Search</title>
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        table {
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php include "navbar.php" ?>
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

<select name="entries_per_page" id="entries_per_page" onchange="updateEntriesPerPage()">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="50">50</option>
    <option value="100">100</option>
</select>

<!--TODO: ADD SORTING FEATURE TO SORT BY DATE OR SATISFACTION-->
<!--TODO: ADD SORTING FEATURE TO SORT BY DATE OR SATISFACTION-->
<!--TODO: ADD SORTING FEATURE TO SORT BY DATE OR SATISFACTION-->
<!--TODO: ADD SORTING FEATURE TO SORT BY DATE OR SATISFACTION-->
<!--TODO: ADD SORTING FEATURE TO SORT BY DATE OR SATISFACTION-->

<div id="events_page_chooser">
</div>

<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Event Name</th>
            <th>Event Description</th>
            <th>ROTC</th>
            <th>College</th>
            <th>Major</th>
            <th>Career Path</th>
            <th>Industry</th>
            <th>Career Type</th>
            <th>CR Competency</th>
            <th>Time Spent</th>
            <th>Satisfaction</th>
        </tr>
    </thead>
    <tbody id="events_table_body">
    </tbody>
</table>
</body>
<script src="scripts/eventQuery.js"></script>
<script>
    // query events, update page
    const colHeaders = ["date", "eventname", "eventdesc", "rotc", "college", "major", "careerpath", "industry", "careertype", "cr_competency", "timespent", "satisfaction"];
    let page = 0;
    const events = <?php include "php_functions/getEventsTable.php"; echo getEventsTable(); ?>;
    updateEntriesPerPage();

    // retain original inputs
    const searchcolumn = document.getElementById("searchcolumn");
    searchcolumn.value = "<?php echo $_POST["searchcolumn"]; ?>";
    const searchterm = document.getElementById("searchterm");
    searchterm.value = "<?php echo isset($_POST['searchterm']) ? $_POST['searchterm'] : '' ?>"
</script>
</html>