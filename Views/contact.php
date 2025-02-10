<?php include('./components/header.php') ?>


<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5>Get In Touch</h5>
                <p class="mb-4">Whether you have questions, feedback, or collaboration ideas, we're here for you. Reach out through our contact form or directly via email or phone. Let us start a conversation and explore opportunities together. Your contribution matters to us, so don't hesitate to get in touch.</p>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Office</h5>
                        <a href="https://www.google.com/maps?ll=24.856083,89.388068&z=16&t=m&hl=en&gl=BD&mapclient=embed&q=24%C2%B051%2721.9%22N+89%C2%B023%2717.0%22E+24.856083,+89.388056@24.8560833,89.3880556" target="_blank" class="link-to mb-0">Nazma Mohol, Naruli, Bogura, Bangladesh</a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Mobile</h5>
                        <a href="tel:<?php echo $isotral['phone_first'] ?>" class="link-to mb-2">
                            <?php echo $isotral['phone_first'] ?>
                        </a>,
                        <a href="tel:<?php echo $isotral['phone_second'] ?>" class="link-to mb-2">
                            <?php echo $isotral['phone_second'] ?>
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Email</h5>
                        <a href="mailto:<?php echo $isotral['email'] ?>" class="link-to mb-0">
                            <?php echo $isotral['email'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="position-relative rounded w-100 h-100" src="<?php echo $isotral['embed_map_url'] ?>" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div id="get-in-touch" class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="../Controllers/anonymous/anonymous.controller.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Name...</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone...">
                                <label for="phone">Phone...</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email..." required>
                                <label for="email">Email...</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject..." required>
                                <label for="subject">Subject...</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px" required></textarea>
                                <label for="message">Write your message...</label>
                            </div>
                        </div>
                        <?php if (isset($_COOKIE["error"])) {
                            echo $_COOKIE["error"];
                        } ?>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php include('./components/footer.php') ?>