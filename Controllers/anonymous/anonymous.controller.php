<?php
require "../../Models/dbGlobal.php";
require "../smtpController.php";
$db = connect();

$name = $email = $phone = $message = $subject = "";
$isValid = true;
$phoneReg = '/^(\+?880|0)1[3456789]\d{8}$/';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_ADD_SLASHES);
        return $data;
    }

    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $phone = test($_POST["phone"]);
    $subject = test($_POST["subject"]);
    $message = test($_POST["message"]);

    if ($name == "" || $email == "" || $message == "") {
        $isValid = false;
    }

    if ($phone != "") {
        if (!preg_match($phoneReg, $phone)) {
            $isValid = false;
            setcookie("error", "<span class='alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Phone Number</span>", time() + 1, "/");
            header("location: ../../views/contact#get-in-touch");
            die();
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("error", "<span class='alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Invalid Email</span>", time() + 1, "/");
        header("location: ../../views/contact#get-in-touch");
        die();
    }

    if ($isValid) {
        $msg = $message . "<br>" . "<br>" . "Email: " . $email . "<br>" . "Contact Number: <a href='tel:$phone'>$phone</a>";
        smtp_mailer($subject, $msg);

        anonymousInsert($name, $email, $phone, $message);
        setcookie("error", "<span class='alert alert-success' role='alert'><i class='fas fa-check'></i> Massege Sent. Thank you for your.</span>", time() + 1, "/");
        header("location: ../../views/contact#get-in-touch");
    } else {
        setcookie("error", "<span class='alert alert-danger' role='alert'><i class='fas fa-exclamation-circle'></i> Input Field Should not be empty!</span>", time() + 1, "/");
        header("location: ../../views/contact#get-in-touch");
    }
}

?>
<a href="tel:+"></a>