<?php
require "../../Models/dbConnect.php";
$db = connect();
$query = $_GET['query'] ?? null;

if ($query) {
    $decodedQuery = base64_decode($query);
    $number = intval($decodedQuery);
    $user = $db->query("SELECT * FROM user WHERE id = $number")->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo $user["image_url"] ?>">
    <title>
        <?php echo $user["name"] ?> - <?php echo $user["profession"] ?>
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
    <style>
        body {
            background-color: rgb(228, 228, 228);
        }

        .profile-image {
            z-index: 20;
        }


        .share-info {
            position: absolute;
            display: inline-block;
            top: 90%;
            bottom: 0;
            left: 85%;
            right: 0;
            color: rgb(68, 158, 255);
            font-size: 200%;
        }

        .share-info:focus {
            color: rgb(68, 158, 255);
        }

        #snackbar {
            visibility: hidden;
            /* Hidden by default */
            min-width: 250px;
            max-width: 80%;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            padding: 16px 24px;
            position: fixed;
            top: 20px;
            /* ✅ Top of screen */
            left: 50%;
            /* ✅ Center horizontally */
            transform: translateX(-50%);
            /* Only move in X axis */
            z-index: 9999;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Show the snackbar */
        #snackbar.show {
            visibility: visible;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations */
        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeout {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Digital Card Start -->
    <?php if ($query && !empty($user)): ?>
        <div class="d-flex justify-content-center">
            <div class="col-md-4">
                <div class="cover-img card card-profile">
                    <img src="../../asset/img/isotral-cover.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="profile-image row justify-content-center">
                        <!-- <div class="share-info" onclick="copyToClipboard()">
                            <div class="p-2">
                                <i class="fa-solid fa-square-share-nodes"></i>
                            </div>
                        </div> -->
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <label class="label">
                                    <img src="<?php echo $user["image_url"] ?>" class="rounded-circle img-fluid border border-2 border-white" alt="<?php echo $user["name"] ?>">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="text-center mt-4">
                            <div class="mt-4">
                                <?php echo $user["profession"] ?>
                            </div>
                            <h5 class="mb-0">
                                <?php echo $user["name"] ?>
                            </h5>
                            <div>
                                <i class="ni education_hat"></i> <?php echo $user["title"] ?>
                            </div>
                        </div>
                        <div class="m-4">
                            <div class="h6 font-weight-300">
                                <a href="mailto:<?php echo $user["email"] ?>" target="_blank">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="text-white bg-primary icon-circle">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <?php echo $user["email"] ?>
                                    </div>
                                </a>
                            </div>
                            <div class="h6">
                                <a href="tel:<?php echo $user["phone"] ?>" target="_blank">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="text-white bg-primary icon-circle">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <?php echo $user["phone"] ?>
                                    </div>
                                </a>
                            </div>
                            <div class="h6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-white bg-primary icon-circle">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <?php echo $user["address"] ?>
                                </div>
                            </div>
                            <?php if (!empty($user["website"])): ?>
                                <div class="h6">
                                    <a href="<?php echo $user["website"] ?>" target="_blank">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="text-white bg-primary icon-circle">
                                                <i class="fas fa-globe"></i>
                                            </div>
                                            <?php echo $user["website"] ?>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <div class="mt-4 text-center">
                                    <div class="mb-2">Contact With Me </div>
                                    <div class="d-flex w-100 justify-content-center gap-2">
                                        <?php if (!empty($user["facebook_url"])): ?>
                                            <a href="<?php echo $user["facebook_url"] ?>" target="_blank">
                                                <div class="icon-circle" style="background-color: #2d85f7;">
                                                    <i class="fab fa-facebook-f text-white"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($user["instagram_url"])): ?>
                                            <a href="<?php echo $user["instagram_url"] ?>" target="_blank">
                                                <div class="icon-circle" style="background-color: #dd2a7b;">
                                                    <i class="fab fa-instagram text-white"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($user["twitter_url"])): ?>
                                            <a href="<?php echo $user["twitter_url"] ?>" target="_blank">
                                                <div class="icon-circle" style="background-color: #000000;">
                                                    <i class="fa-brands fa-x-twitter text-white"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?php echo $user["linkedin_url"] ?>" target="_blank">
                                            <div class="icon-circle" style="background-color: #0077B5;">
                                                <i class="fab fa-linkedin-in text-white"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="mb-2 text-sm text-lighter">Powered By <a href="../../">Isotral</a></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="d-flex justify-content-center">
            <div class="col-md-4">
                <div class="alert alert-warning" role="alert">
                    User not found or query is missing.
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- Digital Card End -->

    <!--   Core JS Files   -->
    <script>
        document.querySelector('.share-info').addEventListener('touchstart', copyToClipboard);

        function showSnackbar(message) {
            var snackbar = document.getElementById("snackbar");
            snackbar.innerText = message; // Set custom message
            snackbar.className = "show";

            setTimeout(function() {
                snackbar.className = snackbar.className.replace("show", "");
            }, 3000); // Hide after 3 seconds
        }

        function copyToClipboard() {
            navigator.share({
                    title: document.title,
                    text: 'Check out this page!',
                    url: window.location.href
                }).then(() => {
                    console.log('Thanks for sharing!');
                })
                .catch((error) => {
                    console.error('Error sharing:', error);
                });
        }
    </script>
    <script src="../../panel-asset/js/core/popper.min.js"></script>
    <script src="../../panel-asset/js/core/bootstrap.min.js"></script>
    <script src="../../panel-asset/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../panel-asset/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../panel-asset/js/plugins/chartjs.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../panel-asset/js/argon-dashboard.min.js?v=2.0.4"></script>

    <script src='https://unpkg.com/jquery@3/dist/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://fengyuanchen.github.io/cropperjs/js/cropper.js'></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

</body>

</html>