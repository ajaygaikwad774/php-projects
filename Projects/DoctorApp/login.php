<?php
include_once("php_action/database.php");

session_start();

if (isset($_SESSION['patient_id'])) {
  header('location:dashboard.php');
}


$errors = array();
$success = array();

if ($_POST) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($email) || empty($password)) {
    if ($email == "" || $password == "") {
      $errors[] = "Any field cannot be empty!. ";
    }
  } else {
    $sql = "select id,email,password from registration where email = '$email' and password = '$password' ";
    $query = mysqli_query($con, $sql);
    $uid = "";
    $uname = "";
    $pass = "";
    while ($row = mysqli_fetch_array($query)) {
      $uid = $row['id'];
      $uname = $row['email'];
      $pass = $row['password'];
    }
    if ($email == $uname && $password == $pass) {
      if (!$email == "" &&  !$password == "") {
        $_SESSION['patient_id'] = $uid;
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
        <div class="header bg-gradient-primary py-6 py-lg-7 pt-lg-4">
            <div class="container">
                <div class="header-body text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">Use your login credential to login into you account.</p>
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
                                            <center> Please enter password </center>
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
                                    <button type="submit" name="submit" class="btn btn-primary my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Forgot password?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="register.php" class="text-light"><small>Create new account</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="margin:0 auto;">
                    <h4 class="modal-title" id="exampleModalLongTitle">Message Box</h4>

                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h3> You have entered into the system </h3>
                    </center>
                    <br>
                    <center> <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button> </center>
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