<?php
require "../../Models/dbConnect.php";
session_start();
// if (!isset($_SESSION["patient"])) {
//     header("Location: ../login");
// }

$db = connect();
$isotral = $db->query("SELECT * FROM admin WHERE name = 'isotral'")->fetch_assoc();

// $allPatients = $db->query("SELECT * FROM patients");
// $patient = $db->query("SELECT * FROM patients WHERE status = true AND id = " . $_SESSION['id'] . "")->fetch_assoc();
// $patientsMsg = $db->query("SELECT patients.*, messages.* FROM messages INNER JOIN patients ON messages.patient_id = patients.id WHERE messages.status = true");

// $anonymousMsg = $db->query("SELECT * FROM anonymous WHERE status = true");

// $appointment = $db->query("SELECT * FROM appointments WHERE patient_id = " . $_SESSION['id'] . " ORDER BY appointment_at DESC");

// $appointmentPending = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'patient'")->fetch_assoc();

// $appointmentConfirm = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.patient_id = " . $_SESSION['id'] . " AND appointments.status = 'pending' AND appointments.user = 'doctor'")->fetch_assoc();

// $appointmentLog = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'doctor' ORDER BY appointments.status DESC");

// $treatment = $db->query("SELECT treatments.*, patients.*, treatments.id treatment_id from treatments INNER JOIN patients ON treatments.patient_id = patients.id WHERE patient_id = '" . $_SESSION['id'] . "' ORDER BY date DESC, treatments.id DESC");
?>
