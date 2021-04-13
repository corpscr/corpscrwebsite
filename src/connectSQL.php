<?php

function connectToSQL() {
    // Create connection
    $conn = new mysqli("localhost", "root", "asdf1234", "corpscr");
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

?>