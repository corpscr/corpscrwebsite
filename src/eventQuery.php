<html>
<head>
    <title>CR Event Search</title>
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
<?php
    function getEventsTable() {
        include "connectSQL.php";

        $resultArr = [];

        if (isset($_POST['searchterm']) && strlen($_POST['searchterm']) != 0) {
            $conn = connectToSQL();

            // TODO: sanitize input
            $searchColumn = $_POST['searchcolumn'];
            $searchTerm = "'%" . $_POST['searchterm'] . "%'";
            if (strcmp($searchColumn, "any") == 0) {
                $searchColumn = "CONCAT(Events.eventname, ' ', Events.eventdesc, ' ', 
                Users.rotc, ' ', Users.college, ' ', Users.major, ' ', Users.careerpath, ' ',
                Events.industry, ' ', Events.careertype, ' ', Events.cr_competency)";
            }

            $queryString = 'SELECT Events.date, Events.eventname, Events.eventdesc, Users.rotc, Users.college, 
                            Users.major, Users.careerpath, Events.industry, Events.careertype, Events.cr_competency, 
                            Events.timespent, Events.satisfaction 
                            FROM Users INNER JOIN Events 
                            ON Users.uin_key=Events.uin_key
                            WHERE ' . $searchColumn . ' LIKE ' . $searchTerm;
            $result = $conn->query($queryString);
            $conn->close();

            while ($row = $result->fetch_assoc()) {
                $resultArr[] = $row;
            }
        }
        
        return json_encode($resultArr);
    }

?>
<form onsubmit="submitForm()" method="POST" action="eventQuery.php">
    <select name="searchcolumn" id="searchcolumn">
        <option value="any">Any</option>
        <option value="eventname">Event Name</option>
        <option value="eventdesc">Event Description</option>
        <option value="industry">Industry</option>
        <option value="careertype">Career Type</option>
        <option value="cr_competency">CR Competency</option>
    </select>
    <input type="text" name="searchterm" id="searchterm" value="<?php echo isset($_POST['searchterm']) ? $_POST['searchterm'] : '' ?>">
    <input type="submit" value="Search">
</form>

<select name="entries_per_page" id="entries_per_page" onchange="updateEntriesPerPage()">
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="50">50</option>
    <option value="100">100</option>
</select>

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
    <script type="text/javascript">
        // replaces events table with updated events
        function populateEventsTable(events, startIndex, endIndex) {
            const table_body = document.getElementById("events_table_body");
            table_body.innerHTML = '';
            for (let index = startIndex; index < endIndex; index++) {
                const row = document.createElement("tr");
                colHeaders.forEach(function(header) {
                    const col = document.createElement("td");
                    col.innerHTML = events[index][header];
                    row.appendChild(col);
                });
                table_body.appendChild(row);
            }
        }

        // update page chooser
        function updateEntriesPerPage() {
            const entries_per_page = document.getElementById("entries_per_page").value;
            const page_chooser = document.getElementById("events_page_chooser");
            page_chooser.innerHTML = "";
            const num_pages = Math.ceil(events.length/entries_per_page);
            for (let index = 0; index < num_pages; index++) {
                const page_link = document.createElement("a");
                const startIndex = index * entries_per_page;
                const endIndex = Math.min((index + 1) * entries_per_page, events.length);
                page_link.onclick = function() {page = index; populateEventsTable(events, startIndex, endIndex);};
                page_link.setAttribute("href", "#");
                page_link.innerHTML = index + 1;
                page_chooser.appendChild(page_link);
            }
            page = 0;
            populateEventsTable(events, 0, Math.min(entries_per_page, events.length));
        }

        const colHeaders = ["date", "eventname", "eventdesc", "rotc", "college", "major", "careerpath", "industry", "careertype", "cr_competency", "timespent", "satisfaction"];
        let page = 0;
        const events = <?php echo getEventsTable(); ?>;
        console.log(events);
        updateEntriesPerPage();
    </script>
</html>