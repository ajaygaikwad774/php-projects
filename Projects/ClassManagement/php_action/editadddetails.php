<?php include_once("core.php");
    include_once("database.php");
?>

<?php
    $studentId = $_GET['editId'];

    $sql = "select * from addmissiondetails where student_id = '$studentId' ";

    $result= mysqli_query($con,$sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
 
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $gender = $row['gender'];
            $dob = date('d/m/Y',strtotime($row['dob']));
            $mobileNo = $row['mobileNo'];
            $alternateNo = $row['alternateNo'];
            $aadharNo = $row['aadharNo'];
            $email = $row['email'];
            $qualification = $row['qualification'];
            $batchTime = $row['batchTime'];
            $courses = $row['courses'];
            $addressPlace = $row['address'];
            $city = $row['city'];
            $state = $row['state'];
            $pincode = $row['pincode'];
            $totalFees = $row['totalFees'];
            $paidFees = $row['paidFees'];
            $balanceFees = $row['balanceFees'];          
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

  <link rel="stylesheet" href="../vendors/icheck/skins/all.css">
  
  <link rel="stylesheet" href="../vendors/css/style.css">
  <link rel="stylesheet" href="../css/style.css">
 
  <link rel="shortcut icon" href="../images/career.png" />
  
  <script type="text/javascript">
    window.history.forward();
  </script>

 
<?php

  if($_POST)
  {
   if(isset($_POST['submit']))
    {
     $studentId = $_POST['studentId'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
     $dob = date('Y-m-d',strtotime($_POST['dob']));
     $mobileNo = $_POST['mobileNo'];
     $alternateNo = $_POST['alternateNo'];
     $aadharNo = $_POST['aadharNo'];
     $email = $_POST['email'];
     $qualification = $_POST['qualification'];
     $batchTime = date('h:i A',strtotime($_POST['batchTime']));
     $courses = implode(',',$_POST['courses']);
     $address = $_POST['address'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $pincode = $_POST['pincode'];
     $totalFees = $_POST['totalFees'];
     $paidFees = $_POST['paidFees'];
     $balanceFees = $_POST['balanceFees'];

     $fileupload  = $_FILES['fileupload']['name'];
     $fileuploadTmp = $_FILES['fileupload']['tmp_name'];
     $folder = "../images/photos/";
     move_uploaded_file($fileuploadTmp,$folder.$fileupload);


     $updateSql = "UPDATE addmissiondetails set student_id='$studentId', first_name='$first_name', last_name='$last_name', gender='$gender', 
       dob='$dob', mobileNo='$mobileNo' , alternateNo='$alternateNo', aadharNo='$aadharNo', email='$email', qualification='$qualification', batchTime='$batchTime', courses='$courses', address='$address', city='$city',  state='$state', pincode='$pincode',  totalFees='$totalFees', paidFees='$paidFees', balanceFees='$balanceFees', photoname='$fileupload' where student_id = '$studentId'";
    
    $updateQuery = mysqli_query($con,$updateSql);
    
       if($updateQuery)
       {
        header("location:../dashboard.php");
       }
       else
       {
        ?>

         <script type="text/javascript">
           alert(" Oops something went wrong! ");
         </script>

         <?php
       }
  }
}

?>

</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard.php">
          <img src="../images/career.png" class="img" alt="logo" style="height: 100%;" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../dashboard.php">
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
                <a class="dropdown-item" href="#"> Change Password </a>
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
            <a class="nav-link" href="#">
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
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"> 
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Addmission Form </h4>
                   
                  <form class="form-sample" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" 
                    enctype="multipart/form-data" onsubmit="return confirm('Do you really want to edit the form?');">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <div class="col-sm-9">
                            <input type="hidden" class="form-control address" placeholder="e.g. 18CI5021" required 
                            pattern="[0-9]{2}[A-Z]{2}[0-9]{4}" id="studentId" name="studentId" title="Please enter Student ID in correct format Eg. 18CI1000" maxlength="8" autocomplete="off"
                            value="<?php echo $studentId; ?>" />
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  <hr>

                    <p class="card-description alert-success">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">First Name <i class="mdi mdi-close text-danger"></i> </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control text" placeholder="First Name" pattern="[a-zA-Z]+" title="Enter valid name"  name="first_name" required="required" value="<?php echo $first_name; ?>"  autocomplete="off"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Last Name <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control text" placeholder="Last Name" pattern="[a-zA-Z]+" title="Enter valid name" required value="<?php echo $last_name; ?>" name="last_name" autocomplete="off" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Gender <i class="mdi mdi-close text-danger"></i> 
                          </label>
                          <div class="col-sm-8">
                            <select class="form-control" name="gender" required="required">
                              <option value="" selected disabled>Please select...</option>
                              <option value="male" <?php if($gender == "male"){?> selected="selected" <?php } ?> >Male</option>
                              <option value="female" <?php if($gender == "female"){?> selected="selected" <?php } ?>>Female</option>
                              <option value="other" <?php if($gender == "other"){?> selected="selected" <?php } ?>>Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Date of Birth <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-8">
                            <input class="form-control" data-inputmask="'alias': 'date'" placeholder="DOB" required="required" name="dob" value="<?php echo $dob; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Mobile <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Mobile" 
                            pattern="[1-9]{1}[0-9]{9}" title="Please Enter valid mobile number" 
                       required autocomplete="off" maxlength="10" onkeypress="return isNumber(event)" 
                        value="<?php echo $mobileNo; ?>" name="mobileNo" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Alternative Mobile </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Alernative Mobile Number"  pattern="[1-9]{1}[0-9]{9}" title="Please Enter valid mobile number" 
                            autocomplete="off" maxlength="10" onkeypress="return isNumber(event)" name="alternateNo" value="<?php echo $alternateNo; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Aadhar No. <i class="mdi mdi-close text-danger"></i>
                          </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control " onkeypress="return isNumber(event)" id="aadhar" placeholder="Aadhar Card Number" required maxlength="14" name="aadharNo" autocomplete="off" value="<?php echo $aadharNo; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Email
                           </label>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter valid email address" autocomplete="off" value="<?php echo $email; ?>" name="email"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <p class="card-description alert-info">
                     Courses & Qualifications
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Qualification<i class="mdi mdi-close text-danger"></i>
                           </label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control address" name="qualification" placeholder="Qualification" required autocomplete="off" value="<?php echo $qualification; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Batch Time<i class="mdi mdi-close text-danger"></i>
                           </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control address" name="batchTime" 
                            value="<?php echo $batchTime;?>"  required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                       <div class="form-group">
                          <label for="courses">Courses </label>
                          <select class="js-example-basic-multiple" multiple="multiple" required name="courses[]" style="width:100%" >
                           <option value="perl">Perl</option>
                           <option value="java">Java</option>
                           <option value="python">Python</option>
                           <option value="php">PHP</option>
                           <option value="asp.net">Asp .Net</option>
                          </select>
                       </div>
                     </div>
                   </div>
                    <hr>
                    <p class="card-description alert-warning">
                      Address Section
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address </label>
                          <div class="col-sm-9">
                            <textarea id="maxlength-textarea" class="form-control address"  maxlength="200" rows="2" placeholder="This textarea has a limit of 200 chars."  required name="address" autocomplete="off" > <?php echo $addressPlace; ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control address" placeholder="City" autocomplete="off" name="city" required value="<?php echo $city; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control address" placeholder="State" name="state"  autocomplete="off" required value="<?php echo  $state; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pincode <i class="mdi mdi-close text-danger"></i>      </label>
                          <div class="col-sm-9">
                            <input type="text" maxlength="6" placeholder="Pincode" required onkeypress="return isNumber(event)" class="form-control" name="pincode" 
                                value="<?php echo  $pincode; ?>" autocomplete="off" />
                          </div>
                        </div>
                      </div>
                    </div>
                   <hr>
                   <p class="card-description alert-primary">
                      Photo & Fees 
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Total Fees <i class="mdi mdi-close text-danger"></i>  </label>
                          <div class="col-sm-8">
                            <input type="text" placeholder="Total Fees" class="form-control" autocomplete="off" id="total_fees" name="totalFees" value="<?php echo $totalFees; ?>"  onkeypress="return isNumber(event)" required  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Paid Fees <i class="mdi mdi-close text-danger"></i>  </label>
                          <div class="col-sm-8">
                            <input type="text" placeholder="Paid Fees" autocomplete="off" name="paidFees" class="form-control" id="paid_fees" onkeyup="calculate_fees()" 
                              value="<?php echo  $paidFees; ?>" required onkeypress="return isNumber(event)" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Balance Fees <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-8">
                            <input style="background-color: #fff;" type="text" placeholder="Balance Fees" class="form-control" id="balance_fees" readonly value="<?php echo  $balanceFees; ?>" 
                            name="balanceFees"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Upload Photo <i class="mdi mdi-close text-danger"></i></label>
                          <div class="col-sm-8">
                              <input type="file" class="dropify" name="fileupload"  required="required" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <center>    
                    <button type="submit" name="submit" id="submit" class="btn btn-danger btn-fw">
                            <i class="mdi mdi-file-document"  ></i>Update</button>
                    
                    </center>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
                      
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.php -->
        <footer class="footer">
          <div class="container-fluid clearfix">
           <center> <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.careerinfotech.in/" target="_blank">Carrer Infotech</a>. All rights reserved.</span></center>
            
          </div>
        </footer>
        <!-- partial -->
      </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>

  <script src="../js/off-canvas.js"></script>
  <script src="../vendors/js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../vendors/js/settings.js"></script>
  <script src="../vendors/js/todolist.js"></script>

  <script src="../vendors/js/file-upload.js"></script>
  <script src="../vendors/js/iCheck.js"></script>
  <script src="../vendors/js/typeahead.js"></script>
  <script src="../vendors/js/select2.js"></script>
  <script src="../js/dropify.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

   <script type="text/javascript">
     
    function calculate_fees()
    {
       var tf = document.getElementById("total_fees").value;
       var n = tf.length;
       document.getElementById("paid_fees").maxLength = n;
       var pf = document.getElementById("paid_fees").value;
       var bf= Number(tf) - Number(pf);
      if(tf == 0){
        alert(" please enter total amount ");
       }else if(!isNaN(tf)){
        document.getElementById("balance_fees").value=bf;
       }

    }


  
</script>
  
</body>

</html>

