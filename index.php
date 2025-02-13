<?php
require "./Models/dbConnect.php";
$db = connect();
$isotral = $db->query("SELECT * FROM admin WHERE name = 'isotral'")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Isotral</title>
    <link href="./asset/logo/Isotral-favicon.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <div class="d-flex flex-row align-items-center">
                <img src="./asset/logo/Isotral-logo.png" alt="Isotral" width="100">
            </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="" id="home" class="nav-item nav-link active">Home</a>
                <a href="./views/about" id="about" class="nav-item nav-link">About</a>
                <a href="./views/gallery" id="blogs" class="nav-item nav-link">Blogs</a>
                <!-- <a href="./views/testimonial" id="testimonial" class="nav-item nav-link">Testimonial</a> -->
                <a href="./views/contact" id="contact" class="nav-item nav-link">Contact</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="404" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
            </div>
            <a href="./views/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./asset/img/wall-0.jpg" alt="" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Explore the Creativity</h1>
                                <p class="fs-5 text-white mb-4 pb-2">We are here for ensuring the motives to learn something new share knowledge among the curious world decorate your own dimension</p>
                                <a href="#service" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="./views/login" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./asset/img/wall-1.jpg" alt="" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Dive into creativity and let your imagination soar</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Life is beautiful and it becomes more beautiful when you will create something new which opens the door of more and more new possibilities.
                                </p>
                                <a href="#service" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="./views/login" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service -->
    <div id="service" class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Empowerment</h5>
                            <p>Our aim is to make people skilled which they badly need to survive in the society and the whole world</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Green World</h5>
                            <p>Nature is always evergreen. Only creativity make your mind evergreen. So grow creativity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Safe Home</h5>
                            <p>Try to solve your daily problems with your creativity and save your world</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Education</h5>
                            <p>There is no age for receiving education. So learn and apply in your life</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="./asset/logo/Isotral-logo2.png" alt="" style="object-fit: contain;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to Isotral</h1>
                    <p class="mb-4">Our world faces countless challenges every moment. While it's impossible to eliminate every problem entirely, we believe it's possible to solve those that impact our lives the most, making life better and more comfortable. Isotral, along with its branch platforms, is dedicated to addressing these issues. In the future, we aim to expand our platforms to further enhance your quality of life. Our mission is simple, to give you a better life</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Safety and Security</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Green World</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skill</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Public rights and protection</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Education</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="./views/about">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blogs -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h1 class="mb-5">Blogs Gallery</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./asset/img/gallery/gallery-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Public Safety</h5>
                                    <!-- <small class="text-primary">09 blogs</small> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./asset/img/gallery/gallery-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Human Rights</h5>
                                    <!-- <small class="text-primary">11 blogs</small> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./asset/img/gallery/gallery-3.png" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Climate Control</h5>
                                    <!-- <small class="text-primary">04 blogs</small> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="./asset/img/gallery/gallery-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Education</h5>
                            <!-- <small class="text-primary">35 blogs</small> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Team -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Members</h6>
                <h1 class="mb-5">Our Innovators</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./asset/img/members/profile-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/najmus.sakib.522"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/in/najmus-sakib-66050a215/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="mailTo:najmusnishad20202@gmail.com">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <!-- <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fas fa-globe"></i></a> -->
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Najmus Sakib</h5>
                            <small>Textile Engineer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./asset/img/members/profile-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/mdreyadhossain.rh">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/in/mdreyadhossain/">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="mailTo:reyadhossain@gmail.com">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <!-- <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fas fa-globe"></i></a> -->
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Reyad Hossain</h5>
                            <small>Software Engineer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Brand</h6>
                <h1 class="mb-5">Our Innovation</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <a href="./views/about#blue-dot">
                    <div title="Blue Dot" class="testimonial-item text-center">
                        <img class="p-2 mx-auto mb-3" src="./asset/logo/blueDot-logo2.png" style="width: 250px" />
                    </div>
                </a>
                <a href="./views/about#isotral-truth-network">
                    <div title="Isotral Truth Network" class="testimonial-item text-center">
                        <img class="p-2 mx-auto mb-3" src="./asset/logo/Isotral_truth_network-logo.png" style="width: 250px" />
                    </div>
                </a>
                <a href="./">
                    <div title="Isotral" class="testimonial-item text-center">
                        <img class="p-2 mx-auto mb-3" src="./asset/logo/Isotral-logo2.png" style="width: 250px" />
                    </div>
                </a>
                <!-- <a href="./views/about#innovators-gallery">
                    <div title="Innovators Gallery" class="testimonial-item text-center">
                        <img class="p-2 mx-auto mb-3" src="./asset/logo/igLogo.png" style="width: 250px" />
                    </div>
                </a> -->
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="./views/about">About Us</a>
                    <a class="btn btn-link" href="./views/contact">Contact Us</a>
                    <a class="btn btn-link" href="./views/gallery">Our Gallery</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2">
                        <a href="<?php echo $isotral['address_url'] ?>" target="_blank" class="link-to">
                            <i class="fa fa-map-marker-alt me-3"></i><?php echo $isotral['address'] ?>
                        </a>
                    </p>
                    <p class="mb-2">
                        <a href="tel:<?php echo $isotral['phone_first'] ?>" class="link-to">
                            <i class="fa fa-phone-alt me-3"></i> <?php echo $isotral['phone_first'] ?>
                        </a>
                    </p>
                    <p class="mb-2">
                        <a href="tel:<?php echo $isotral['phone_second'] ?>" class="link-to">
                            <i class="fa fa-phone-alt me-3"></i> <?php echo $isotral['phone_second'] ?>
                        </a>
                    </p>
                    <p class="mb-2">
                        <a href="mailto:<?php echo $isotral['email'] ?>" class="link-to">
                            <i class="fa fa-envelope me-3"></i><?php echo $isotral['email'] ?>
                        </a>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="<?php echo $isotral['twitter_url'] ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php echo $isotral['facebook_url'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php echo $isotral['youtube_url'] ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php echo $isotral['linkedin_url'] ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="./asset/img/gallery/gallery-1.jpg" alt="gallery-1">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="./asset/img/gallery/gallery-2.jpg" alt="gallery-2">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="./asset/img/gallery/gallery-3.png" alt="gallery-3">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="./asset/img/gallery/gallery-4.jpg" alt="gallery-4">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="./asset/img/gallery/gallery-5.jpg" alt="gallery-5">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Get all updates and news from us</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="">Isotral</a>, All Right Reserved.


                        Designed By <a class="border-bottom" target="_blank" href="https://its-reyad.netlify.app/">BeetCoder</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">&copy; Copyright 2024</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>