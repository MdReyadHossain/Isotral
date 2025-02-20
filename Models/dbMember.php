<?php
require "dbConnect.php";

function memberRegistration($name, $email, $phone, $password)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    try {
        $disableUserSql = "SELECT * FROM user WHERE status = false AND (email = '$email' OR phone = '$phone')";
        $disableUser = $db->query($disableUserSql)->fetch_assoc();
        if ($disableUser["id"] != "") {
            $activeUserSql = "UPDATE user SET status = 'ACTIVE', name = '$name', password = '$password', email = '$email', phone = '$phone', updated_at = '$currentDateTime'";
            $db->query($activeUserSql);
        } else {
            $newUserSql = "INSERT INTO user(name, email, phone, type, password, status, created_at, updated_at) VALUES ('$name', '$email', '$phone', 'MEMBER', '$password', 'PENDING', '$currentDateTime', '$currentDateTime')";
            $db->query($newUserSql);
        }
    } catch (Exception $error) {
        echo "Error $error : " . $db->error;
    } finally {
        $db->close();
    }
}
