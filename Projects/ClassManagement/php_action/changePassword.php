
<?php 

include_once('core.php');
 include_once("database.php");

  $success = array();
  $error = array();
   
  if($_POST) {
  $nPassword = $_POST['password'];
  $coPassword = $_POST['npassword'];
  $cpassword = $_POST['cpassword'];
  $currentPassword = md5($_POST['password']);
  $newPassword = md5($_POST['npassword']);
  $confirmPassword = md5($_POST['cpassword']);
  
  if(empty($coPassword) || empty($cpassword))
  {

    if($coPassword == "" || $cpassword = "")
    {
       $error[] = "Any field cannot be empty!. ";
    }
  }
  else
  {
    $sql = "SELECT username,password FROM admin_login WHERE password = '$currentPassword'";

    $query = mysqli_query($con,$sql); 

    $result = mysqli_fetch_assoc($query);

  if($currentPassword == $result['password']) 
  {
     
     if($newPassword == $confirmPassword)
     {
       
        $updateSql = "update admin_login set password = '$newPassword'  where  password = '$currentPassword'";
        $query = mysqli_query($con,$updateSql);

        if($query)
        {
          $success[] = "Your Password is =  "." ".$nPassword." "."  Please Re-login! ";
          header("refresh:2;url=../logout.php");
         }
        else{
          $error[] = "Oops failed to Update";
        }
      }
     else
     {
         $error[] = "New password does not match with Confirm password";
     }

  }else {

    $error[] = "Current password is incorrect";

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

  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="../vendors/css/feather.css">

  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  
  <link rel="stylesheet" href="../vendors/css/style.css">
  <link rel="stylesheet" href="../css/style.css">
 
  <link rel="shortcut icon" href="../images/career.png" />
  
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="../images/career.png" class="img" alt="logo" style="height: 100%;" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="../images/career.png" class="img" style="height: 100%; width: 100%" />
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
                <img class="img-xs rounded-circle" src="../images/faces/face1.jpg" alt="Profile image"> </a>
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
                <a class="dropdown-item" href="changePassword.php"> Change Password </a>
                <a class="dropdown-item" href="../logout.php"> Sign Out </a>
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
                  <img src="../images/faces/face1.jpg" alt="profile image">
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
            <a class="nav-link" href="../dashboard.php">
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
                  <a class="nav-link" href="../enqform.php">Enquiry Form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../addform.php">Addmission Form</a>
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
                  <a class="nav-link" href="../enqdetail.php"> Enquiry Details </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../adddetail.php"> Addmission Details </a>
                </li>
                
              </ul>
            </div>
          </li>
          
        <li class="nav-item">
            <a class="nav-link" href="#e">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title"> Student Certificates </span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../fees.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Fees</span>
            </a>
          </li>
          
          
        </ul>
      </nav>
    


     <div class="main-panel">
          <div class="content-wrapper ">
            <div class="row grid-margin ">
             
              <div class="col-lg-12 ">
               <div class="msg" style="width: 100%">
                   <?php 
                            if($error)
                            {
                             foreach ($error as $key => $value) {
                               echo '<div class="alert alert-danger"><i class="mdi mdi-alert-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button>'.$value.'</div>'; 
                             }
                            }
                             else if($success)
                             {
                              foreach ($success as $key => $value) {
                               echo '<div class="alert alert-success"><i class="mdi mdi-checkbox-marked-circle-outline"></i><button type="button" class="close" data-dismiss="alert">&times;</button>'.$value.'</div>';
                             }
                            }
                     ?>
                </div>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="card">
                  <div class="card-body">
                   <h4 class="card-title">Change Password</h4>
                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Current Password</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="25" type="password"  placeholder="Enter Current Password .." required="required" name="password" autocomplete="off"> </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">New Password</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" type="password" maxlength="20" name="npassword" id="npassword" placeholder="Enter New Password" required> </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label"> Confirm Password</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="10" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required > </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-3">
                        <button type="submit" class="btn btn-success btn-fw" name="submit">
                            <i class="mdi mdi-file-document" ></i>Submit</button> 
                        </div>
                      </div>
                  </div>
                </div>
               </form>
              </div>
              
            </div>
      </div>

         <footer class="footer">
          <div class="container-fluid clearfix">
           <center> <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.careerinfotech.in/" target="_blank">Carrer Infotech</a>. All rights reserved.</span></center>
            
          </div>
        </footer>

   </div>
  </div>
  </div>

  

  
           

  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>

  <script src="../js/off-canvas.js"></script>

  <script src="../js/misc.js"></script>


  
</body>

</html>

