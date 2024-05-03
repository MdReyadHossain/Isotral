<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Innovator's Gallery</title>
    <link href="./asset/logo/igLogo.png" rel="icon">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="../css/loginStyle.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="navbar">
        <a href="../" class="logo">
            <img src="../asset/logo/igLogo.png" alt="innovators gallery" height="50" width="50">
            <div class="navbar-text">
                <h4 class="navbar-main-text">Innovator's Gallery</h4>
                <h6 class="navbar-sub-text">Explore the creativity</h6>
            </div>
        </a>
    </div>
    <div class="cont">
        <div class="form sign-in">
            <h2>Join with us</h2>
            <label>
                <span>Name</span>
                <input type="text" />
            </label>
            <label>
                <span>Age</span>
                <input type="number" />
            </label>
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
            <label>
                <span>Phone Number</span>
                <input type="number" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="button" class="submit">Join</button>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>Welcome</h2>
                    <p>Give us some details and join with us!</p>
                </div>
                <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>If you already our member, just Login. We've missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Login</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Login to portal</h2>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                <button type="button" class="submit">Login</button>
            </div>
        </div>
    </div>


    <script src="../js/loginScript.js"></script>

</body>

</html>