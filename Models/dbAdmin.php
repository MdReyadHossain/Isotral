<?php
require "dbConnect.php";

function updateAdminProfile($id, $name, $email, $phone, $address, $facebook_url, $linkedin_url, $instagram_url, $twitter_url, $website)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    try {
        $updateAdminSql = "UPDATE user SET name = '$name', email = '$email', phone = '$phone', address = '$address', facebook_url = '$facebook_url', linkedin_url = '$linkedin_url', instagram_url = '$instagram_url', twitter_url = '$twitter_url', website = '$website', updated_at = '$currentDateTime' WHERE id = '$id'";
        $db->query($updateAdminSql);
    } catch (Exception $error) {
        echo "Error $error : " . $db->error;
    } finally {
        $db->close();
    }
}

function updateAdminImage($id, $image_url)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    try {
        $updateAdminSql = "UPDATE user SET image_url = '$image_url', updated_at = '$currentDateTime' WHERE id = '$id'";
        $db->query($updateAdminSql);
    } catch (Exception $error) {
        echo "Error $error : " . $db->error;
    } finally {
        $db->close();
    }
}
