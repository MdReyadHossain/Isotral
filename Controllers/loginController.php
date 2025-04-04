<?php
session_start();
require "../Models/dbGlobal.php";
require "smtpController.php";
$db = connect();
$users = $db->query("SELECT * FROM user WHERE status = 'ACTIVE'");
$sql = "SELECT * FROM user WHERE status = 'INACTIVE'";
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
                    $_SESSION["website"] = $user["website"];
                    $_SESSION["facebook_url"] = $user["facebook_url"];
                    $_SESSION["linkedin_url"] = $user["linkedin_url"];
                    $_SESSION["instagram_url"] = $user["instagram_url"];
                    $_SESSION["twitter_url"] = $user["twitter_url"];
                    $_SESSION["image_url"] = $user["image_url"];
                    $_SESSION["profession"] = $user["profession"];
                    $_SESSION["title"] = $user["title"];
                    $_SESSION["created_at"] = $user["created_at"];
                    login($user["id"]);
                    setcookie("isLogin", "Login Done!", time() + (60 * 60 * 24), "/");
                    $isValid = true;
                    if ($user["type"] == 'SUPER_ADMIN') {
                        $_SESSION["sa_title"] = $user["sa_title"];
                        $_SESSION["user_id"] = $user["user_id"];
                        $_SESSION["super_admin"] = true;
                        header("location: ../Views/super-admin-panel/dashboard");
                    } else if ($user["type"] == 'ADMIN') {
                        $_SESSION["admin"] = true;
                        $_SESSION["user_id"] = $user["user_id"];
                        header("location: ../Views/admin-panel/dashboard");
                    } else {
                        $_SESSION["member"] = true;
                        header("location: ../Views/member-panel/dashboard");
                    }
                }
            }
        }
        if ($disableUser->num_rows > 0 and !$isMember) {
            while ($disable = $disableUser->fetch_assoc()) {
                if ($disable["email"] == $email) {
                    setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Your account has been disabled, To reactive your account <a href='contact'>contact with us</a></p>", time() + 1, "/");
                    header("location: ../Views/login");
                    $isValid = true;
                    die();
                }
            }
        }
        if (!$isValid) {
            setcookie("reg", "<p class='alert alert-danger' role='alert' style='text-align: center; width: 50%; color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Email or Password incorrect.</p>", time() + 1, "/");
            header("location: ../Views/login");
        }
    } else {
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Input all field(s).</p>", time() + 1, "/");
        header("location: ../Views/login");
    }
}
