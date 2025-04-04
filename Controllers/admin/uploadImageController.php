<?php
require "../../Models/dbAdmin.php";
require "../../Controllers/cloudinaryImageController.php";
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../../Views/login");
    die();
}
$db = connect();

$isValid = true;
$id = $_SESSION["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['image_url'])) {
        $result = cloudinaryImageService($_FILES['image_url']);

        if (isset($result['secure_url'])) {
            updateAdminImage($id, $result['secure_url']);
            $_SESSION["image_url"] = $result['secure_url'];
        } else {
            echo "Image upload failed";
        }
    }
}
