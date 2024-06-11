<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- =============== REMIXICONS =============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <!-- =============== MAIN CSS =============== -->
    <link rel="stylesheet" href="/Pages/main.css">
    <link rel="stylesheet" href="/Depository/UniResidence-Navigation-Bar/navigationBar.css">
    <!-- =============== EDIT: YOUR OWN LOCAL CSS =============== -->
    <link rel="stylesheet" href="/Pages/LogIn_SignUp_Page/logIn_signUp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4R0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- =============== TAB ICON =============== -->
    <link rel="shortcut icon" type="image/png" href="/Assets/UniResidenceLogoIcon-coloured.png">
    <title>LogIn/SignUp</title>
</head>
<body>

<!-- ==================== CONTENT OF BODY ==================== -->
<main>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-4 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: rgba(0, 136, 169, 0.8)">
                <div class="featured-image mb-3 rounded-4">
                    <img src="/Assets/dorm.jpg" class="img-fluid rounded-4" style="width: 350px;">
                </div>
                <h4 class="text-white fs-2">Be Verified</h4>
                <p class="text-white text-wrap text-center">Let's join to explore interesting dorms on this platform.</p>
            </div>

            <div class="col-md-6 right-box">


                <!-- Sign Up Form -->
                <div id="signup-form" class="form-container">
                    <form action="signUp_form.php" method="post">
                        <div class="row align-items-center justify-content-center">
                            <div class="header-text mb-4 text-center">
                                <h2>Welcome!</h2>
                                <p>Create your account to get started.</p>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="cpassword" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6 custom-btn">Sign Up</button>
                        </div>

                        <div class="input-group mb-3">
                            <small>Already have an account? <a href="logIn.php" onclick="toggleForm()">Log In</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- =============== EDIT: YOUR OWN LOCAL JS =============== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="/Pages/LogIn_SignUp_Page/logIn_signUp.js"></script>

<!-- =============== MAIN JS =============== -->
<script src="/Depository/UniResidence-Navigation-Bar/navigationBar.js"></script>

</body>
</html>

