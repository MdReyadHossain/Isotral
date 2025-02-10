<?php
function chamberID($chamber)
{
    if ($chamber == "1")
        return "SDO-A-";
    else
        return "SDO-B-";
}
session_start();
require "../Model/dbPatient.php";
require "smtpController.php";
$db = connect();
$users = $db->query("SELECT * FROM user WHERE status = true");
$sql = "SELECT * FROM patients WHERE status = false";
$disableUser = $db->query($sql);

$email = $password = "";
$isValid = $isEmpty = $isAdmin = $isMember = false;

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
                    if ($user["type"] == 'ADMIN') {
                        $lastOTP = $db->query("SELECT * FROM otp ORDER BY id DESC LIMIT 1")->fetch_assoc();
                        if ($lastOTP["otp"] != "")
                            $db->query("DELETE FROM varification WHERE otp = " . $lastOTP['otp'] . "");

                        $otp = rand(10000, 99999);
                        date_default_timezone_set('Asia/Dhaka');
                        $data = new DateTime();
                        $currentTime = $data->format('Y-m-d H:i:s');

                        $db->query("INSERT INTO varification (OTP, created_at, updated_at) VALUES ('$otp', '$currentTime', '$currentTime')");

                        $msg = "You are requested to login to Admin Panel, You should use this OTP within <b>5 minutes</b> to login.<br><h2>" . $otp . "</h2><br>Keep it on your mind, Don't share OTP with anyone.<br><br>Isotral<br>Email: " . $user['email'] . "<br>Contact Number: " . $user['phone'] . "";
                        smtp_mailer($user["email"], "Login OTP", $msg);
                        header("location: ../View/doctorVarification");
                        $isValid = true;
                        $isAdmin = true;
                    } else {
                        $_SESSION["Web-id"] = chamberID($patient["default_chamber"]) . $patient["id"];
                        $_SESSION["patient"] = "Patient";
                        $_SESSION["id"] = $patient["id"];
                        $_SESSION["name"] = $patient["name"];
                        $_SESSION["email"] = $patient["email"];
                        $_SESSION["phone"] = $patient["phone"];
                        $_SESSION["age"] = $patient["age"];
                        $_SESSION["address"] = $patient["address"];
                        $_SESSION["gender"] = $patient["gender"];
                        $_SESSION["default_chamber"] = $patient["default_chamber"];
                        $_SESSION["created_at"] = $patient["created_at"];
                        setcookie("isLogin", "Login Done!", time() + (60 * 60 * 24), "/");
                        header("location: ../View/patient/dashboard");
                    }
                }
            }
        }
        if ($disableUser->num_rows > 0 and !$isMember) {
            while ($disable = $disableUser->fetch_assoc()) {
                if ($disable["email"] == $email) {
                    setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Your account already disabled, To reactive account <a href='contact'>contact with us</a></p>", time() + 1, "/");
                    header("location: ../View/login");
                    $isValid = true;
                    die();
                }
            }
        }
        if (!$isValid) {
            setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Phone Number or Password incorrect.</p>", time() + 1, "/");
            header("location: ../View/login");
        }
    } else {
        setcookie("reg", "<p class='alert alert-danger' role='alert' style='color: red; font-weight: bold; padding: 10px; background-color: khaki; border: 1px solid brown; border-radius: 5px; font-size: 16px'><i class='fas fa-exclamation-circle'></i> Input all field(s).</p>", time() + 1, "/");
        header("location: ../View/login");
    }
}
