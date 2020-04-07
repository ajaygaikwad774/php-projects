<?php include_once("php_action/core.php");
  include_once("php_action/database.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title> Career Infotech </title>

  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="vendors/css/feather.css">

  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="vendors/css/style.css">
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="shortcut icon" href="images/career.png" />
  
  <style type="text/css">
    .btn{

      line-height: 2;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard.php">
          <img src="images/career.png" class="img" alt="logo" style="height: 100%;" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php">
          <img src="images/career.png" class="img" style="height: 100%; width: 100%" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center" style="background: linear-gradient(100deg,#00ce68,#75e62e);">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-home"></i>Home
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Services</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
     <li class="nav-item dropdown d-none d-xl-inline-block">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="profile-text"> Ganesh P. Sakpal</span>
                <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#"> Change Password </a>
                <a class="dropdown-item" href="logout.php"> Sign Out </a>
              </div>
            </li>                          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Ganesh P. Sakpal</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"> Registration </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="enqform.php">Enquiry Form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addform.php">Addmission Form</a>
                </li>
              </ul>
            </div>

          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Student Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
               <li class="nav-item">
                  <a class="nav-link" href="enqdetail.php"> Enquiry Details </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="adddetail.php"> Addmission Details </a>
                </li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title"> Student Certificates </span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="fees.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Fees</span>
            </a>
          </li>

          
          
        </ul>
      </nav>
      
      

       <div class="main-panel">
          <div class="content-wrapper">
            <br>
            <h5> Enquiry Details </h5>
            <hr style="background-color: red;">
            <div class="card">
              <div class="card-header" style="background-color: #e6e6e6;"> Manage Enquiry 
                <span style="float: right;"> <a href="enqform.php" class="btn btn-primary"><i class="mdi mdi-plus" ></i> Add Enquiry</a> </span>
               </div>
              <div class="card-body">
           
                <div class="row">
                  <div class="col-12">
                    
                   
                    <table id="order-listing" class="table table-bordered table-stripped  table-responsive">
                    <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Date Of Enquiry</th>
                          <th>Mobile Number</th>
                          <th>Courses</th>
                          <th>Fees</th>
                          <th>Status</th>
                          <th>Join</th>
                          <th>Actions</th>
                        </tr>
                   </thead>
                   <?php

                  $sql = "SELECT * from enquiry_details WHERE flag = 1";
                  $result= mysqli_query($con,$sql);  
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                        <tr>
                          <td><img src="images/faces-clipart/pic-1.png" alt="image"> &nbsp;
                           <?php echo $row['first_name'].' '.$row['last_name']; ?> </td>  
                          <td><?php echo date('d-m-Y',strtotime($row['doe'])); ?></td>
                          <td><?php echo $row['mobile_no']; ?></td>
                          <td><?php echo $row['course']; ?></td>
                          <td><?php echo $row['fees']; ?></td>
                          <td>
                            <label class="badge badge-info">On hold</label>
                          </td>

                          <td>
                            
                            <button class="btn btn-outline-light text-primary"> <a href="php_action/addmform.php?addmissionId=<?php echo $row['id'];?>">
                           <i class="mdi mdi-file-document"></i> Apply </a> </button>
                           
                          </td>
                          <td>
                            <button class="btn btn-outline-light text-info"  > <a href="php_action/editenqdetails.php?edit_id=<?php echo $row['id'];?>">
                            <i class="mdi mdi-auto-fix"></i>Edit </a></button> &nbsp;
                            <button class="btn btn-outline-light text-danger">  <a href="php_action/deleteenqdetails.php?delete_id=<?php echo $row['id'];?>">
                            <i class="mdi mdi-close-circle-outline"></i> Delete </a> </button>
                          </td>
                        </tr>
                  
                   <?php
                 }
              ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
       <footer class="footer">
          <div class="container-fluid clearfix">
           <center> <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.careerinfotech.in/" target="_blank">Carrer Infotech</a>. All rights reserved.</span></center>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>

  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="vendors/js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="vendors/js/settings.js"></script>
  <script src="vendors/js/todolist.js"></script>
  <script src="js/data-table.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  
  
</body>

</html>