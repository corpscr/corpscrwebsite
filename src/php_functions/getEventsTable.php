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

            // query joint of both tables for matches to search term
            $queryString = 'SELECT Events.date, Events.eventname, Events.eventdesc, Users.rotc, Users.college, 
                            Users.major, Users.careerpath, Events.industry, Events.careertype, Events.cr_competency, 
                            Events.timespent, Events.satisfaction 
                            FROM Users INNER JOIN Events 
                            ON Users.netid_key=Events.netid_key
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