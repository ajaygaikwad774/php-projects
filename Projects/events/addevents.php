

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
   <title> Add Events </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">  
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/fav.jpg"/>

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
                                        <a href="addevents.php"> Add Events </a>
                                    </li>
                                    <li>
                                        <a href="viewevents.php"> View Events </a>
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

                <div class="row" >
                    <div class="form-group col-md-12">
                                            
                                    <div class="container"> 
  

               <div class="row"> 
                   
              <div class="col-md-2"> </div>
               
                <div class="col-md-8" > 
                    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post"  >
<br>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label"> Event Title </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="theme" class="col-sm-2 col-form-label">Event Theme </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="theme" name="theme" required="required">
    </div>
  </div>

    <div class="form-group row">
    <label for="date" class="col-sm-2 col-form-label"> Date </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="event_date" name="event_date" required="required" >
    </div>

  </div>
    <div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Photo </label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="dept" name="fileupload" required="required">
   </div>

  </div>
   <div class="form-group row">
    <label for="desp" class="col-sm-2 col-form-label">Description </label>
    <div class="col-sm-10">
        <textarea   name="description">  </textarea>
    </div>
  </div>

   <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
        </form> 
        </div>
              <div class="col-md-2"> </div>
        </div>    
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
    

    <?php



include_once('config.php');

if(isset($_POST['submit'])) 
{
         $title = $_POST['title'];
         $theme = $_POST['theme'];

         $originalDate = $_POST['event_date'];
         $event_date = date("Y-m-d", strtotime($originalDate));
         
         $description = $_POST['description'];
         
         $fileupload = $_FILES['fileupload']['name'];
         $fileuploadTMP = $_FILES['fileupload']['tmp_name'];
         $folder = "img/";
         move_uploaded_file($fileuploadTMP, $folder.$fileupload);

         
         $sql = "INSERT INTO addevents(title,theme,event_date,imagename,description) VALUES ('$title','$theme','$event_date','$fileupload','$description')";
         $query = mysqli_query($con, $sql);

         if($query)
         {
            ?>
            <script type="text/javascript">
              alert(" Event added successfully ");
            </script>

            <?php
         }
}   

?>
</body>

</html>