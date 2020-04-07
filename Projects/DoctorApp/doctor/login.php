<?php
include_once("php_action/database.php");

session_start();

if (isset($_SESSION['admin_id'])) {
    header('location:dashboard.php');
}

$errors = array();
$success = array();

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        if ($email == "" || $password == "") {
            $errors[] = "Any field cannot be empty!. ";
        }
    } else {
        $sql = "select * from admin_login where email = '$email' and password = '$password' ";
        $query = mysqli_query($con, $sql);
        $uid = "";
        $uname = "";
        $pass = "";
        while ($row = mysqli_fetch_array($query)) {
            $uid = $row['admin_id'];
            $uname = $row['email'];
            $pass = $row['password'];
        }
        if ($email == $uname && $password == $pass) {
            if (!$email == "" &&  !$password == "") {
                $_SESSION['admin_id'] = 'admin_id';
                $success[] = "You have entered into the system";
                header('location:dashboard.php');
            }
        } else {

            $errors[] = "Incorrect username & password";
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

    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/argon.min5438.css?v=1.2.0" type="text/css">

</head>

<body class="bg-default">

    <!-- Main content -->
    <div class="main-content">

        <!-- Header -->
        <div class="header bg-gradient-primary py-6 py-lg-7 pt-lg-4">
            <div class="container">
                <div class="header-body text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">Admin login credential to login into you account.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small> Sign in with credentials</small>
                            </div>
                            <form class="needs-validation" novalidate role="form"
                                action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                <div class="msg">
                                    <?php
                                    if ($errors) {
                                        foreach ($errors as $key => $value) {
                                            echo '
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>' . $value . '
                    </div>';
                                        }
                                    }
                                    ?>

                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" name="email" placeholder="Email" type="email"
                                            required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                        <div class="invalid-feedback">
                                            <center> Please enter valid email. </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" name="password"
                                            type="password" required>
                                        <div class="invalid-feedback">
                                            <center> Please enter password. </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox" checked>
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <center>
                                <span class="text-light"> Do you want to logged in as user? </span>
                                <a href="../login.php" class="text-white"> &nbsp;<medium>Log in</medium></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="../assets/js/argon.min5438.js?v=1.2.0"></script>
    <script src="../assets/js/demo.min.js"></script>
    <script>
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
    })();
    </script>
</body>

</html>