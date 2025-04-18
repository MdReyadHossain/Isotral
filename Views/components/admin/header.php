<?php
include("../../Models/dbAdminRepo.php");

function textShortener($text, $limit = 30)
{
    if (strlen($text) > $limit) {
        return substr($text, 0, 5) . '...' . substr($text, -5);
    }
    return $text;
}

function currencyFormat($amount)
{
    return "BDT " . number_format($amount, 2) . " /-";
}

function dateTimeFormat($dateTime)
{
    return date("d M Y, h:i A", strtotime($dateTime));
}

function memberID($data)
{

    $year = date("y", strtotime($data['created_at']));
    $id = str_pad($data['user_id'], 4, '0', STR_PAD_LEFT);
    return "ISO-" . $id . "-" . $year;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../../asset/logo/Isotral-favicon.png">
    <title>
        Admin Panel - Isotral
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../panel-asset/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../panel-asset/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../panel-asset/css/style.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../panel-asset/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">
</head>

<body class="g-sidenav-show bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start" id="sidenav-main">
        <?php include("../components/admin/sidebar.php"); ?>
    </aside>