<?php
require "../../Models/dbAdmin.php";
session_start();

$oldPass = $error = "";
$isValid = true;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $oldPass = test($_POST["pass"]);

    if (strcmp($oldPass, $_SESSION["password"]) !== 0) {
        $error = "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i> Wrong</span>";
    } else {
        $error = "<span class='text-success text-sm font-weight-bold'><i class='fas fa-check'></i> Matched</span>";
    }

    echo $error;
}
