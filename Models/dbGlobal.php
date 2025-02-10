<?php
require "dbConnect.php";

function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

function getUserLocation()
{
    $url = "http://ip-api.com/json";
    $deviceInfo = @file_get_contents($url);
    return json_decode($deviceInfo, true);
}

function login($userId)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    $deviceInfo = getUserLocation();
    $ip = $deviceInfo['query'];
    $location = isset($deviceInfo['regionName']) ? $deviceInfo['regionName'] . ', ' . $deviceInfo['country'] : 'Unknown';
    $sql = "INSERT INTO login(user_id, ip, location, created_at, updated_at) VALUES ('$userId', '$ip', '$location', '$currentDateTime', '$currentDateTime')";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
    return;
}

function anonymousInsert($name, $email, $phone, $message)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    $sql = "INSERT INTO anonymous(name, email, phone, message, created_at, updated_at) VALUES ('$name', '$email', '$phone', '$message', '$currentDateTime', '$currentDateTime')";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
    return;
}

function anonymousEmail($email)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    $sql = "INSERT INTO anonymous(email, created_at, updated_at) VALUES ('$email', '$currentDateTime', '$currentDateTime')";
    try {
        $db->query($sql);
    } catch (Exception $error) {
        echo "Error " . $sql . "<br>" . $db->error;
    } finally {
        $db->close();
    }
    return;
}
