

<?php

session_start();

if(!isset($_SESSION['login']))
{
    $_SESSION['redirectURL'] =  $_SERVER['REQUEST_URI'];
    header('location:adminlogin.php');
}

include_once('config.php');

if(isset($_GET['id']))
{
   $id = $_GET['id'];   
   $q = "select * from applymembers where id='$id'";
   $query = mysqli_query($con,$q);

   $res = mysqli_fetch_array($query);

   
}

if(isset($_POST['generate']))
   {
     $id = $_POST['id'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $q = " UPDATE applymembers set id=$id, username='$username', password='$password' where id=$id  ";

     $query = mysqli_query($con,$q);

   if($query)
   {
      ?>
      <script type="text/javascript">
          alert(" username and password generated ");
          window.location = "viewmembers.php";
      </script>

      <?php
   }
}
?>
<!DOCTYPE html>
<html lang="en"><head>
   <title> Welcome Admin </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">  
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/fav.jpg"/>
    <script type="text/javascript">
    
      function preventBack()
        {
            window.history.forward();
        }
        setTimeout("preventBack()",0);
   </script>
        <style type="text/css">
        
        form {
  /* Just to center the form on the page */
  margin: 0 auto;
  width: 600px;
  /* To see the outline of the form */
  padding: 1em;
  border: 2px solid #000;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* To make sure that all labels have the same size and are properly aligned */
  
  text-align: right;
}

input, textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* To give the same size to all text fields */
  width: 300px;
  box-sizing: border-box;

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highlight on active elements */
  border-color: #000;
}

textarea {
  /* To properly align multiline text fields with their labels */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 10em;
  width: 32em;

}

.button {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}

button {
  /* This extra margin represent roughly the same space as the space
     between the labels and their text fields */
  margin-left: .5em;
}
    </style>

</head>

<body>

    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="adminprofile.html">Admin Panel</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>Madhav vyas sir</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="adminprofile.php">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Events</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="addevents.php"> Add Events </a>
                                    </li>
                                    <li>
                                        <a href="viewevents.php"> View Events </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="adminmember.html">
                                <i class="far fa-gem"></i>
                                <span>Members</span>
                            </a>
                        </li>
						
                       
                        <li class="sidebar-dropdown">
                            <a href="logout.php">
                                <i class="fa fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                    
                </div>
                <div class="dropdown">
                    <a href="#" >               
					    <i class="fa fa-envelope"></i>
                    </a>
                    
                </div>
                <div class="dropdown">
                    <a href="#">
                        <i class="fa fa-cog"></i>
                    </a>
                    
                </div>
                <div>
                    <a href="logout.php">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-md-12">
                        

                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                         <div class="container"> 
  

  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  
<div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $res['id']; ?>" >
    </div>
  </div>

  <div class="form-group row">
    <label for="fname" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $res['firstname']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $res['lastname']; ?>">
    </div>
  </div>
    <div class="form-group row">
    <label for="rn" class="col-sm-2 col-form-label">Roll Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rn" name="rn" value="<?php echo $res['roll_number']; ?>">
    </div>
  </div>
    <div class="form-group row">
    <label for="dept" class="col-sm-2 col-form-label">Department </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dept" name="dept" value="<?php echo $res['department']; ?>" >
    </div>
  </div>
  <div class="form-group row">
    <label for="amount" class="col-sm-2 col-form-label">Amount </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $res['amount']; ?>">
    </div>
  </div>

    <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username"  required="required" >
    </div>
  </div>


    <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="dept" name="password" placeholder="Enter Password" required="required" >
    </div>
  </div>
   <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="generate" class="btn btn-primary">Generate</button>
    </div>
  </div>
        </form>     
        </div>           

                    </div>
                </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
   
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>

</html>