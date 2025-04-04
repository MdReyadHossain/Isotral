<?php include("../components/admin/header.php"); ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include("../components/admin/navbar.php"); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4 px-4">
        <hr class="my-0">
        <?php
        if (isset($_COOKIE["updateError"]))
            echo $_COOKIE["updateError"];
        if (isset($_COOKIE["updateSuccess"]))
            echo $_COOKIE["updateSuccess"];
        ?>
        <div class="row my-4">
            <div class="col-md-8">
                <form action="../../Controllers/admin/updateProfileController" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0"><b>Edit Profile</b></p>
                                <button class="btn btn-primary btn-sm ms-auto" type="submit">Update</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Name *</label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $_SESSION["name"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address *</label>
                                        <input class="form-control" type="email" name="email" value="<?php echo $_SESSION["email"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Phone Number *</label>
                                        <input class="form-control" type="text" name="phone" value="<?php echo $_SESSION["phone"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Website</label>
                                        <input class="form-control" type="text" placeholder="https://www.yourwebsite.com" name="website" value="<?php echo $_SESSION["website"] ?>" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address *</label>
                                        <textarea class="form-control" name="address" required><?php echo $_SESSION["address"] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Social Media Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Linkedin *</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="https://www.linkedin.com/in/your-profile"
                                            name="linkedin_url"
                                            value="<?php echo $_SESSION["linkedin_url"] ?>"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Facebook</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="https://www.facebook.com/your-profile"
                                            name="facebook_url"
                                            value="<?php echo $_SESSION["facebook_url"] ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Instagram</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="https://www.instagram.com/your-profile"
                                            name="instagram_url"
                                            value="<?php echo $_SESSION["instagram_url"] ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Twitter</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="https://www.twitter.com/your-profile"
                                            name="twitter_url"
                                            value="<?php echo $_SESSION["twitter_url"] ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-profile mt-6">
                    <!-- <img src="../../asset/img/isotral-cover.jpg" alt="Image placeholder" class="card-img-top"> -->
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <label class="label custom-file-upload profile-image" data-toggle="tooltip" title="Change your avatar">
                                    <input type="file" class="d-none" id="imageInput" name="image_url" accept="image/*">
                                    <img src="<?php echo $_SESSION["image_url"] ?>" class="rounded-circle img-fluid border border-2 border-white" alt="<?php echo $_SESSION["name"] ?>">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="text-center mt-4">
                            <div class="mt-4">
                                <?php echo memberID($_SESSION) ?>
                            </div>
                            <h5 class="mb-0">
                                <?php echo $_SESSION["name"] ?>
                            </h5>
                            <div>
                                <i class="ni education_hat"></i> <?php echo $_SESSION["title"] ?>
                            </div>
                        </div>
                        <div class="m-4">
                            <div class="h6 font-weight-300">
                                <a href="mailto:<?php echo $_SESSION["email"] ?>" target="_blank">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="text-white bg-primary icon-circle">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <?php echo $_SESSION["email"] ?>
                                    </div>
                                </a>
                            </div>
                            <div class="h6">
                                <a href="tel:<?php echo $_SESSION["phone"] ?>" target="_blank">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="text-white bg-primary icon-circle">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <?php echo $_SESSION["phone"] ?>
                                    </div>
                                </a>
                            </div>
                            <div class="h6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-white bg-primary icon-circle">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <?php echo $_SESSION["address"] ?>
                                </div>
                            </div>
                            <?php if (!empty($_SESSION["website"])): ?>
                                <div class="h6">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="text-white bg-primary icon-circle">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                        <?php echo $_SESSION["website"] ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="mt-4 text-center">
                                <div class="mb-2"> Contact With Me </div>
                                <div class="d-flex w-100 justify-content-center gap-2">
                                    <?php if (!empty($_SESSION["facebook_url"])): ?>
                                        <a href="<?php echo $_SESSION["facebook_url"] ?>" target="_blank">
                                            <div class="icon-circle" style="background-color: #2d85f7;">
                                                <i class="fab fa-facebook-f text-white"></i>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($_SESSION["instagram_url"])): ?>
                                        <a href="<?php echo $_SESSION["instagram_url"] ?>" target="_blank">
                                            <div class="icon-circle" style="background-color: #dd2a7b;">
                                                <i class="fab fa-instagram text-white"></i>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($_SESSION["twitter_url"])): ?>
                                        <a href="<?php echo $_SESSION["twitter_url"] ?>" target="_blank">
                                            <div class="icon-circle" style="background-color: #000000;">
                                                <i class="fa-brands fa-x-twitter text-white"></i>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?php echo $_SESSION["linkedin_url"] ?>" target="_blank">
                                        <div class="icon-circle" style="background-color: #0077B5;">
                                            <i class="fab fa-linkedin-in text-white"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("../components/imageCropper.php"); ?>
        <!-- Footer -->
        <?php include("../components/admin/footer.php"); ?>
    </div>
</main>
<?php include("../components/admin/footerMeta.php"); ?>