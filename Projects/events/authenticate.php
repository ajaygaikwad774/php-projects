<?php
  
    if(isset($_POST['submit']))
    {
          session_start();
          
          $user=$_POST["uname"];
          $pass=$_POST["pass"];
          
          include_once('config.php');

          $sql= "select username,password,id from applymembers where username = '$user'";
          
          $query = mysqli_query($con, $sql) ;

          $pwd  = mysqli_fetch_array($query);

          if($pwd['password'] == $pass)
          {
          	if(!isset($_SESSION['login']))
            {
               $_SESSION['login'] = true;
               $_SESSION['username'] = $user;
               $_SESSION['userid'] = $pwd['id'];
               header('location:membersprofile.php');
            }
            else
            {
               ?>
               <script type="text/javascript">
                 alert('You are already logged in');
                 window.location="membersprofile.php";
               </script>
               <?php
            }
          }
          else
          {
             ?>

             <script type="text/javascript">
             	alert('username or password error');
             	window.location="memberlogin.php";
             </script>
              <?php

          }
       }
       else
       {

             ?>

             <script type="text/javascript">
              window.location="memberlogin.php";
             </script>
            <?php
       }
    ?>
