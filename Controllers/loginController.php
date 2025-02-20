<?php
session_start();
require "../Models/dbGlobal.php";
require "smtpController.php";
$db = connect();
$users = $db->query("SELECT * FROM user WHERE status = true");
$sql = "SELECT * FROM user WHERE status = false";
$disableUser = $db->query($sql);

$email = $password = "";
$isValid = $isEmpty = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = test($_POST["email"]);
    $password = test($_POST["password"]);

    if ($email == "" || $password == "")
        $isEmpty = true;

    if (!$isEmpty) {
        if ($users->num_rows > 0) {
            while ($user = $users->fetch_assoc()) {
                if ($user["email"] == $email and $user["password"] == $password) {
                    $_SESSION["id"] = $user["id"];
                    $_SESSION["name"] = $user["name"];
                    $_SESSION["email"] = $user["email"];
                    $_SESSION["phone"] = $user["phone"];
                    $_SESSION["address"] = $user["address"];
                    login($user["id"]);
                    setcookie("isLogin", "Login Done!", time() + (60 * 60 * 24), "/");
                    $isValid = true;
                    if ($user["type"] == 'ADMIN') {
                        $_SESSION["admin"] = true;
                        header("location: ../views/admin-panel/dashboard");
                    } else {
                        $_SESSION["member"] = true;
                        header("location: ../views/member-panel/dashboard");
                    }
                }
            }
        }
        if ($disableUser->num_rows > 0 and !$isMember) {
            while ($disable = $disableUser->fetch_assoc()) {
                if ($disable["email"] == $email) {
                    setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Your account has been removed, To reactive your account <a href='contact'>contact with us</a></p>", time() + 1, "/");
                    header("location: ../View/login");
                    $isValid = true;
                    die();
                }
            }
        }
        if (!$isValid) {
            setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Email or Password incorrect.</p>", time() + 1, "/");
            header("location: ../View/login");
        }
    } else {
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Input all field(s).</p>", time() + 1, "/");
        header("location: ../View/login");
    }
}
