<?php
require "../Models/dbConnect.php";
$db = connect();
$isotral = $db->query("SELECT * FROM admin WHERE name = 'isotral'")->fetch_assoc();
$admins = $db->query("SELECT * FROM user WHERE type = 'ADMIN' ORDER BY priority");
$superAdmins = $db->query("SELECT * FROM user WHERE type = 'SUPER_ADMIN' ORDER BY priority");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Isotral</title>
    <link href="../asset/logo/Isotral-favicon.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="isotral, blue dot, isotral truth network" name="keywords">
    <meta content="Our world faces countless challenges every moment. While it's impossible to eliminate every problem entirely, we believe it's possible to solve those that impact our lives the most, making life better and more comfortable. Isotral, along with its branch platforms, is dedicated to addressing these issues. In the future, we aim to expand our platforms to further enhance your quality of life. Our mission is simple: to give you a better life" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="../" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <div class="d-flex flex-row align-items-center">
                <img src="../asset/logo/Isotral-logo.png" alt="Isotral" width="100">
            </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../" id="home" class="nav-item nav-link">Home</a>
                <a href="about" id="about" class="nav-item nav-link">About</a>
                <a href="gallery" id="blogs" class="nav-item nav-link">Blogs</a>
                <!-- <a href="testimonial" id="testimonial" class="nav-item nav-link">Testimonial</a> -->
                <a href="contact" id="contact" class="nav-item nav-link">Contact</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="404" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
            </div>
            <!-- <a href="./login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>

    <script>
        var parts = window.location.pathname.split("/");
        var lastPart = parts[parts.length - 1];
        document.getElementById(lastPart).classList.add("active");
    </script>
    <!-- Navbar End -->