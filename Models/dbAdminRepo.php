<?php
require "../../Models/dbConnect.php";

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: ../views/login");
}

$db = connect();
$isotral = $db->query("SELECT * FROM admin WHERE name = 'isotral'")->fetch_assoc();

// $allPatients = $db->query("SELECT * FROM patients ORDER BY id DESC");
// $patients = $db->query("SELECT * FROM patients WHERE status = true");
// $services = $db->query("SELECT * FROM services ORDER BY id DESC");
// $medicines = $db->query("SELECT * FROM medicines ORDER BY id DESC");
// $patientsMsg = $db->query("SELECT patients.*, messages.* FROM messages INNER JOIN patients ON messages.patient_id = patients.id WHERE messages.status = true ORDER BY messages.id DESC");
// $anonymousMsg = $db->query("SELECT * FROM anonymous WHERE status = true ORDER BY id DESC");

// $malePatients = $db->query("SELECT * FROM patients WHERE gender = 'Male'");
// $femalePatients = $db->query("SELECT * FROM patients WHERE gender = 'Female'");
// $appointmentReq = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'patient' AND appointments.status = 'pending' ORDER BY appointments.id DESC");
// $appointmentLog = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'doctor' ORDER BY appointments.appointment_at DESC, appointments.id DESC");
// $prescriptionLog = $db->query("SELECT patients.*, appointments.* FROM appointments INNER JOIN patients ON appointments.patient_id = patients.id WHERE appointments.user = 'doctor' ORDER BY appointments.appointment_at DESC, appointments.id DESC");

// $images = $db->query("SELECT * FROM images");
