<?php
require "../../Models/dbAdmin.php";
session_start();
if (!isset($_SESSION["admin"])) {
    header("location: ../../Views/login");
    die();
}
$db = connect();


$name = $email = $phone = $address = $facebook_url = $linkedin_url = $instagram_url = $twitter_url = "";
$isValid = true;
$phoneReg = '/^(0)1[3456789]\d{8}$/';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = $_SESSION["id"];
    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $phone = test($_POST["phone"]);
    $address = test($_POST["address"]);
    $facebook_url = test($_POST["facebook_url"]);
    $linkedin_url = test($_POST["linkedin_url"]);
    $instagram_url = test($_POST["instagram_url"]);
    $twitter_url = test($_POST["twitter_url"]);
    $website = test($_POST["website"]);

    $userEmail = $db->query("SELECT * FROM user WHERE email = '$email' AND id != '$id'")->fetch_assoc();
    $userPhone = $db->query("SELECT * FROM user WHERE phone = '$phone' AND id != '$id'")->fetch_assoc();


    if ($id == null || $name == "" || $email == "" || $phone == "" || $address == "" || $linkedin_url == "") {
        $isValid = false;
    }

    if ($userEmail["name"] != "") {
        $isValid = false;
        setcookie("updateError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> <b>Email</b> is already used</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile");
        die();
    }

    if ($userPhone["name"] != "") {
        $isValid = false;
        setcookie("updateError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> <b>Phone Number</b> is already used</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile");
        die();
    }

    if (!preg_match($phoneReg, $phone)) {
        $isValid = false;
        setcookie("updateError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> Invalid Phone number</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile");
        die();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("updateError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> Invalid Email address</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile");
        die();
    }

    if ($isValid) {
        updateAdminProfile($id, $name, $email, $phone, $address, $facebook_url, $linkedin_url, $instagram_url, $twitter_url, $website);
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["address"] = $address;
        $_SESSION["facebook_url"] = $facebook_url;
        $_SESSION["linkedin_url"] = $linkedin_url;
        $_SESSION["instagram_url"] = $instagram_url;
        $_SESSION["twitter_url"] = $twitter_url;
        $_SESSION["website"] = $website;
        setcookie("updateSuccess", "<div class='alert alert-success' role='alert'><i class='fas fa-check'></i> Information Updated</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile");
    } else {
        setcookie("updateError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> Fill-up all fields properly</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/profile");
    }
}
