<?php
   include_once("php_action/core.php"); 
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
       
       <div class="main-panel">
          <div class="content-wrapper">
            <br>
            <h5>  Fee Report </h5>
            <hr style="background-color: red;">
            <div class="card">
              <div class="card-header" style="background-color: #e6e6e6;"> Manage Fee 
                
               </div>
              <div class="card-body">
                <h4 class="card-title">Fees Details </h4>
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table table-bordered table-stripped table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>Student ID</th>
                          <th>Full Name</th>
                          <th>Mobile NO.</th>
                          <th>Course</th>
                          <th>Total Fee</th>
                          <th>Paid Fee</th>
                          <th>Balance Fee</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                    <?php 

                    $sql = "SELECT * from addmissiondetails";
                    $result= mysqli_query($con,$sql);  
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                        <tr>
                          <td> <?php echo $row['student_id']; ?> </td>
                          <td> <?php echo $row['first_name'].' '.$row['last_name']; ?> </td>  
                          <td> <?php echo $row['mobileNo']; ?> </td>
                          <td> <?php echo $row['courses']; ?> </td>
                          <td> <?php echo $row['totalFees']; ?> </td>
                          <td> <?php echo $row['paidFees']; ?> </td>
                          <td> <?php echo $row['balanceFees']; ?> </td>
                          <td>
                            <label class="badge badge-danger">pending</label>
                          </td>

                          <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="" id="dropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                 Action
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item edit_data" data-toggle="modal" data-target="#exampleModal" href="#one" id="<?php echo $row['id']; ?>" />Take Fee</a>
                                 <a class="dropdown-item"  href="#">Edit</a>
                                 <a class="dropdown-item view" id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#exampleModalCenter" href="#">View</a>
                                </div>
                            </div>
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
          

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              
               <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel"> Take Fee </h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>  
                <div class="modal-body">
                   <form   method="post" id="insertFee">
                    <input type="hidden" id="sid" name="sid" required="required"   autocomplete="off"/>
                      <div class="row">
                        <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Full Name  </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control text" placeholder="First Name" 
                             id="full_name" name="full_name" required="required"   autocomplete="off"/>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Pending Fee   </label>
                          <div class="col-sm-7">
                            <input type="text" placeholder="Total Fees" class="form-control" autocomplete="off" id="total_fees"  name="totalFees"  onkeypress="return isNumber(event)" required  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Take Fee   </label>
                          <div class="col-sm-7">
                            <input type="text" placeholder="Take Fees" autocomplete="off" name="paidFees" class="form-control" id="paid_fees" onkeyup="calculate_fees()" required 
                            onkeypress="return isNumber(event)" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Balance Fee </label>
                          <div class="col-sm-7">
                            <input style="background-color: #fff;" type="text" placeholder="Balance Fees" class="form-control" id="balance_fees" readonly name="balanceFees"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Date </label>
                          <div class="col-sm-7">
                            <input class="form-control" data-inputmask="'alias': 'date'" placeholder="DATE"  required="required" name="dof" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Remark
                           </label>
                          <div class="col-sm-9">
                            <textarea id="maxlength-textarea" class="form-control address" maxlength="200" rows="2" name="remark" placeholder="This textarea has a limit of 200 chars." required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                        <input type="submit" class="btn btn-default" value="submit"    />
                      </form>
                    </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal"> close </button>
                </div>
                </div>
                
              </div>
            </div>
     


         <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Student Fee Details </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="viewresult"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
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
  
  <script src="js/data-table.js"></script>
  <script src="js/dropify.js"></script>
  
  <script type="text/javascript">

     $(document).ready(function() {
      $(document).on('click', '.view', function(){
            var student_id = $(this).attr("id");
             console.log(student_id);
             $.ajax({  
                url:"php_action/viewFees.php",  
                method:"post",  
                data:{student_id:student_id},
                success:function(data){ 
                  $('#viewresult').html(data);  
                  $('#exampleModalCenter').modal('show');
                }  
              });
           });
      });

      $(document).ready(function() {
      $(document).on('click', '.edit_data', function(){
            var student_id = $(this).attr("id");
             console.log(student_id);
             $.ajax({  
                url:"php_action/feesfetch.php",  
                method:"post",  
                data:{student_id:student_id},
                dataType:"json",
                success:function(data){  

                     var fullName = data.first_name+"  "+data.last_name;  
                     $('#sid').val(data.id);
                     $('#full_name').val(fullName);
                     $('#total_fees').val(data.balanceFees);    
                }  
              });
           });
      });



    $(document).ready(function() {
      $('#insertFee').on('submit', function(event){
           event.preventDefault();
             $.ajax({  
                url:"php_action/insertFee.php",  
                method:"post",  
                data:$('#insertFee').serialize(),
                success:function(data){  
                     $('#insertFee')[0].reset();
                     $('#exampleModal').modal('hide');
                         
                }  
              });
           });
      });
  </script>
</body>

</html>