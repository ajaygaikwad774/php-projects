

<?php

session_start();

if(!isset($_SESSION['login']))
{
    ?>
    <script type="text/javascript">
      window.location="memberlogin.php";
    </script>
    <?php
}

  $id =  $_SESSION['userid'];
  include_once('config.php');

  $sql= "select firstname,lastname from applymembers where id = '$id'";
          
  $query = mysqli_query($con, $sql) ;

  $row  = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Dy Patil ITSA </title>

  <!-- Favicons -->
  <link href="img/fav.jpg" rel="icon">
  
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
<script type="text/javascript">
     
		<script type="text/javascript">

                 function preventBack()
                 {
                     window.history.forward();
                 }
                 setTimeout("preventBack()",0);

                window.onunload = function() { null };
        </script>
</script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>IT<span>SA</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="memberlogout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php  echo $row['firstname']." ".$row['lastname']  ?></h5>
          <li class="mt">
            <a class="active" href="#">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-desktop"></i>
              <span> Certificates </span>
              </a>
          </li>
       
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <br>
       <br>
           <h4><strong> <center> Latest Events </center> </strong> </h4>
           <br>
                       <table class="table table-bordered table-hover table-striped " >
                          <tr>
                            <th> Title </th>
                            <th> Theme </th>
                            <th> Event Date </th>
                            <th> Images </th>
                            <th> Description </th>
                          </tr>

                          <?php

                                
                                $q = "select * from addevents";
                                $query = mysqli_query($con,$q);
                                while($res = mysqli_fetch_array($query)){
                                   $image = $res['imagename'];
                                ?>

                                            <tr >
                                              <td> <?php echo $res['title'];  ?> </td>
                                              <td> <?php echo $res['theme'];  ?> </td>
                                              <td> <?php echo $res['event_date'];  ?> </td>
                                              <td> <?php echo '<img src="img/'.$image.'" height="70" width="100" >'; ?> </td>
                                              <td> <?php echo $res['description'];  ?> </td>

                                            </tr>
   
                                   <?php
                                   
                                }
                        
                                  
                              ?>
                            </table>
      </section>
    </section>
    <!--main content end-->
 
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
 
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
   
        title: 'Welcome to ITSA!',
       
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Developed by Shweta Patil.',
        
        image: 'img/friends/fr-10.jpg',
       
        sticky: false,
        
        time: 3000,
      
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
</body>

</html>
