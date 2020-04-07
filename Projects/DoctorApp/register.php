<?php
include_once("php_action/database.php");
?>

<?php

$success = array();
$errors = array();

if ($_POST) {
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        $createdAt = date('Y-m-d');
        if (empty($name) || empty($mobile)  || empty($email) || empty($password) || empty($cpassword)) {
            if ($name == "" || $mobile = "" || $email = "" || $password = "" || $cpassword = "") {
                $errors[] = "Any field cannot be empty!. ";
            }
        } else {

            if ($password != $cpassword) {
                $errors[] = "New Password doesn't match with confirm password!";
            } else {
                $sql = "insert into registration(name,mobile,email,createdAt,password) values('$name','$mobile','$email','$createdAt','$password')";

                $query = mysqli_query($con, $sql);
                if ($query) {
                    $success[] = " You have sucessfully registered";
                    header("refresh:1;url=login.php");
                } else if (!$query) {
                    $errors[] = " Failed to register ";
                }
            }
        }
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/argon.min5438.css?v=1.2.0" type="text/css">

</head>

<body class="bg-default">


    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">

                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a href="doctor/login.php" class="nav-link">
                            <span class="nav-link-inner--text">Doctor Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-link-inner--text">Lock</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-6 pt-lg-4">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Create an account</h1>
                            <p class="text-lead text-white">Use your login credential to login into you account.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-4">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">
                        <div class="card-header bg-transparent pb-5">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <small> Sign up with credentials</small>
                                </div>
                                <form class="needs-validation" novalidate role="form" method="post"
                                    action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                    <div class="msg" style="width: 100%">
                                        <?php
                                        if ($success) {
                                            foreach ($success as $key => $value) {
                                                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $value . '</div>';
                                            }
                                        } else if ($errors) {
                                            foreach ($errors as $key => $value) {
                                                echo '<div class="alert alert-warning alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button>' . $value . '</div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control address" name="name" id="name" placeholder="Name"
                                                type="text" required>
                                            <div class="invalid-feedback">
                                                <center> Please enter a name. </center>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-mobile-button"></i></span>
                                            </div>
                                            <input class="form-control" name="mobile" pattern="[1-9]{1}[0-9]{9}"
                                                title="Please Enter valid mobile number" required autocomplete="off"
                                                maxlength="10" onkeypress="return isNumber(event)"
                                                placeholder="Mobile Number" type="text" required />
                                            <div class="invalid-feedback">
                                                <center> Please enter valid mobile number </center>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" name="email" placeholder="Email" type="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                            <div class="invalid-feedback">
                                                <center> Please enter valid email address </center>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" name="password" placeholder="Password"
                                                id="password" type="password" required>
                                            <div class="invalid-feedback" id="messages">
                                                <center> Please enter password </center>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" name="cpassword" onkeyup="check();"
                                                id="cpassword" required placeholder="Confirm Password" type="password">
                                            <div class="invalid-feedback">
                                                <center> Please enter confirm password </center>

                                            </div>
                                        </div>
                                        <center> <span id="message"></span> </center>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-primary mt-4">Create
                                            account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <center>
                                <span class="text-light"> Already have an account? </span>
                                <a href="login.php" class="text-white"> &nbsp;<medium>Log in</medium></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <script src="assets/js/argon.min5438.js?v=1.2.0"></script>
        <script src="assets/js/demo.min.js"></script>

        <script>
        $('.text,.address').keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);

            $('#password,#cpassword').on('keyup', function() {

                if ($('#password').val() != "" && $('#cpassword').val() != "") {
                    $('#message').html('New password  matched with Confirm password').css('color', 'green');

                    if ($('#password').val() == $('#cpassword').val()) {
                        $('#message').html('New password  matched with Confirm password').css('color',
                            'green');
                    } else {
                        $('#message').html('New password does not match with Confirm password').css({
                            'color': 'red',
                            'font-size': '12px'
                        });
                    }
                }
            });
        })();
        </script>
</body>

</html>