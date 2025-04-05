<?php
require "../../Models/dbConnect.php";

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../login");
}

$db = connect();
$isotral = $db->query("SELECT * FROM admin WHERE name = 'isotral'")->fetch_assoc();
$totalVaultAmount = $db->query("SELECT SUM(amount) AS total_amount FROM vault")->fetch_assoc();
$totalInvestments = $db->query("SELECT SUM(amount) AS total_amount FROM invest")->fetch_assoc();

$allBoardMembers = $db->query("SELECT * FROM user WHERE type != 'MEMBER' AND status = 'ACTIVE' ORDER BY id DESC");
$allMembers = $db->query("SELECT * FROM user WHERE status = 'ACTIVE' ORDER BY id DESC");
$allTransactions = $db->query("SELECT vault.*, user.*, vault.status as trans_status, vault.created_at AS trans_time FROM vault INNER JOIN user ON vault.user_id = user.id ORDER BY vault.id DESC");
$allInvestments = $db->query("SELECT * FROM invest ORDER BY id DESC");
// $services = $db->query("SELECT * FROM services ORDER BY id DESC");
// $medicines = $db->query("SELECT * FROM medicines ORDER BY id DESC");
// $patientsMsg = $db->query("SELECT patients.*, messages.* FROM messages INNER JOIN patients ON messages.patient_id = patients.id WHERE messages.status = true ORDER BY messages.id DESC");
// $anonymousMsg = $db->query("SELECT * FROM anonymous WHERE status = true ORDER BY id DESC");

// $malePatients = $db->query("SELECT * FROM patients WHERE gender = 'Male'");
// $femalePatients = $db->query("SELECT * FROM patients WHERE gender = 'Female'");
// $appointmentLog = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'doctor' ORDER BY appointments.appointment_at DESC, appointments.id DESC");
// $prescriptionLog = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'doctor' ORDER BY appointments.appointment_at DESC, appointments.id DESC");

// $images = $db->query("SELECT * FROM images");
