<?php include_once("php_action/core.php");
include_once("php_action/database.php");

$pid = $_SESSION['patient_id'];

$sql = "SELECT * FROM `registration` WHERE id = '$pid'";

$query = mysqli_query($con, $sql);

$result  = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DoctorApp</title>
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/argon.min5438.css?v=1.2.0" type="text/css">

</head>

<body>

    
    <!-- Main Panel -->

    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-light  bg-secondary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="dashboard.php">
                                <i class="ni ni-shop text-primary"></i>
                            </a>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="booking.php">
                                <i class="ni ni-ungroup text-orange"></i>
                            </a>
                        </li>
                     <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">new</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      
                      <?php 
                          
                            $sql = "select * from health_tips";

                            $query = mysqli_query($con, $sql);

                           while ($row  = mysqli_fetch_array($query)){
                       ?>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Dr Gunwanta </h4>
                          </div>
                          <div class="text-right text-muted">
                            <small> <?php  echo date('h:i A', strtotime($row['updateAt']))?></small>
                          </div>
                        </div>
                        <p class="text-sm mb-0"><?php echo $row['description']; ?></p>
                      </div>
                      <?php 
                    }
                  ?>
                    </div>
                  </a>
               </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>

                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="assets/img/theme/icon.png">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?php echo $result['name']; ?> </span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome <span class="text-danger">  <?php echo $result['name']; ?>!</span> </h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>

                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main-content" id="panel">
            <!-- Topnav -->
            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#">Candidate Details</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->



            <div class="container-fluid mt--6">
                <!-- Table -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="mb-0">Registered Candidate Details </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th> Sr No.</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Registered At</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="table-user">
                                                <b><?php echo $result['name'] ?></b>
                                            </td>
                                            <td class="table-user">
                                                <b><?php echo $result['mobile']; ?></b>
                                            </td>
                                            <td class="table-user">
                                                <b><?php echo $result['email']; ?></b>
                                            </td>
                                            <td class="table-user">
                                                <b> <?php echo $result['password']; ?> </b>
                                            </td>
                                            <td class="table-user">
                                                <b> <?php echo date('d/m/Y', strtotime($result['createdAt'])); ?></b>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-wrapper">
                            <!-- Form controls -->
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header">
                                    <h3 class="mb-0">Search Info</h3>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="form-group">
                                            <label class="form-control-label" for="time_slot">Select
                                                Time
                                                Slot</label>
                                            <select class="form-control" id="time_slot" name="time_slot" required>
                                            <option disabled selected value="">Please Select</option> 
                                                <?php 
                                                    
                                                    $selectSql = "SELECT time_slot from slot";
                                                    $resultSql = mysqli_query($con, $selectSql);

                                                   while ($row = mysqli_fetch_assoc($resultSql)) {
                                                ?>
                                    
                                                <option value="<?php echo $row['time_slot'] ?>"><?php  echo $row['time_slot']; ?></option>
                                              <?php
                                                   }

                                                ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                    Please select slot
                                                </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="submit"> Search </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="idResult"></div>


        </div>



        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <script src="assets/js/argon.min5438.js?v=1.2.0"></script>
        <script src="assets/js/demo.min.js"></script>

        <script>
        $(document).ready(function(e) {
            $('form').on('submit', function(e) {
                e.preventDefault();
                var time_slot = $('#time_slot').val();
                console.log(time_slot);
                $.ajax({
                    url: "php_action/search.php",
                    method: "post",
                    data: {
                        time_slot: time_slot
                    },
                    success: function(data) {
                        $('#idResult').html(data);
                    }
                });
            });

        });

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