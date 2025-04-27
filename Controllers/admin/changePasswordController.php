<?php
require "../../Models/dbAdmin.php";
$db = connect();
session_start();

$id = $_SESSION["id"];
$oldPass = $newPass = $conPass = "";
$isValid = true;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $oldPass = test($_POST["old-pass"]);
    $newPass = test($_POST["new-pass"]);
    $conPass = test($_POST["con-pass"]);

    if ($oldPass == "") {
        $isValid = false;
    }

    if (strcmp($oldPass, $_SESSION["password"]) !== 0) {
        $isValid = false;
        setcookie("chng-pass", "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i>  Old password is incorrect.</span>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile#change-password");
        die();
    }

    if ($newPass == "" || $conPass == "" || strcmp($newPass, $conPass) !== 0) {
        $isValid = false;
        setcookie("chng-pass", "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i>  New password and confirm password do not match.</span>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile#change-password");
        die();
    }

    if (strlen($newPass) < 6) {
        $isValid = false;
        setcookie("chng-pass", "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i>  New password must be at least 6 characters long.</span>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile#change-password");
        die();
    }

    if ($isValid) {
        changePassword($id, $newPass);
        $_SESSION["password"] = $newPass;
        setcookie("chng-pass", "<span class='text-success text-sm font-weight-bold'><i class='fas fa-check'></i> Password changed.</span>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile#change-password");
    } else {
        setcookie("chng-pass", "<span class='text-danger text-sm font-weight-bold'><i class='fas fa-times'></i>  Invalid password input.</span>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile#change-password");
    }
}
