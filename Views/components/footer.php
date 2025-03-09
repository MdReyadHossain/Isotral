    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="./about">About Us</a>
                    <a class="btn btn-link" href="./contact">Contact Us</a>
                    <a class="btn btn-link" href="./gallery">Our Gallery</a>
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
                            <img class="img-fluid bg-light p-1" src="../asset/img/gallery/gallery-1.jpg" alt="gallery-1">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../asset/img/gallery/gallery-2.jpg" alt="gallery-2">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../asset/img/gallery/gallery-3.png" alt="gallery-3">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../asset/img/gallery/gallery-4.jpg" alt="gallery-4">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="../asset/img/gallery/gallery-5.jpg" alt="gallery-5">
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
                        &copy; <a class="border-bottom" href="">Isotral</a>, All Right Reserved. Designed By <a class="border-bottom" target="_blank" href="https://its-reyad.netlify.app/">BeetCoder</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">&copy; Copyright <?php echo date("Y"); ?></a>
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    </body>

    </html>