<?php
require "dbConnect.php";

function searchMember($key)
{
    $db = connect();

    $sql = "SELECT * FROM user WHERE status = 'ACTIVE' AND (id LIKE ? OR name LIKE ?) ORDER BY id DESC";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("ss", $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}


function searchTransaction($key)
{
    $db = connect();

    $sql = "SELECT * FROM vault WHERE trans_id LIKE ? OR source LIKE ? ORDER BY id DESC";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("ss", $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}


function searchInvestment($key)
{
    $db = connect();

    $sql = "SELECT * FROM invest WHERE title LIKE ? ORDER BY id DESC";
    $stmt = $db->prepare($sql);
    $search = $key;
    $search = "%" . $search . "%";
    $stmt->bind_param("s", $search);

    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $db->close();

    return $result;
}

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

function changePassword($id, $newPass)
{
    $db = connect();
    $currentDateTime = date('Y-m-d H:i:s');
    try {
        $updateAdminSql = "UPDATE user SET password = '$newPass', updated_at = '$currentDateTime' WHERE id = '$id'";
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

function addMoney($id, $source, $transaction_id, $amount)
{
    $db = connect();
    $isotral = $db->query("SELECT * FROM admin WHERE name = 'isotral'")->fetch_assoc();
    $destination = $isotral["vault_source"];
    try {
        $addMoneySql = "INSERT INTO vault (user_id, source, trans_id, vault_source, amount, status) VALUES ('$id', '$source', '$transaction_id', '$destination', '$amount', 0)";
        $db->query($addMoneySql);
    } catch (Exception $error) {
        echo "Error $error : " . $db->error;
    } finally {
        $db->close();
    }
}
