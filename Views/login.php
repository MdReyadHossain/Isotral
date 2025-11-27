<?php
session_start();
if (isset($_SESSION["super_admin"]))
    header("Location: super-admin-panel/dashboard");

else if (isset($_SESSION["admin"]))
    header("Location: admin-panel/dashboard");

else if (isset($_SESSION["member"]))
    header("Location: member-panel/dashboard");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Isotral</title>
    <link href="../asset/logo/Isotral-favicon.png" rel="icon">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="../css/loginStyle.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="navbar">
        <a href="../" class="logo">
            <img src="../asset/logo/Isotral-logo.png" alt="isotral" width="80">
        </a>
    </div>
    <div class="container" style="width: 100vw; display: flex; justify-content: center; margin: 10px 0;">
        <?php if (isset($_COOKIE["reg"])) {
            echo $_COOKIE["reg"];
        } ?>
    </div>
    <div class="cont">
        <form class="form sign-in" action="../Controllers/loginController.php" method="POST">
            <h2>Login to portal</h2>
            <label>
                <span>Email</span>
                <input type="email" name="email" required />
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" required />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit">Login</button>
        </form>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--in">
                    <h2>Welcome</h2>
                    <p>Give us some details and join with us!</p>
                </div>
                <div class="img__text m--up">
                    <h2>One of us?</h2>
                    <p>If you already our member, just Login. We've missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Join</span>
                    <span class="m--in">Login</span>
                </div>
            </div>
            <form class="form sign-up" action="../Controllers/user/join.controller.php" method="POST">
                <h2>Join with us</h2>
                <label>
                    <span>Name *</span>
                    <input type="text" autocomplete="off" name="name" required />
                </label>
                <label>
                    <span>Phone Number</span>
                    <input type="text" autocomplete="off" name="phone" />
                </label>
                <label>
                    <span>Email *</span>
                    <input type="email" autocomplete="off" name="email" required />
                </label>
                <label>
                    <span>New Password *</span>
                    <input type="password" autocomplete="off" name="password" required />
                </label>
                <button type="submit" class="submit">Join</button>
            </form>
        </div>
    </div>


    <script src="../js/loginScript.js"></script>

</body>

</html>