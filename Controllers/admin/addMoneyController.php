<?php
require "../../Models/dbAdmin.php";
require "../smtpController.php";
session_start();
if (!isset($_SESSION["admin"])) {
    header("location: ../../Views/login");
    die();
}
$db = connect();

$source = $trans_id = $amount = "";
$id = $_SESSION["id"];
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $source = test($_POST["source"]);
    $trans_id = test($_POST["trans_id"]);
    $amount = test($_POST["amount"]);

    if ($id == null || $source == "" || $trans_id == "") {
        $isValid = false;
    }

    if ($amount <= 0 || $amount == "") {
        $isValid = false;
        setcookie("addMoneyError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> Invalid amount filled</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/accounting");
    }

    if ($isValid) {
        addMoney($id, $source, $trans_id, $amount);
        smtp_mailer("New Money Added", "New Money Added");
        setcookie("addMoneySuccess", "<div class='alert alert-success' role='alert'><i class='fas fa-check'></i> Thank you so much for your contribution</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/accounting");
    } else {
        setcookie("addMoneyError", "<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> Fill-up all fields properly</div>", time() + 1, "/");
        header("location: ../../Views/admin-panel/accounting");
    }
}
