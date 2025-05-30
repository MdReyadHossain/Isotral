<?php
function generateUserUrl($id)
{
    $encodedId = base64_encode($id);
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST']; // includes port if non-default

    $origin = $scheme . "://" . $host;
    return $origin . "/Views/public/digital-card.php?query=$encodedId";
}


?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">..</h6>
            <h1 class="mb-5">Our Board Members</h1>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($superAdmins as $admin): ?>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo $admin['image_url']; ?>" alt="Profile Image">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <!-- <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo $admin['facebook_url']; ?>"><i class="fab fa-facebook-f"></i></a> -->
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo $admin['linkedin_url']; ?>"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="mailto:<?php echo $admin['email']; ?>">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo generateUserUrl($admin['id']); ?>">
                                    <i class="fa-solid fa-id-card"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $admin['name']; ?></h5>
                            <small><?php echo $admin['title']; ?></small><br>
                            <small><?php echo $admin['profession']; ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach ($admins as $admin): ?>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo $admin['image_url']; ?>" alt="Profile Image">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <!-- <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo $admin['facebook_url']; ?>"><i class="fab fa-facebook-f"></i></a> -->
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo $admin['linkedin_url']; ?>"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="mailto:<?php echo $admin['email']; ?>">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo generateUserUrl($admin['id']); ?>">
                                    <i class="fa-solid fa-id-card"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $admin['name']; ?></h5>
                            <small><?php echo $admin['title']; ?></small><br>
                            <small><?php echo $admin['profession']; ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>