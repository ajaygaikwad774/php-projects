<?php include_once("php_action/core.php");
    include_once("php_action/database.php");
 ?>
<?php

$success = array();
$errors = array();

 if($_POST)
  {
   if(isset($_POST['submit']))
    {
     $first_name = $_POST['fname'];
     $last_name = $_POST['lname'];
     $mobile = $_POST['mobile'];
     $courses = implode(',',$_POST['courses']);
     $email = $_POST['email'];
     $fees = $_POST['fees'];
     $doe = date('Y-m-d');

     $sql = "insert into enquiry_details(first_name,last_name,doe,mobile_no,course,email,fees) values('$first_name','$last_name','$doe','$mobile','$courses','$email','$fees') ";

     $query = mysqli_query($con,$sql);
    if($query)
    {
        $success[] = " Response saved sucessfully ";
     
    }
    else if(!$query)
    {
        $errors[] = " Failed to save responses ";
    }   
  }
}
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

  <link rel="stylesheet" href="vendors/icheck/skins/all.css">
  
  <link rel="stylesheet" href="vendors/css/style.css">
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="shortcut icon" href="images/career.png" />

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
            <a class="nav-link" href="student_certificate">
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
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
         
         <div class="row">
           <div class="col-md-12 grid-margin stretch-card">
          
                <div class="msg" style="width: 100%">
                   <?php 
                           if($success)
                            {
                             foreach ($success as $key => $value) {
                               echo '<div class="alert alert-success"><i class="mdi mdi-checkbox-marked-circle-outline"></i><button type="button" class="close" data-dismiss="alert">&times;</button>'.$value.'</div>'; 
                             }
                            }
                            else if($errors)
                            {
                               foreach ($errors as $key => $value) {
                               echo '<div class="alert alert-danger"><i class="mdi mdi-alert-circle"></i>  <button type="button" class="close" data-dismiss="alert">&times;</button>'.$value.'</div>'; 
                              }
                            }
                     ?>
                </div>
           
           </div>
         </div>
 
          <div class="row">
            
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Enquiry Form</h4>
                  
                  <form class="forms-sample" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control text" name="fname" id="fname" placeholder="First Name" required autocomplete="off" pattern="[a-zA-Z]+" title="Enter valid name"  >
                    </div>
                    <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control text" name="lname" id="lname" placeholder="Last Name" required autocomplete="off"  pattern="[a-zA-Z]+" title="Enter valid name">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile Number</label>
  
              <input type="text" class="form-control" id="phone" name="mobile" pattern="[1-9]{1}[0-9]{9}" placeholder="Mobile" title="Please Enter valid mobile number" 
                       required autocomplete="off" maxlength="10" onkeypress="return isNumber(event)">

                    </div>
                  <div class="form-group">
                    <label for="courses">Courses
                    </label>
                    <select class="js-example-basic-multiple" multiple="multiple" name="courses[]" style="width:100%" >

                           <option value="perl">Perl</option>
                           <option value="java">Java</option>
                           <option value="python">Python</option>
                           <option value="php">PHP</option>
                           <option value="asp.net">Asp .Net</option>

                    </select>
                  </div>

                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" 
                      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter valid email address" autocomplete="off" name="email">
                    </div>
                   <div class="form-group">
                      <label for="fees">Fees</label>
                      <input type="text" class="form-control" id="fees" placeholder="Fees" autocomplete="off"
                      pattern="[0-9]+" title="use digit like [0-9] only" required="required" onkeypress="return isNumber(event)" name="fees">
                    </div>
                    <button type="submit" class="btn btn-success btn-fw" name="submit">
                            <i class="mdi mdi-file-document" ></i>Submit</button>
                    <button type="reset" class="btn btn-secondary btn-fw">
                            <i class="mdi mdi-refresh"></i>Reset</button>
                  </form>
                </div>
              </div>
            </div>

            

            <div class="col-lg-6 grid-margin " >

                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title d-flex">Upload Image

                    </h4>
                    <input type="file" class="dropify" /> </div>
                </div>
                 <div class="card" >
                  <div class="card-body" >
                    <h4 class="card-title d-flex">Upload Image

                    </h4>
                    <input type="file" class="dropify" /> </div>
                </div>
                <div class="form-group">
                  <br>
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info btn-fw" type="button">
                            <i class="mdi mdi-upload"></i>Upload</button>
                          </span>
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

  <script src="vendors/js/file-upload.js"></script>
  <script src="vendors/js/iCheck.js"></script>
  <script src="vendors/js/typeahead.js"></script>
  <script src="vendors/js/select2.js"></script>
  <script src="js/dropify.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  
  
</body>

</html>


