<?php
require "../../Models/dbMember.php";
require "../smtpController.php";
$db = connect();
$sql = "SELECT * FROM admin where name = 'isotral'";
$isotral = $db->query($sql)->fetch_assoc();

$isotralEmail = $isotral['email'];
$isotralPhone = $isotral['phone_first'];

$name = $email = $phone = $password = "";
$isValid = true;
$phoneReg = '/^(0)1[3456789]\d{8}$/';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $phone = test($_POST["phone"]);
    $password = test($_POST["password"]);

    $sql = "SELECT * FROM user WHERE status = true AND (phone = '$phone' OR email = '$email')";
    $user = $db->query($sql)->fetch_assoc();

    if ($name == "" || $email == "" || $password == "") {
        $isValid = false;
        setcookie("reg", "<span class='alert-danger'><i class='fas fa-exclamation-circle'></i> Input Properly!</span>", time() + 1, "/");
        header("location: ../../views/login");
        die();
    }
    if (strlen($password) < 6) {
        $isValid = false;
        setcookie("reg", "<span class='alert-danger'><i class='fas fa-exclamation-circle'></i> Password must be at least 6 characters long.</span>", time() + 1, "/");
        header("location: ../../views/login");
        die();
    }

    if ($phone != "") {
        if (!preg_match($phoneReg, $phone)) {
            $isValid = false;
            setcookie("reg", "<span class='alert-danger'><i class='fas fa-exclamation-circle'></i> Invalid Phone Number</span>", time() + 1, "/");
            header("location: ../../views/login");
            die();
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        setcookie("reg", "<span class='alert-danger'><i class='fas fa-exclamation-circle'></i> Invalid Email</span>", time() + 1, "/");
        header("location: ../../views/login");
        die();
    }

    if ($user["id"] != "") {
        $isValid = false;
        setcookie("reg", "<span class='alert-danger'><i class='fas fa-exclamation-circle'></i> This phone or email already registered.</span>", time() + 1, "/");
        header("location: ../../views/login");
        die();
    }

    if ($isValid) {
        memberRegistration($name, $email, $phone, $password);

        $msg = "Welcome dear,<br><br>We bring the justice, we bring the innovation. For any query, please don't esitate to contact with us. <br>Don't share your password with anyone.<br><br>Isotral <br>Envision the future<br><a href='mailto:$isotralEmail'>$isotralEmail</a><br><a href='tel:$isotralPhone'>$isotralPhone</a>";
        smtp_mailer("Welcome to Isotral", $msg, $email);

        $msg = "New member has just joined in Isotral. Let him/her welcome,<br><br>$name<br><a href='mailto:$email'>$email</a><br><a href='tel:$phone'>$phone</a>";
        smtp_mailer("New member has joined", $msg);

        setcookie("reg", "<span class='alert-success'><i class='fas fa-check'></i> Thanks for join with us!</span>", time() + 1, "/");
        header("location: ../../views/login");
    } else {
        setcookie("reg", "<span class='alert-danger'><i class='fas fa-exclamation-circle'></i> Registration Incomplete.</span>", time() + 1, "/");
        header("location: ../../views/login");
    }
}
