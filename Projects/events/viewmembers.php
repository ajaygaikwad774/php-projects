
<?php

session_start();

if(!isset($_SESSION['login']))
{
    $_SESSION['redirectURL'] =  $_SERVER['REQUEST_URI'];
    header('location:adminlogin.php');
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
   
</head>

<body>

    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="adminprofile.php">Admin Panel</a>
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
                                        <a href="addevents.php">Add Events</a>
                                    </li>
                                    <li>
                                        <a href="viewevents.php">view events</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="viewmembers.php">
                                <i class="far fa-gem"></i>
                                <span>Members</span>
                            </a>
                        </li>
						
                       
                        <li class="sidebar-dropdown">
                            <a href="logout.php">
                                <i class="fa fa-bell"></i>
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
                        <center> <h5 style="font-weight: bold;"> Details Of  Members</h5> </center>
                        <br>
                       <table class="table table-bordered table-hover table-striped " >
                          <tr>
                            <th>Roll Number</th>
                            <th>Firs Name</th>
                            <th>Last Name</th>
                            <th>Department</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Actions</th>
                          </tr>
                          
                          <?php
include_once('config.php');
                                $q = "select * from applymembers";
                                $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){
        
        if($res['username'] && $res['password'] != null)
        {
 ?>
   <tr >
    <td> <?php echo $res['roll_number'];  ?> </td>
    <td> <?php echo $res['firstname'];  ?> </td>
    <td> <?php echo $res['lastname'];  ?> </td>
    <td> <?php echo $res['department'];  ?> </td>
    <td> <?php echo $res['username'];  ?> </td>
    <td> <?php echo $res['password'];  ?> </td>

    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button>  </td>

    </tr>
    
   <?php 
    }
   }

   ?>


                          
                       </table>
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