<?php
function connect()
{
    $server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $dbname = "isotral";

    // $server = "sql313.ezyro.com";
    // $db_user = "ezyro_38472160";
    // $db_pass = "6cd017787d34a";
    // $dbname = "ezyro_38472160_isotral";

    // $server = "sql310.infinityfree.com";
    // $db_user = "if0_38457029";
    // $db_pass = "60uso3kFyph";
    // $dbname = "if0_38457029_isotral";
    $conn = new mysqli($server, $db_user, $db_pass, $dbname);

    if ($conn->connect_error) {
        die("Data base Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
