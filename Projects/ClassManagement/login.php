
<?php 
  include_once("php_action/database.php");
  
  
  session_start();

  if(isset($_SESSION['admin_id'])){
     header('location:dashboard.php');
  }

  $errors = array();

  if($_POST)
  {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($_POST['password']);

    if(empty($username) || empty($pass))
    {
       if($username == "" || $pass == "")
       {
        $errors[] = "Any field cannot be empty!. ";
       }

    }else{
      $sql = "select * from admin_login where username = '$username' and password = '$password' ";
      $query = mysqli_query($con,$sql);
      $uid = ""; $uname = ""; $pass ="";
     while($row = mysqli_fetch_array($query)) {
        $uid = $row['admin_id'];
        $uname = $row['username'];
        $pass = $row['password']; 

      }
       if($username == $uname && $password == $pass)
       {
        if(!$uname == "" &&  !$password == "")
        {
          $_SESSION['admin_id'] = 'admin_id';

          header('location:dashboard.php');
        }
       }
       else{

         $errors[] = "Incorrect username & password";
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
   
  <link rel="stylesheet" href="vendors/icheck/skins/all.css">
  
  <link rel="stylesheet" href="vendors/css/style.css">
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="shortcut icon" href="images/career.png" />
   
</head>

<body>
  <div class="container-scroller" >
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <center><img src="images/career.png" class="img" alt="logo" width="40%" height="40%" /></center>
                <br>
                <div class="msg">
                <?php 
                if($errors)
                {
                  foreach ($errors as $key => $value) {
                    echo '<div class="alert" style="background-color:red; color:white;" ><i class="mdi mdi-alert-circle" style="color:white;" ></i><button style="color:green;" type="button" class="close" data-dismiss="alert">&times;</button>'.$value.'</div>';
                  }

                }


                ?>
              </div>
               
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="username" required placeholder="Username" id="username" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi  mdi-account-convert"></i>

                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" required class="form-control" name="password" id="password" placeholder="*********" >
                    <div class="input-group-append">
                      <span class="input-group-text" >
                       <span class="mdi mdi-eye-off"></span>
                      </span>
                    </div> 
                  </div>
                </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
              </form>
            </div>
            
            
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
    <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>

  <script src="js/off-canvas.js"></script>
 
  <script src="js/misc.js"></script>
  <script type="text/javascript">
      $(".mdi-eye-off").on("click", function() {
$(this).toggleClass("mdi-eye-off mdi-eye");
  var type = $("#password").attr("type");
if (type == "text"){ 
  $("#password").prop('type','password');}
else{ 
  $("#password").prop('type','text'); }
});
  </script>
</body>

</html>