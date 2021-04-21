<?php
    function register() {
        include "connectSQL.php";

        $conn = connectToSQL();

        // first check for duplicate netids
        $netid = $_POST["netid"];
        $netid_key = $netid . "_0";
        $netid_query = "SELECT netid_key, classyear FROM Users WHERE netid='" . $netid . "' ORDER BY classyear DESC";
        $matching_netid_table = $conn->query($netid_query);
        
        // someone else had used same netid before
        if ($matching_netid_table->num_rows > 0) {
            $row = $matching_netid_table->fetch_assoc();
            $most_recent_classyear = $row["classyear"];
            $current_year = date("Y");
            if ($most_recent_classyear <= $current_year) { // that person already graduated, create new netid_key
                $pos = strrpos($row["netid_key"], "_");
                $cur_index = (int)substr($row["netid_key"], $pos + 1);
                $new_index = $cur_index + 1;
                $netid_key = $netid . "_" . $new_index;
            }
            else { // that person has not graduated, must be error
                $conn->close();
                return "ERR_DUPLICATE_CURRENT_NETID";
            }
        }

        // now insert new user
        $insert_query = "INSERT INTO Users(netid_key, netid, firstname, lastname, email, classyear, outfit, rotc, college, major, careerpath) VALUES('"
                        . $netid_key . "', '" . $netid . "', '" . $_POST["fname"] . "', '" . $_POST["lname"] . "', '"
                        . $_POST["email"] . "', " . $_POST["classyear"] . ", '" . $_POST["outfit"] . "', '"
                        . $_POST["rotc"] . "', '" . $_POST["college"] . "', '" . $_POST["major"] . "', '" . $_POST["careerpath"] . "')";
        $conn->query($insert_query);
        $conn->close();
        return "SUCCESS";
    }
?>